<?php
// $Id: blocks.php,v 1.1 2012/03/31 11:33:50 ohwada Exp $

// 2008-10-01 K.OHWADA
// v2.14 に対応した

// 2006-12-17 K.OHWADA
// v2.12 に対応した

// 2006-02-01 K.OHWADA <http://linux.ohwada.jp/>
// v1.05 に対応した

//=========================================================
// SmartSection Module
// 2005-11-04
// http://xoops.sourceforge.jp/wiki/xoops2/index.php?cmd=read&page=DEV%2FSmartSection%2F%B8%C0%B8%EC%A5%D5%A5%A1%A5%A4%A5%EB
// UTF-8
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

define("_MB_SSECTION_ALLCAT", "全てのカテゴリ");
define("_MB_SSECTION_AUTO_LAST_ITEMS", "最新の投稿を表示する");
define("_MB_SSECTION_CATEGORY", "カテゴリ");
define("_MB_SSECTION_CHARS", "タイトル名の長さ");
define("_MB_SSECTION_COMMENTS", "コメント");
define("_MB_SSECTION_DATE", "掲載日");
define("_MB_SSECTION_DISP", "表示");
define("_MB_SSECTION_DISPLAY_CATEGORY", "カテゴリ名を表示");
define("_MB_SSECTION_DISPLAY_COMMENTS", "コメント数を表示しますか？");
define("_MB_SSECTION_DISPLAY_TYPE", "表示タイプ :");
define("_MB_SSECTION_DISPLAY_TYPE_BLOCK", "リスト表示を■で表示");
define("_MB_SSECTION_DISPLAY_TYPE_BULLET", "リスト表示を●で表示");
define("_MB_SSECTION_DISPLAY_WHO_AND_WHEN", "投稿者・日付を表示する");
define("_MB_SSECTION_FULLITEM", "この記事を読む");
define("_MB_SSECTION_HITS", "閲覧回数");
define("_MB_SSECTION_ITEMS", "記事");
define("_MB_SSECTION_LAST_ITEMS_COUNT", "表示する記事の数");
define("_MB_SSECTION_LENGTH", "文字");
define("_MB_SSECTION_ORDER", "表示順");
define("_MB_SSECTION_POSTEDBY", "投稿者");
define("_MB_SSECTION_READMORE", "もっと詳しく...");
define("_MB_SSECTION_READS", "回閲覧)");
define("_MB_SSECTION_SELECT_ITEMS", "選択した記事のみを表示する<br>※WindowsはCtrlキーを押しながら<br>クリックすると複数指定が可能");
define("_MB_SSECTION_SELECTCAT", "表示する記事のカテゴリ  :");
define("_MB_SSECTION_VISITITEM", "訪問する");
define("_MB_SSECTION_WEIGHT", "並び順");
define("_MB_SSECTION_WHO_WHEN", "投稿者: %s 掲載日: %s");

//bd tree block hack
define("_MB_SSECTION_LEVELS", "レベル");
define("_MB_SSECTION_CURRENTCATEGORY", "現在のカテゴリ");
define("_MB_SSECTION_ASC", "正順");
define("_MB_SSECTION_DESC", "逆順");
define("_MB_SSECTION_SHOWITEMS", "アイテムを表示する");
//--/bd

// === v2.12 ===
define("_MB_SSECTION_FILES", "ファイル");
define("_MB_SSECTION_DIRECTDOWNLOAD", "記事へリンクする代わりに、ダウンロードファイルへ直接リンクしますか？");

// === v2.14 ===
define("_MB_SSECTION_FROM", "記事を選択する <br />この日から ");
define("_MB_SSECTION_UNTIL", "この日まで");
define("_MB_SSECTION_DATE_FORMAT", "日付の形式は mm/dd/yyy でなければならない");
define("_MB_SSECTION_ARTICLES_FROM_TO", "%s から %s の間に発行された記事");

?>