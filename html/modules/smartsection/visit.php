<?php
/**
* $Id: visit.php,v 1.1 2012/03/31 09:53:54 ohwada Exp $
* Module: SmartSection
* Author: marcan <marcan@notrevie.ca>
* Licence: GNU
*/

include_once "header.php";

$fileid = isset($_GET['fileid']) ? intval($_GET['fileid']) : 0;

// Creating the item object for the selected item
$fileObj = $smartsection_file_handler->get($fileid);

if ($fileObj->getVar('status' != _SSECTION_STATUS_FILE_ACTIVE)) {
	redirect_header("javascript:history.go(-1)", 1, _NOPERM);
}

$itemObj = $smartsection_item_handler->get($fileObj->getVar('itemid'));

// Check user permissions to access this file
if (!(smartsection_itemAccessGranted($itemObj))) {
	redirect_header("javascript:history.go(-1)", 1, _NOPERM);
	exit;
}

$fileObj->updateCounter();

if (!preg_match("/^ed2k*:\/\//i", $fileObj->getFileUrl())) {
	Header("Location: " . $fileObj->getFileUrl());
}

echo "<html><head><meta http-equiv=\"Refresh\" content=\"0; URL=".$myts->oopsHtmlSpecialChars($fileObj->getFileUrl())."\"></meta></head><body></body></html>";
exit();
?>
