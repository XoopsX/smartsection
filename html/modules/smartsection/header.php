<?php

/**
* $Id: header.php,v 1.1 2012/03/31 09:53:53 ohwada Exp $
* Module: SmartSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

include_once "../../mainfile.php";

if( !defined("SMARTSECTION_DIRNAME") ){
	define("SMARTSECTION_DIRNAME", 'smartsection');
}

include_once XOOPS_ROOT_PATH.'/modules/' . SMARTSECTION_DIRNAME . '/include/common.php';

include_once XOOPS_ROOT_PATH."/class/pagenav.php";
(method_exists('MyTextSanitizer', 'sGetInstance') and $myts = MyTextSanitizer::sGetInstance()) || $myts = MyTextSanitizer::getInstance();

// For XCL >= 2.2.1.1 (clear cache of modinfo)
// Is it XCL's bug? need check next
// http://xoopscube.svn.sourceforge.net/viewvc/xoopscube/Package_Legacy/trunk/html/kernel/module.php?view=log
if (defined('LEGACY_BASE_VERSION') && version_compare(LEGACY_BASE_VERSION, '2.2.1.1', '>=')) {
	$module_handler =& xoops_gethandler('module');
	$thisModule =& $module_handler->getByDirname(SMARTSECTION_DIRNAME);
	$thisModule->modinfo = null;
}

