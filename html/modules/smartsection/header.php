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

?>