<?php
// $Id: main.php,v 1.1 2012/03/31 11:45:35 ohwada Exp $

// 2008-10-01 K.OHWADA
// v2.14 ���б�����

// 2006-05-28 K.OHWADA
// v2.1 ���б�����

// 2006-02-01 K.OHWADA <http://linux.ohwada.jp/>
// v1.05 ���б�����

//=========================================================
// SmartSection Module
// 2005-11-04
// http://xoops.sourceforge.jp/wiki/xoops2/index.php?cmd=read&page=DEV%2FSmartSection%2F%B8%C0%B8%EC%A5%D5%A5%A1%A5%A4%A5%EB
// ͭ����������
//=========================================================

/**
* Id: main.php 331 2007-12-23 16:01:11Z malanciault 
* Module: SmartSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

define("_MD_SSECTION_ACTION", "���");
define("_MD_SSECTION_ADD_FILE", "�ե������ź��");
define("_MD_SSECTION_ADD_FILE_INTRO", "�����ȥ� ��%s�� �ε�����ź�եե�������ɲä��ޤ������Ƥι��ܤ����Ϥ��Ʋ�������");
define("_MD_SSECTION_ADD_FILE_TITLE", "������ź�եե�������ɲ�");
define("_MD_SSECTION_ADMIN_PAGE", ":: �������� ::");
define("_MD_SSECTION_ALL", "����");
define("_MD_SSECTION_ALLOWCOMMENTS", "���Ȥ���Ĥ���");
define("_MD_SSECTION_APPROVE", "��ǧ");
define("_MD_SSECTION_BODY", "��ʸ");
define("_MD_SSECTION_BODY_DSC", "���ε�������ʸ");
define("_MD_SSECTION_BODY_REQ", "��ʸ*");
define("_MD_SSECTION_CANCEL", "����󥻥�");
define("_MD_SSECTION_CATEGORY", "���ƥ���");
define("_MD_SSECTION_CATEGORY_DSC", "�����Υ��ƥ��������");
define("_MD_SSECTION_CATEGORY_EDIT", "���ƥ�����Խ�");
define("_MD_SSECTION_CATEGORY_SUMMARY", "%s �Υ��ƥ������");
define("_MD_SSECTION_CATEGORY_SUMMARY_DESC", "���Υ��ƥ����°�������Ƥε����ΰ���������ޤ�����������ʸ�򸫤����Ȥ��ϥ����ȥ�򥯥�å����롣");
define("_MD_SSECTION_CATEGORY_SUMMARY_INFO", "%s ����Ͽ����Ƥ��륫�ƥ���Υꥹ�ȤǤ���");
define("_MD_SSECTION_CLEAR", "���ꥢ");
define("_MD_SSECTION_CLONE", "������ʣ��");
define("_MD_SSECTION_COMMENTS", "������");
define("_MD_SSECTION_CREATE", "���������");
define("_MD_SSECTION_DATE", "����");
define("_MD_SSECTION_DATESUB", "�Ǻ���");
define("_MD_SSECTION_DELETE", "��������");
define("_MD_SSECTION_DESCRIPTION", "����");
define("_MD_SSECTION_DOHTML", "HTML������ͭ���ˤ���");
define("_MD_SSECTION_DOIMAGE", "������ͭ���ˤ���");
define("_MD_SSECTION_DOLINEBREAK", "���Ԥ�ͭ���ˤ���");
define("_MD_SSECTION_DOSMILEY", "�饢�������ͭ���ˤ���");
define("_MD_SSECTION_DOWNLOAD_FILE", "�ե��������������");
define("_MD_SSECTION_DOXCODE", "XOOPS �����ɤ�ͭ��");
define("_MD_SSECTION_EDIT", "�������Խ�");
define("_MD_SSECTION_EDIT_ARTICLE", "�������Խ�");
define("_MD_SSECTION_EMPTY", "���Υ��ƥ���ˤϡ������䥵�֥��ƥ���Ϥ���ޤ���");
define("_MD_SSECTION_ERROR_ITEM_NOT_SAVED", "���顼�� ��������¸����ޤ���");
define("_MD_SSECTION_FILE", "�ե�����");
define("_MD_SSECTION_FILE_ADD", "�ե�������ɲ�");
define("_MD_SSECTION_FILE_ADDING", "�������ե�������ɲ�");
define("_MD_SSECTION_FILE_ADDING_DSC", "���ε����˥ե������ź�դ���ˤ����Ƥι��ܤ����Ϥ��Ʋ�����");
define("_MD_SSECTION_FILE_DESCRIPTION", "����");
define("_MD_SSECTION_FILE_DESCRIPTION_DSC", "ź�եե����������");
define("_MD_SSECTION_FILE_EDITING", "�ե�������Խ�����");
define("_MD_SSECTION_FILE_EDITING_DSC", "�ե�������Խ����ޤ������Խ����줿���ƤǸ�������ޤ���");
define("_MD_SSECTION_FILE_EDITING_ERROR", "�ե�������Խ�������ޤ���");
define("_MD_SSECTION_FILE_EDITING_SUCCESS", "�ե�������Խ���Ԥʤ��ޤ���");
define("_MD_SSECTION_FILE_INFORMATIONS", "�ե�����ξ���");
define("_MD_SSECTION_FILE_NAME_DSC", "ź�եե������̾��");
define("_MD_SSECTION_FILE_STATUS", "�ե�����θ���");
define("_MD_SSECTION_FILE_STATUS_DSC", "�����������򤷤���硢�ե�����ϡ��桼����¦���鸫���ޤ���");
define("_MD_SSECTION_FILE_TO_UPLOAD", "���åץ��� :");
define("_MD_SSECTION_FILE_TYPE", "�ե����륿����");
define("_MD_SSECTION_FILE_UPLOAD_ANOTHER", "���٥��åץ���");
define("_MD_SSECTION_FILENAME", "�ե�����̾");
define("_MD_SSECTION_FILES_LINKED", "���ε�����ź�եե�����");
define("_MD_SSECTION_FILEUPLOAD_ERROR", "�ե�����򥢥åץ��ɽ���ޤ���");
define("_MD_SSECTION_FILEUPLOAD_SUCCESS", "�ե�����Υ��åץ��ɤ�Ԥʤ��ޤ���");
define("_MD_SSECTION_FINDITEMHERE", "�����θ������: ");
define("_MD_SSECTION_GOODDAY", "����ˤ���, ");
define("_MD_SSECTION_HITS", "�ҥå�");
define("_MD_SSECTION_HITSDETAIL", "" . "���ε������ɤޤ줿���");
define("_MD_SSECTION_HOME", "�ۡ���");
define("_MD_SSECTION_IMAGE_ITEM", "�����β���");
define("_MD_SSECTION_IMAGE_ITEM_DSC", "���ε������Ф������");
define("_MD_SSECTION_IMAGE_UPLOAD", "�����򥢥åץ���");
define("_MD_SSECTION_IMAGE_UPLOAD_DSC", "���ʤ��Υ���ԥ塼������β��������򤷤Ʋ������������򥵡��Фإ��åץ��ɤ������β����Ȥ�����¸���ޤ���");
define("_MD_SSECTION_IMAGE_UPLOAD_ITEM_DSC", "���ʤ��Υ���ԥ塼������β��������򤷤Ʋ������� <br />�����򥵡��Фإ��åץ��ɤ�<br />�����β����Ȥ�����¸���ޤ���");
define("_MD_SSECTION_INDEX_CATEGORIES_SUMMARY", "���ƥ������");
define("_MD_SSECTION_INDEX_CATEGORIES_SUMMARY_INFO", "���ƥ���ΰ����Ǥ������ƥ�������򤹤�ȡ������ꥹ�Ȥ�ɽ�����ޤ���");
define("_MD_SSECTION_INDEX_ITEMS", "�ǿ��ε���");
define("_MD_SSECTION_INDEX_ITEMS_INFO", "�Ƕ�������줿�����ΰ����Ǥ���");
define("_MD_SSECTION_INTITEM", "���ε����򸫤Ƥ������� %s");
define("_MD_SSECTION_INTITEMFOUND", "�����˻䤬���Ĥ������򤤵���������ޤ� %s");
define("_MD_SSECTION_ITEM", "����");
define("_MD_SSECTION_ITEM_CAP", "����");
define("_MD_SSECTION_ITEM_RECEIVED_AND_PUBLISHED", "��Ƥ��������ϡ���ư��ǧ���졢��������ޤ�������Ƥ��꤬�Ȥ��������ޤ���");
define("_MD_SSECTION_ITEM_RECEIVED_NEED_APPROVAL", "��Ƥ��������ϡ������Ԥˤ�äƳ�ǧ�θ�˸�������ޤ���<br />��Ƥ��꤬�Ȥ��������ޤ���");
define("_MD_SSECTION_ITEMCOMEFROM", "���������Ĥ���ޤ��� ");
define("_MD_SSECTION_ITEMMODIFIED", "�������ѹ����ޤ���!");
define("_MD_SSECTION_ITEMS", "����");
define("_MD_SSECTION_ITEMS_INFO", "���Υ��ƥ������Ͽ���줿�����Υꥹ�ȤǤ���");
define("_MD_SSECTION_ITEMS_LINKS", "�ڡ�����ư");
define("_MD_SSECTION_ITEMS_TITLE", "%s �ε����ꥹ��");
define("_MD_SSECTION_LAST_SMARTITEM", "�ǿ��ε���");
define("_MD_SSECTION_MAIL", "������᡼�������");
define("_MD_SSECTION_MAINHEAD", "�褦����");
define("_MD_SSECTION_MAINNOITEMS", "���Υ��ƥ���ˤ�ɽ�����뵭��������ޤ���");
define("_MD_SSECTION_MAINNOSELECTCAT", "���ƥ�������򤷤Ƥ��ޤ���");
define("_MD_SSECTION_NAME", "̾��");
define("_MD_SSECTION_NEED_CATEGORY_ITEM", "�������������ˤϡ��ǽ�˥��ƥ����������Ʋ�������");
define("_MD_SSECTION_NEXT_ITEM", "���ε���");
define("_MD_SSECTION_NO", "No");
define("_MD_SSECTION_NO_CAT_EXISTS", "&#8217s ���ƥ��꤬�������Ƥ��ޤ���<br />�����Ԥ�Ϣ���Ƥ���������");
define("_MD_SSECTION_NO_CAT_PERMISSIONS", "���Υ��ƥ���˥����������븢�¤�����ޤ���");
define("_MD_SSECTION_NO_TOP_PERMISSIONS", "ɽ�����뵭��������ޤ���");
define("_MD_SSECTION_NOCATEGORYSELECTED", "���ƥ�������򤷤Ƥ��ޤ���");
define("_MD_SSECTION_NOITEMS_INFO", "ɽ�����뵭��������ޤ���");
define("_MD_SSECTION_NOITEMSELECTED", "���������򤷤Ƥ��ޤ���");
define("_MD_SSECTION_NONE", "������");
define("_MD_SSECTION_NOTIFY", "��ǧ���줿�����Τ���");
define("_MD_SSECTION_OF", "����");
define("_MD_SSECTION_ON", "����");
define("_MD_SSECTION_OPTIONS", "���ץ����");
define("_MD_SSECTION_OTHER_ITEMS", "���Υ��ƥ���ε���");
define("_MD_SSECTION_PAGE", "�ڡ���");
define("_MD_SSECTION_PDF", "���ε����� PDF �ե����ޥåȤǸ���");
define("_MD_SSECTION_POSTEDBY", "��Ƽ�: %s �Ǻ���: %s");
define("_MD_SSECTION_PREVIEW", "�ץ�ӥ塼");
define("_MD_SSECTION_PREVIOUS_ITEM", "�ɤ��ɤޤ줿����");
define("_MD_SSECTION_PRINT", "�������������");
define("_MD_SSECTION_PRINTERFRIENDLY", "���ε����������Ŭ�������֤ǰ������ޤ�");
define("_MD_SSECTION_READMORE", "��äȾܤ���...");
define("_MD_SSECTION_READS", "�����");
define("_MD_SSECTION_RSSFEED","RSS �ե�����");
define("_MD_SSECTION_SENDSTORY", "ͧã�ˤ��ε����򶵤���");
define("_MD_SSECTION_SMARTITEMS_INFO", "���Υ��ƥ���ε���");
define("_MD_SSECTION_SUB_CLONE", "ʣ����������");
define("_MD_SSECTION_SUB_INTRO", "���󡢲����ե����फ�鵭������Ƥ��Ƥ�����������Ƥ��������ϴ����Ԥ���ǧ�θ塢�Ǻܤ���ޤ���");
define("_MD_SSECTION_SUB_SMNAME", "���������");
define("_MD_SSECTION_SUB_SNEWNAME", "���������");
define("_MD_SSECTION_SUBMIT", "���������");
define("_MD_SSECTION_SUBMIT_ERROR", "���顼����Ƥ�����������Ͽ������ޤ���");
define("_MD_SSECTION_SUBMITITEM", "���������");
define("_MD_SSECTION_SUMMARY", "����");
define("_MD_SSECTION_SUMMARY_DSC", "���ε����γ���");
define("_MD_SSECTION_THE", " ");
define("_MD_SSECTION_TIMES", "��");
define("_MD_SSECTION_TITLE", "�����ȥ�");
define("_MD_SSECTION_TITLE_REQ", "�����ȥ�*");
define("_MD_SSECTION_TOTAL_SMARTITEMS", "�������");
define("_MD_SSECTION_UNKNOWNERROR", "���顼.  ���β��̤���äƤ�������");
define("_MD_SSECTION_UPLOAD", "��Ͽ");
define("_MD_SSECTION_UPLOAD_FILE", "ź�եե�����");
define("_MD_SSECTION_VIEW_MORE", "���Ƥε������ɤ�");
define("_MD_SSECTION_WEIGHT", "Weight");
define("_MD_SSECTION_WHO_WHEN", "��Ƽ�: %s �Ǻ���: %s ");
define("_MD_SSECTION_YES", "�Ϥ�");

// v2.14 smartobject �ذ�ư
// v2.1
// --- hacked xoopsnote ---
// PDF���Ϥι���̾
//define('_MD_POSTEDON',"��ƾ��� : ");
// --- hacke end ----

// === v2.1 ===
define("_MD_SSECTION_SUBCATEGORIES_INFO", "<em>%s</em> ��Υ��֥��ƥ���:");

// === v2.14 ===
define('_MD_SSECTION_PRINT_CLOSE', '���Υ�����ɥ����Ĥ���');

?>