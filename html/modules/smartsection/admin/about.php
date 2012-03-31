<?php

/**
* $Id: about.php,v 1.1 2012/03/31 09:54:06 ohwada Exp $
* Module: SmartPartner
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/
//
include_once("admin_header.php");

include_once(SMARTOBJECT_ROOT_PATH . "class/smartobjectabout.php");
smart_loadCommonLanguageFile();

$aboutObj = new SmartobjectAbout();
$aboutObj->render();


?>