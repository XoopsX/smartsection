<?php
// $Id: smartdbupdater.php,v 1.1 2012/03/31 11:45:35 ohwada Exp $

// 2006-12-17 K.OHWADA
// v2.12 ���б�����

//=========================================================
// SmartSection Module
// 2006-12-17 K.OHWADA <http://linux.ohwada.jp/>
// ͭ����������
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

define("_SDU_IMPORT", "����ݡ���");
define("_SDU_CURRENTVER", "���ߤΥС������: <span class='currentVer'>%s</span>");
define("_SDU_DBVER", "�ǡ����١����ΥС������ %s");
define("_SDU_MSG_ADD_DATA", "�ơ��֥� %s �˥ǡ������ɲä���");
define("_SDU_MSG_ADD_DATA_ERR", "���顼���ơ��֥� %s �˥ǡ������ɲ�");
define("_SDU_MSG_CHGFIELD", "�ե������ %s �ơ��֥� %s ���ѹ�����");
define("_SDU_MSG_CHGFIELD_ERR", "���顼���ե������ %s �ơ��֥� %s ���ѹ�");
define("_SDU_MSG_CREATE_TABLE", "�ơ��֥� %s ����������");
define("_SDU_MSG_CREATE_TABLE_ERR", "���顼���ơ��֥� %s ������");
define("_SDU_MSG_NEWFIELD", "�ե������ %s ���ɲä���������");
define("_SDU_MSG_NEWFIELD_ERR", "���顼���ե������ %s ���ɲ�");
define("_SDU_NEEDUPDATE", "�ǡ����١������Ť������Ǥ����ǡ����١����Υơ��֥�򹹿����Ƥ���������
<br><b>��� : ���Υ�����ץȤ�¹Ԥ������ˡ�SmartSection �����ƤΥơ��֥��Хå����åפ��뤳�Ȥ򶯤��侩���ޤ���</b><br>");
define("_SDU_NOUPDATE", "�ǡ����١����Ϻǿ��η����Ǥ���������ɬ�פϤ���ޤ���");
define("_SDU_UPDATE_DB", "�ǡ����١����򹹿�����");
define("_SDU_UPDATE_ERR", "���顼���С������ %s �ؤι���");
define("_SDU_UPDATE_NOW", "�������������Ƥ������� !");
define("_SDU_UPDATE_OK", "�С������ %s �ؤι�������������");
define("_SDU_UPDATE_TO", "�С������ %s �ع�������");
define("_SDU_UPDATE_UPDATING_DATABASE", "�ǡ����١����ι����� ...");

?>