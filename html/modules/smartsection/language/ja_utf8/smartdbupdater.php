<?php
// $Id: smartdbupdater.php,v 1.1 2012/03/31 11:33:50 ohwada Exp $

// 2006-12-17 K.OHWADA
// v2.12 に対応した

//=========================================================
// SmartSection Module
// 2006-12-17 K.OHWADA <http://linux.ohwada.jp/>
// UTF-8
//=========================================================

/**
* Id: smartdbupdater.php 331 2007-12-23 16:01:11Z malanciault 
* Module: SmartContent
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

if (!defined("XOOPS_ROOT_PATH")) { 
 	die("XOOPS root path not defined");
}

define("_SDU_IMPORT", "インポート");
define("_SDU_CURRENTVER", "現在のバージョン: <span class='currentVer'>%s</span>");
define("_SDU_DBVER", "データベースのバージョン %s");
define("_SDU_MSG_ADD_DATA", "テーブル %s にデータを追加した");
define("_SDU_MSG_ADD_DATA_ERR", "エラー：テーブル %s にデータを追加");
define("_SDU_MSG_CHGFIELD", "フィールド %s テーブル %s を変更した");
define("_SDU_MSG_CHGFIELD_ERR", "エラー：フィールド %s テーブル %s の変更");
define("_SDU_MSG_CREATE_TABLE", "テーブル %s を生成した");
define("_SDU_MSG_CREATE_TABLE_ERR", "エラー：テーブル %s の生成");
define("_SDU_MSG_NEWFIELD", "フィールド %s の追加に成功した");
define("_SDU_MSG_NEWFIELD_ERR", "エラー：フィールド %s の追加");
define("_SDU_NEEDUPDATE", "データベースが古い形式です。データベースのテーブルを更新してください！
<br><b>注意 : このスクリプトを実行する前に、SmartSection の全てのテーブルをバックアップすることを強く推奨します。</b><br>");
define("_SDU_NOUPDATE", "データベースは最新の形式です。更新の必要はありません。");
define("_SDU_UPDATE_DB", "データベースを更新する");
define("_SDU_UPDATE_ERR", "エラー：バージョン %s への更新");
define("_SDU_UPDATE_NOW", "今すぐ更新してください !");
define("_SDU_UPDATE_OK", "バージョン %s への更新の成功した");
define("_SDU_UPDATE_TO", "バージョン %s へ更新する");
define("_SDU_UPDATE_UPDATING_DATABASE", "データベースの更新中 ...");

?>