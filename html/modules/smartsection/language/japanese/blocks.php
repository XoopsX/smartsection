<?php
// $Id: blocks.php,v 1.1 2012/03/31 11:45:35 ohwada Exp $

// 2008-10-01 K.OHWADA
// v2.14 ���б�����

// 2006-12-17 K.OHWADA
// v2.12 ���б�����

// 2006-02-01 K.OHWADA <http://linux.ohwada.jp/>
// v1.05 ���б�����

//=========================================================
// SmartSection Module
// 2005-11-04
// http://xoops.sourceforge.jp/wiki/xoops2/index.php?cmd=read&page=DEV%2FSmartSection%2F%B8%C0%B8%EC%A5%D5%A5%A1%A5%A4%A5%EB
// ͭ����������
//=========================================================

/**
* Id: blocks.php 331 2007-12-23 16:01:11Z malanciault 
* Module: SmartSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

/*global $xoopsConfig, $xoopsModule, $xoopsModuleConfig;
If (isset($xoopsModuleConfig) && isset($xoopsModule) && $xoopsModule->getVar('dirname') == 'smartsection') {
	$itemType = $xoopsModuleConfig['itemtype'];
} else {
	$hModule = &xoops_gethandler('module');
	$hModConfig = &xoops_gethandler('config');
	if ($smartsection_Module = &$hModule->getByDirname('smartsection')) {
		$module_id = $smartsection_Module->getVar('mid');
		$smartsection_Config = &$hModConfig->getConfigsByCat(0, $smartsection_Module->getVar('mid'));
		$itemType = $smartsection_Config['itemtype'];
	} else {
		$itemType = 'article';
	}	
}

include_once(XOOPS_ROOT_PATH . "/modules/smartsection/language/" . $xoopsConfig['language'] . "/plugin/" . $itemType . "/blocks.php");
*/
// Blocks

define("_MB_SSECTION_ALLCAT", "���ƤΥ��ƥ���");
define("_MB_SSECTION_AUTO_LAST_ITEMS", "�ǿ�����Ƥ�ɽ������");
define("_MB_SSECTION_CATEGORY", "���ƥ���");
define("_MB_SSECTION_CHARS", "�����ȥ�̾��Ĺ��");
define("_MB_SSECTION_COMMENTS", "������");
define("_MB_SSECTION_DATE", "�Ǻ���");
define("_MB_SSECTION_DISP", "ɽ��");
define("_MB_SSECTION_DISPLAY_CATEGORY", "���ƥ���̾��ɽ��");
define("_MB_SSECTION_DISPLAY_COMMENTS", "�����ȿ���ɽ�����ޤ�����");
define("_MB_SSECTION_DISPLAY_TYPE", "ɽ�������� :");
define("_MB_SSECTION_DISPLAY_TYPE_BLOCK", "�ꥹ��ɽ���򢣤�ɽ��");
define("_MB_SSECTION_DISPLAY_TYPE_BULLET", "�ꥹ��ɽ�������ɽ��");
define("_MB_SSECTION_DISPLAY_WHO_AND_WHEN", "��Ƽԡ����դ�ɽ������");
define("_MB_SSECTION_FULLITEM", "���ε������ɤ�");
define("_MB_SSECTION_HITS", "�������");
define("_MB_SSECTION_ITEMS", "����");
define("_MB_SSECTION_LAST_ITEMS_COUNT", "ɽ�����뵭���ο�");
define("_MB_SSECTION_LENGTH", "ʸ��");
define("_MB_SSECTION_ORDER", "ɽ����");
define("_MB_SSECTION_POSTEDBY", "��Ƽ�");
define("_MB_SSECTION_READMORE", "��äȾܤ���...");
define("_MB_SSECTION_READS", "�����)");
define("_MB_SSECTION_SELECT_ITEMS", "���򤷤������Τߤ�ɽ������<br>��Windows��Ctrl�����򲡤��ʤ���<br>����å������ʣ�����꤬��ǽ");
define("_MB_SSECTION_SELECTCAT", "ɽ�����뵭���Υ��ƥ���  :");
define("_MB_SSECTION_VISITITEM", "ˬ�䤹��");
define("_MB_SSECTION_WEIGHT", "�¤ӽ�");
define("_MB_SSECTION_WHO_WHEN", "��Ƽ�: %s �Ǻ���: %s");

//bd tree block hack
define("_MB_SSECTION_LEVELS", "��٥�");
define("_MB_SSECTION_CURRENTCATEGORY", "���ߤΥ��ƥ���");
define("_MB_SSECTION_ASC", "����");
define("_MB_SSECTION_DESC", "�ս�");
define("_MB_SSECTION_SHOWITEMS", "�����ƥ��ɽ������");
//--/bd

// === v2.12 ===
define("_MB_SSECTION_FILES", "�ե�����");
define("_MB_SSECTION_DIRECTDOWNLOAD", "�����إ�󥯤�������ˡ���������ɥե������ľ�ܥ�󥯤��ޤ�����");

// === v2.14 ===
define("_MB_SSECTION_FROM", "���������򤹤� <br />���������� ");
define("_MB_SSECTION_UNTIL", "�������ޤ�");
define("_MB_SSECTION_DATE_FORMAT", "���դη����� mm/dd/yyy �Ǥʤ���Фʤ�ʤ�");
define("_MB_SSECTION_ARTICLES_FROM_TO", "%s ���� %s �δ֤�ȯ�Ԥ��줿����");

?>