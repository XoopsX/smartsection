<?php

/**
* $Id: submit.php,v 1.1 2012/03/31 09:53:54 ohwada Exp $
* Module: SmartSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

include_once("header.php");

Global $smartsection_category_handler, $smartsection_item_handler, $xoopsUser, $xoopsConfig, $xoopsModuleConfig, $xoopsModule;

// Get the total number of categories
$categoriesArray = $smartsection_category_handler->getCategoriesForSubmit();

if (!$categoriesArray) {
	redirect_header("index.php", 1, _MD_SSECTION_NEED_CATEGORY_ITEM);
	exit();
}

// Find if the user is admin of the module
$isAdmin = smartsection_userIsAdmin();

$groups = ($xoopsUser) ? $xoopsUser->getGroups() : XOOPS_GROUP_ANONYMOUS;
$gperm_handler = &xoops_gethandler('groupperm');
$hModConfig = &xoops_gethandler('config');
$module_id = $smartModule->getVar('mid');

$itemid = (isset($_GET['itemid'])) ? $_GET['itemid'] : 0;
$itemid = (isset($_POST['itemid'])) ? $_POST['itemid'] : $itemid;

if ($itemid != 0) {
	// We are editing an article
	$itemObj = $smartsection_item_handler->get($itemid);
	if (!($isAdmin ||
			(is_object($xoopsUser) &&
				($itemObj) &&
				(($xoopsUser->uid() == $itemObj->uid())
				)
			)
		  )
		)	{
	redirect_header("index.php", 1, _NOPERM);
	exit();
	}
	$categoryObj = $itemObj->category();
} else {
	// we are submitting a new article
	// if the user is not admin AND we don't allow user submission, exit
	if (!($isAdmin ||
		(isset($xoopsModuleConfig['allowsubmit']) && $xoopsModuleConfig['allowsubmit'] == 1 && (is_object($xoopsUser) || (isset($xoopsModuleConfig['anonpost']) && $xoopsModuleConfig['anonpost'] == 1))))
		) {
		redirect_header("index.php", 1, _NOPERM);
		exit();
	}
	$itemObj = $smartsection_item_handler->create();
	$categoryObj = $smartsection_category_handler->create();
}

$uid = is_object($xoopsUser) ? $xoopsUser->uid() : 0;

$op = '';

if (isset($_POST['post'])) {
	$op = 'post';
} elseif (isset($_POST['preview'])) {
	$op = 'preview';
} else {
	$op = 'add';
}
switch ($op) {
	case 'preview':

	Global $xoopsUser, $xoopsConfig, $xoopsModule, $xoopsModuleConfig, $xoopsDB;
	// Putting the values about the ITEM in the ITEM object
	$itemObj->setVar('categoryid', $_POST['categoryid']);
    $itemObj->setVar('uid', $uid);
	$itemObj->setVar('title', stripcslashes($_POST['title']));
	$itemObj->setVar('summary', stripcslashes($_POST['summary']));
	$itemObj->setVar('body', stripcslashes($_POST['body']));
	$itemObj->setVar('notifypub', $_POST['notifypub']);

	$itemObj->setVar('dohtml', isset($_POST['dohtml']) ? intval($_POST['dohtml']) : 0);
	$itemObj->setVar('dosmiley', isset($_POST['dosmiley']) ? intval($_POST['dosmiley']) : 0);
	$itemObj->setVar('doxcode', isset($_POST['doxcode']) ? intval($_POST['doxcode']) : 0);
	$itemObj->setVar('doimage', isset($_POST['doimage']) ? intval($_POST['doimage']) : 0);
	$itemObj->setVar('dobr', isset($_POST['dobr']) ? intval($_POST['dobr']) : 0);

	// Uploading the image, if any
	// Retreive the filename to be uploaded
	if ( $_FILES['image_file']['name'] != "" ) {
		$filename = $_POST["xoops_upload_file"][0] ;
		if( !empty( $filename ) || $filename != "" ) {
			global $xoopsModuleConfig;

			// TODO : Implement smartsection mimetype management
			$max_size = $xoopsModuleConfig['maximum_filesize'];
			$max_imgwidth = $xoopsModuleConfig['maximum_image_width'];
			$max_imgheight = $xoopsModuleConfig['maximum_image_height'];
			$allowed_mimetypes = smartsection_getAllowedImagesTypes();

			include_once(XOOPS_ROOT_PATH."/class/uploader.php");

			if( $_FILES[$filename]['tmp_name'] == "" || ! is_readable( $_FILES[$filename]['tmp_name'] ) ) {
				redirect_header( 'javascript:history.go(-1)' , 2, _AM_SSECTION_FILEUPLOAD_ERROR ) ;
				exit ;
			}

			$uploader = new XoopsMediaUploader(smartsection_getImageDir('item'), $allowed_mimetypes, $max_size, $max_imgwidth, $max_imgheight);

			if( $uploader->fetchMedia( $filename ) && $uploader->upload() ) {

				$itemObj->setVar('image', $uploader->getSavedFileName());

			} else {
				redirect_header( 'javascript:history.go(-1)' , 2, _AM_SSECTION_FILEUPLOAD_ERROR . $uploader->getErrors() ) ;
				exit ;
			}
		}
	} else {
		$itemObj->setVar('image', $_POST['image']);
	}

	$notifypub = isset($_POST['notifypub']) ? $_POST['notifypub'] : '';
	global $xoopsUser, $myts;

	$xoopsOption['template_main'] = 'smartsection_submit.html';
	include_once(XOOPS_ROOT_PATH . "/header.php");
	include_once("footer.php");

	$name = ($xoopsUser) ? (ucwords($xoopsUser->getVar("uname"))) : 'Anonymous';

	$categoryObj = $smartsection_category_handler->get($_POST['categoryid']);

	$item = $itemObj->toArray(null, $categoryObj, false);
	$item['summary'] = $item['maintext'];

	$item['categoryPath'] = $categoryObj->getCategoryPath(true);
	$item['who_when'] = $itemObj->getWhoAndWhen();


	$item['comments'] = -1;
	$xoopsTpl->assign('item', $item);
	$xoopsTpl->assign('op', 'preview');
	$xoopsTpl->assign('module_home', smartsection_module_home());

	if ($itemid) {
		$xoopsTpl->assign('categoryPath', _MD_SSECTION_EDIT_ARTICLE);
		$xoopsTpl->assign('lang_intro_title', _MD_SSECTION_EDIT_ARTICLE);
		//For RISQ
		$xoopsTpl->assign('lang_intro_text', '');
		//$xoopsTpl->assign('lang_intro_text', $myts->displayTarea(smartsection_getConfig('submitintromsg')));
	} else {
		$xoopsTpl->assign('categoryPath', _MD_SSECTION_SUB_SNEWNAME);
		$xoopsTpl->assign('lang_intro_title', sprintf(_MD_SSECTION_SUB_SNEWNAME, ucwords($xoopsModule->name())));
		//For RISQ
		$xoopsTpl->assign('lang_intro_text', smartsection_getConfig('submitintromsg'));
		//$xoopsTpl->assign('lang_intro_text', $myts->displayTarea(smartsection_getConfig('submitintromsg')));

	}

	include_once SMARTSECTION_ROOT_PATH . 'include/submit.inc.php';

	include_once XOOPS_ROOT_PATH . '/footer.php';

	exit();
	break;

	case 'post':

	Global $xoopsUser, $xoopsConfig, $xoopsModule, $xoopsModuleConfig, $xoopsDB;

	// Putting the values about the ITEM in the ITEM object
	$itemObj->setVar('categoryid', $_POST['categoryid']);
	$itemObj->setVar('title', $_POST['title']);
	$itemObj->setVar('summary', isset($_POST['summary']) ? $_POST['summary'] : '');
	$itemObj->setVar('body', $_POST['body']);

	$itemObj->setVar('dohtml', (isset($_POST['dohtml'])) ? intval($_POST['dohtml']) : 0);
	$itemObj->setVar('dosmiley', (isset($_POST['dosmiley'])) ? intval($_POST['dosmiley']) : 0);
	$itemObj->setVar('doxcode', (isset($_POST['doxcode'])) ? intval($_POST['doxcode']) : 0);
	$itemObj->setVar('doimage', (isset($_POST['doimage'])) ? intval($_POST['doimage']) : 0);
	$itemObj->setVar('dobr', (isset($_POST['dobr'])) ? intval($_POST['dobr']) : 0);

	$notifypub = isset($_POST['notifypub']) ? $_POST['notifypub'] : '';
	$itemObj->setVar('notifypub', $notifypub);

	// Uploading the image, if any
	// Retreive the filename to be uploaded
	if ( $_FILES['image_file']['name'] != "" ) {
		$filename = $_POST["xoops_upload_file"][0] ;
		if( !empty( $filename ) || $filename != "" ) {
			global $xoopsModuleConfig;

			// TODO : Implement smartsection mimetype management
			$max_size = $xoopsModuleConfig['maximum_filesize'];
			$max_imgwidth = $xoopsModuleConfig['maximum_image_width'];
			$max_imgheight = $xoopsModuleConfig['maximum_image_height'];
			$allowed_mimetypes = smartsection_getAllowedImagesTypes();

			include_once(XOOPS_ROOT_PATH."/class/uploader.php");

			if( $_FILES[$filename]['tmp_name'] == "" || ! is_readable( $_FILES[$filename]['tmp_name'] ) ) {
				redirect_header( 'javascript:history.go(-1)' , 2, _AM_SSECTION_FILEUPLOAD_ERROR ) ;
				exit ;
			}

			$uploader = new XoopsMediaUploader(smartsection_getImageDir('item'), $allowed_mimetypes, $max_size, $max_imgwidth, $max_imgheight);

			if( $uploader->fetchMedia( $filename ) && $uploader->upload() ) {

				$itemObj->setVar('image', $uploader->getSavedFileName());

			} else {
				redirect_header( 'javascript:history.go(-1)' , 2, _AM_SSECTION_FILEUPLOAD_ERROR . $uploader->getErrors() ) ;
				exit ;
			}
		}
	} else {
		$itemObj->setVar('image', $_POST['image']);
	}


	// if we are editing an article, we don't change the uid and datesub values
	if (!$itemid) {
		$itemObj->setVar('uid', $uid);
		$itemObj->setVar('datesub', time());
    }

	// Setting the status of the item
	if ( $itemid || ($xoopsModuleConfig['autoapprove_submitted'] ==  1)) {
		$itemObj->setVar('status', _SSECTION_STATUS_PUBLISHED);
	} else {
		$itemObj->setVar('status', _SSECTION_STATUS_SUBMITTED);
	}

	// Storing the item object in the database
	if ( !$itemObj->store() ) {
		redirect_header("javascript:history.go(-1)", 2, _MD_SSECTION_SUBMIT_ERROR);
		exit();
	}

	// Get the cateopry object related to that item
	$categoryObj =& $itemObj->category();

	// if autoapprove_submitted. This does not apply if we are editing an article
	if (!$itemid) {
		if ( $xoopsModuleConfig['autoapprove_submitted'] ==  1) {
			// We do not not subscribe user to notification on publish since we publish it right away

			// Send notifications
			$itemObj->sendNotifications(array(_SSECTION_NOT_ITEM_PUBLISHED));

			$redirect_msg = _MD_SSECTION_ITEM_RECEIVED_AND_PUBLISHED;
		} else {
			// Subscribe the user to On Published notification, if requested
			if ($notifypub) {
				include_once XOOPS_ROOT_PATH . '/include/notification_constants.php';
				$notification_handler = &xoops_gethandler('notification');
				$notification_handler->subscribe('item', $itemObj->itemid(), 'approved', XOOPS_NOTIFICATION_MODE_SENDONCETHENDELETE);
			}
			// Send notifications
			$itemObj->sendNotifications(array(_SSECTION_NOT_ITEM_SUBMITTED));

			$redirect_msg = _MD_SSECTION_ITEM_RECEIVED_NEED_APPROVAL;
		}
	} else {
		$redirect_msg = _MD_SSECTION_ITEMMODIFIED;
	}
	redirect_header("index.php", 2, $redirect_msg);


	exit();
	break;

	case 'add':
	default:

	global $xoopsUser, $myts;

	$xoopsOption['template_main'] = 'smartsection_submit.html';
	include_once(XOOPS_ROOT_PATH . "/header.php");
	include_once("footer.php");

	$name = ($xoopsUser) ? (ucwords($xoopsUser->getVar("uname"))) : 'Anonymous';
	$notifypub = 1;
	$xoopsTpl->assign('module_home', smartsection_module_home());

	if(isset($_GET['op']) && $_GET['op'] == 'clone'){
		$xoopsTpl->assign('categoryPath', _MD_SSECTION_CLONE);
		$xoopsTpl->assign('lang_intro_title', _MD_SSECTION_CLONE);
	}
	elseif ($itemid) {
		$xoopsTpl->assign('categoryPath', _MD_SSECTION_EDIT_ARTICLE);
		$xoopsTpl->assign('lang_intro_title', _MD_SSECTION_EDIT_ARTICLE);
		//For RISQ
		$xoopsTpl->assign('lang_intro_text', '');
		//$xoopsTpl->assign('lang_intro_text', $myts->displayTarea(smartsection_getConfig('submitintromsg')));
	} else {
		$xoopsTpl->assign('categoryPath', _MD_SSECTION_SUB_SNEWNAME);
		$xoopsTpl->assign('lang_intro_title', sprintf(_MD_SSECTION_SUB_SNEWNAME, ucwords($xoopsModule->name())));
		//For RISQ
		$xoopsTpl->assign('lang_intro_text', smartsection_getConfig('submitintromsg'));
		//$xoopsTpl->assign('lang_intro_text', $myts->displayTarea(smartsection_getConfig('submitintromsg')));

	}

	include_once SMARTSECTION_ROOT_PATH . 'include/submit.inc.php';

	include_once XOOPS_ROOT_PATH . '/footer.php';
	break;
}

?>