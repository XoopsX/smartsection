<?php
// $Id: admin.php,v 1.1 2012/03/31 11:45:35 ohwada Exp $

// 2007-04-10 K.OHWADA
// v2.13 ���б�����

// 2006-12-17 K.OHWADA
// v2.12 ���б�����

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
* Id: admin.php 1470 2008-04-07 16:04:52Z kurak_bu 
* Module: SmartSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

define("_AM_SSECTION_ABOUT", "�⥸�塼��ˤĤ���");
define("_AM_SSECTION_ACTION", "���");
define("_AM_SSECTION_ACTIVEUSERS", "�����ƥ��֤ʥ桼����: %s��");
define("_AM_SSECTION_ADD_OPT","%s �ĤΥ��֥��ƥ�����ɲä���");
define("_AM_SSECTION_ADD_OPT_SUBMIT","�ɲ�");
define("_AM_SSECTION_ADMIN_CATS", "���ƥ����������륰�롼�פ����򤷤Ʋ�����");
define("_AM_SSECTION_ADMINCOLMNGMT", "���ƥ������");
define("_AM_SSECTION_ALL", "���٤�");
define("_AM_SSECTION_ALL_EXP", "<b>���٤�</b> : �⥸�塼����Τ��٤Ƥε�����ɽ�����Ƥ��ޤ���");
define("_AM_SSECTION_ALLITEMS", "��Ͽ���������ꥹ��");
define("_AM_SSECTION_ALLITEMSMSG", "�����Ƚ���ѹ�������¤��ؤ��ޤ����ޤ������ơ��������ѹ�������б����������ΰ�����ɽ�����ޤ���");
define("_AM_SSECTION_ALLOWCOMMENTS", "�����ؤΥ����Ȥ���Ĥ���");
define("_AM_SSECTION_APPROVE", "��ǧ");
define("_AM_SSECTION_APPROVED", "��ǧ����");
define("_AM_SSECTION_APPROVED_MODERATE", "��ǥ졼������ǧ���ޤ���");
define("_AM_SSECTION_APPROVESUB", "��ǧ���ޤ���");
define("_AM_SSECTION_APPROVING", "��ǧ����");
define("_AM_SSECTION_ASC", "����");
define("_AM_SSECTION_AVAILABLE", "<span style='font-weight: bold; color: green;'>���Ѳ�ǽ</span>");
define("_AM_SSECTION_AVAILABLE_PAGE_WRAP", "���߼�������Υڡ���");
define("_AM_SSECTION_AVAILABLE_PAGE_WRAP_DSC", "���ߵ�������˼�����Ǥ���ڡ����Ǥ����ե�����̾�򥯥�å�����ȵ����˼����ߤޤ�������ϡ�XOOPS �Υ��ǥ����Τ�ư��ޤ�������¾�Υ��ǥ�����ȤäƤ�����ϡ��ޥ˥奢����ɲä��Ʋ�������");
define("_AM_SSECTION_BACK2IDX", "����󥻥뤷�ޤ���������ǥå����ڡ�������äƲ�������");
define("_AM_SSECTION_BLOCKS", "�֥�å�����");
define("_AM_SSECTION_BLOCKSANDGROUPS", "�֥�å������롼������");
define("_AM_SSECTION_BLOCKSGROUPSADMIN", "�֥�å������롼������");
define("_AM_SSECTION_BLOCKSTXT", "���Υ⥸�塼��ˤϰʲ��Υ֥�å�������ޤ����ƥ֥�å��ϡ������ƥ�����Υ֥�å�������������ꤹ�뤳�Ȥ��Ǥ��ޤ���");
define("_AM_SSECTION_BODY", "��ʸ");

//define("_AM_SSECTION_BODY_DSC", "���ε�������ʸ");
define("_AM_SSECTION_BODY_DSC", "���ε�������ʸ<br><b>���ϥ��ץ����</b><span style='font-size: xx-small; font-weight: normal; display: block;'><p>1- ����������̾�Υƥ����ȤȲ���</p>2- �����Υڡ�����å�<p>[pagewrap=filename.html]</p><p>���뤤��</p>[pagewrap=filename_1.html]<br>[pagebreak] <i>�ڡ�������Ĥ���</i><br>[pagewrap=filename_2.html]<br>���Τۤ� ... <p>���뤤��</p><p>[pagewrap=filename_1.html]<br>[pagewrap=filename_2.html]<br><i>�ڡ������礹��</i><p>�ڡ�����åפ�����֤ˡ�yoursite.com/uploads/smartsection/content ��ɬ�פ�HTML�ե�����򥢥åץ��ɤ��롣<br />���뤤�� �ڡ����β��ˤ���ڡ�����åפΥ��åץ���������Ѥ�������Ǥ�褤��</p><p>��ʸ����β�����դ��뤳�ȡ�<br />��˾����ڡ����򥯥�å���������ǡ������Ǥ���ڡ����ΰ����򸫤Ĥ��뤳�Ȥ��Ǥ��ޤ���</p></span>");

define("_AM_SSECTION_BODY_REQ", "��ʸ*");
define("_AM_SSECTION_BODY_SELECTFILE", "��ʸ : ������ڡ���");
define("_AM_SSECTION_BODY_SELECTFILE_DSC", "��ʸ�˼�����ե���������򤷤Ʋ�����");
define("_AM_SSECTION_BUTTON_CANCEL", "����󥻥�");
define("_AM_SSECTION_BUTTON_DELETE", "���");
define("_AM_SSECTION_BUTTON_EDIT", "�Խ�");
define("_AM_SSECTION_BUTTON_SEARCH", "����");
define("_AM_SSECTION_BUTTON_SUBMIT", "���");
define("_AM_SSECTION_BUTTON_UPDATE", "����");
define("_AM_SSECTION_BY", "by");
define("_AM_SSECTION_CANCEL", "����󥻥�");
define("_AM_SSECTION_CAT_ITEMS", "����");
define("_AM_SSECTION_CAT_ITEMS_DSC", "���Υ��ƥ�����ε���");
define("_AM_SSECTION_CATCOLNAME","�����ȥ�");
define("_AM_SSECTION_CATCREATED", "�������ƥ����������ޤ�����");
define("_AM_SSECTION_CATEGORIES", "���ƥ���");
define("_AM_SSECTION_CATEGORIES_DSC", "���ߺ�������Ƥ��륫�ƥ��������ɽ�����Ƥ��ޤ���");
define("_AM_SSECTION_CATEGORIES_TITLE", "���ƥ���Υꥹ��");
define("_AM_SSECTION_CATEGORY", "���ƥ���̾");
define("_AM_SSECTION_CATEGORY_CREATE", "���������ƥ���κ���");
define("_AM_SSECTION_CATEGORY_CREATE_INFO", "���������ƥ����������ޤ��������������ƥ������¸���졢��������ޤ���");
define("_AM_SSECTION_CATEGORY_DSC", "���ε����Υ��ƥ���");
define("_AM_SSECTION_CATEGORY_EDIT_INFO", "���ƥ�����Խ����뤳�Ƚ���ޤ����ѹ����ľ����ȿ�Ǥ���������ޤ���");
define("_AM_SSECTION_CATEGORY_REQ", "���ƥ���*");
define("_AM_SSECTION_CATEGORY_SAVE_ERROR", "���顼��ȯ�����ޤ��������ƥ������¸����ޤ��� :");
define("_AM_SSECTION_CATHEADER", "���ƥ������");
define("_AM_SSECTION_CATID","ID");
define("_AM_SSECTION_CLEAR", "���ꥢ");
define("_AM_SSECTION_CLONE_ITEM", "������ʣ��");
define("_AM_SSECTION_CLONE_NEW", "������ʣ��");
define("_AM_SSECTION_COLDESCRIPT", "���ƥ��������");
define("_AM_SSECTION_COLISDELETED", "���ƥ��� %s �������ޤ���");
define("_AM_SSECTION_COLMODIFIED", "���ƥ���򹹿����ޤ�����");
define("_AM_SSECTION_COLPOSIT", "���ƥ���ΰ���");
define("_AM_SSECTION_CREATE", "����");
define("_AM_SSECTION_CREATECATEGORY", "���������ƥ�����������");
define("_AM_SSECTION_CREATED", "������");
define("_AM_SSECTION_CREATEITEM", "���������");
define("_AM_SSECTION_CREATEITEM_PAGEWRAP", "�����ߥڡ�������");
define("_AM_SSECTION_CREATESMARTITEM", "���������������");
define("_AM_SSECTION_CREATETHEDIR", "�ե���������");
define("_AM_SSECTION_CREATINGNEW", "��������");
define("_AM_SSECTION_DATESUB", "������");
define("_AM_SSECTION_DATESUB_DSC", "�����򳫻Ϥ������������򤷤Ʋ�������");
define("_AM_SSECTION_DB_CHECKTABLES", "�ơ��֥�Υ����å�");
define("_AM_SSECTION_DB_CURRENTVER", "���ߤΥС������: <span class='currentVer'>%s</span>");
define("_AM_SSECTION_DB_DBVER", "�ǡ����١����ΥС������ %s");
define("_AM_SSECTION_DB_MSG_ADD_DATA", "%s �ǡ������ɲä��ޤ���");
define("_AM_SSECTION_DB_MSG_ADD_DATA_ERR", "%s �ǡ������ɲý���ޤ���");
define("_AM_SSECTION_DB_MSG_CHGFIELD", "�ե�����ɤ��ѹ� %s �ơ��֥� %s");
define("_AM_SSECTION_DB_MSG_CHGFIELD_ERR", "�ե�����ɤ��ѹ�����ޤ��� %s �ơ��֥� %s");
define("_AM_SSECTION_DB_MSG_CREATE_TABLE", "%s �ơ��֥��������ޤ���");
define("_AM_SSECTION_DB_MSG_CREATE_TABLE_ERR", "%s �ơ��֥���������ޤ���");
define("_AM_SSECTION_DB_MSG_NEWFIELD", "�ե�����ɤ��ɲä��ޤ��� %s");
define("_AM_SSECTION_DB_MSG_NEWFIELD_ERR", "�ե�����ɤ��ɲý���ޤ��� %s");
define("_AM_SSECTION_DB_NEEDUPDATE", "�Ť��ǡ����١����Ǥ������åץ��졼�ɤ��Ʋ�����<br><b>��� : �ǡ����١�����Хå����åפ�����˥��åץ��졼�ɤ������ʤ�ޤ���</b><br>");
define("_AM_SSECTION_DB_NOUPDATE", "�ǡ����١����Ϲ�������Ƥ��ޤ��󡣥��åץǡ��Ȥ�ɬ�פ���ޤ���");
define("_AM_SSECTION_DB_UPDATE_DB", "�ǡ����١����򹹿����ޤ���");
define("_AM_SSECTION_DB_UPDATE_ERR", "�С������ %s �إ��åץǡ��Ƚ���ޤ���");
define("_AM_SSECTION_DB_UPDATE_NOW", "���åץǡ��Ȥ���");
define("_AM_SSECTION_DB_UPDATE_OK", "�С������ %s �˥��åץǡ��Ȥ��������ޤ�����");
define("_AM_SSECTION_DB_UPDATE_TO", "���åץǡ��Ȥ����С������ %s");
define("_AM_SSECTION_DELETE", "���");
define("_AM_SSECTION_DELETE_CAT_CONFIRM", "���ƥ����������ȡ����ƥ���������Ƥ� ���֥��ƥ���ȵ����������Ȥ�Ʊ���˺������ޤ���</br>���ƥ���������ޤ��� ?");
define("_AM_SSECTION_DELETE_CAT_ERROR", "���顼��ȯ�����ޤ��������ƥ������¸����ޤ���");
define("_AM_SSECTION_DELETECOL", "���ƥ���κ��");
define("_AM_SSECTION_DELETEFILE","ź�եե�����κ��");
define("_AM_SSECTION_DELETEITEM", "�����κ��");
define("_AM_SSECTION_DELETETHISFILE","���Υե�����������ޤ���?");
define("_AM_SSECTION_DELETETHISITEM", "���ε����������ޤ���?");
define("_AM_SSECTION_DESC", "�߽�");
define("_AM_SSECTION_DESCRIP", "���ƥ��������");
define("_AM_SSECTION_DESCRIPTION", "����");
define("_AM_SSECTION_DIRCREATED", "�ե������������ޤ�����");
define("_AM_SSECTION_DIRNOTCREATED", "�ե�������������ޤ���");
define("_AM_SSECTION_EDITCOL", "���ƥ�����Խ�");
define("_AM_SSECTION_EDITFILE","�ե�������Խ�");
define("_AM_SSECTION_EDITING", "�Խ�");
define("_AM_SSECTION_EDITITEM", "���ε������Խ�");
define("_AM_SSECTION_ERROR", " ���顼��ȯ�����ޤ�����");
define("_AM_SSECTION_ERROR_ITEM_NOT_SAVED", "���顼 ��������¸����ޤ���");
define("_AM_SSECTION_FDELETED", "ź�եե�����������ޤ���");
define("_AM_SSECTION_FILE", "ź�եե�����");
define("_AM_SSECTION_FILE_ADD", "ź�եե�������ɲ�");
define("_AM_SSECTION_FILE_ADDING", "������ź�եե�������ɲ�");
define("_AM_SSECTION_FILE_ADDING_DSC", "���ε����˿�����ź�եե�������ɲä��ޤ����ե�������ɲä���ˤ����Ƥι��ܤ����Ϥ���ɬ�פ�����ޤ���<br>��¸����ե�����̾�ϡ��ե�����̾����Ƭ�˵���ID���ɲä���ޤ���");
define("_AM_SSECTION_FILE_DELETE_ERROR","���顼 �ե������������ޤ���");
define("_AM_SSECTION_FILE_DESCRIPTION", "����");
define("_AM_SSECTION_FILE_DESCRIPTION_DSC", "ź�եե����������ʸ");
define("_AM_SSECTION_FILE_EDITING", "ź�եե�������Խ�");
define("_AM_SSECTION_FILE_EDITING_DSC", "ź�եե���������Ƥ˴ؤ����������Խ�����ޤ���");
define("_AM_SSECTION_FILE_EDITING_ERROR", "�ե��������Ƥ򹹿�����ޤ���");
define("_AM_SSECTION_FILE_EDITING_SUCCESS", "�ե��������Ƥ򹹿����ޤ�����");
define("_AM_SSECTION_FILE_INFORMATIONS", "ź�եե�����ξ���");
define("_AM_SSECTION_FILE_NAME", "̾��");
define("_AM_SSECTION_FILE_NAME_DSC", "ź�եե������ɽ��̾");
define("_AM_SSECTION_FILE_STATUS", "�ե�����θ���");
define("_AM_SSECTION_FILE_STATUS_DSC", "�����������򤷤���硢�ե�����ϡ��桼����¦���鸫���ޤ���");
define("_AM_SSECTION_FILE_TO_UPLOAD", "ź�եե����� :");
define("_AM_SSECTION_FILE_UPLOAD_ANOTHER", "���åץ��ɤ���³����");
define("_AM_SSECTION_FILEISDELETED","ź�եե�����������ޤ���") ;
define("_AM_SSECTION_FILENAME", "�ե�����̾");
define("_AM_SSECTION_FILES_LINKED", "���ε�����ź�եե�����");
define("_AM_SSECTION_FILEUPLOAD_ERROR", "�ե�����򥢥åץ��ɽ���ޤ���");
define("_AM_SSECTION_FILEUPLOAD_SUCCESS", "�ե�����򥢥åץ��ɤ��ޤ�����");
define("_AM_SSECTION_FINDUSERS", "�桼�����θ���");
define("_AM_SSECTION_GOMOD", "�⥸�塼���");
define("_AM_SSECTION_GROUPS", "���롼�״���");
define("_AM_SSECTION_GROUPSINFO", "�⥸�塼��ȥ֥�å��Υ�������������");
define("_AM_SSECTION_HELP", "�إ��");
define("_AM_SSECTION_HITS", "�ҥåȿ�");
define("_AM_SSECTION_ICO_DELETE", "���");
define("_AM_SSECTION_ICO_EDIT", "�Խ�");
define("_AM_SSECTION_ICO_OFFLINE", "���ե饤��");
define("_AM_SSECTION_ICO_ONLINE", "����饤��");
define("_AM_SSECTION_ID", "ID");
define("_AM_SSECTION_IMAGE", "���ƥ������");
define("_AM_SSECTION_IMAGE_DSC", "���ƥ���ɽ���˻Ȥ����������򤷤Ʋ�����");
define("_AM_SSECTION_IMAGE_ITEM", "�����β���");
define("_AM_SSECTION_IMAGE_ITEM_DSC", "���ε����˻Ȥ�����");
define("_AM_SSECTION_IMAGE_UPLOAD", "�����Υ��åץ���");
define("_AM_SSECTION_IMAGE_UPLOAD_DSC", "���ʤ��Υ���ԥ塼�����顢���ƥ���˻��Ѥ�������򥢥åץ��ɽ���ޤ���");
define("_AM_SSECTION_IMAGE_UPLOAD_ITEM_DSC", "���ʤ��Υ���ԥ塼����������򥢥åץ��ɽ���ޤ������åץ��ɤ��������ϵ����Ȱ���ɽ������ޤ���");
define("_AM_SSECTION_IMAGEPATH", "���ƥ�������򥽡��Ȥ��� : ");
define("_AM_SSECTION_IMPORT", "����ݡ���");
define("_AM_SSECTION_IMPORTED_COMMENT", "'%s' ����ݡ��Ȥ��ޤ���.");
define("_AM_SSECTION_IMPORTED_COMMENT_ERROR", "���顼 ����ݡ��Ƚ���ޤ���'%s'");
define("_AM_SSECTION_IMPORT_COMMENTS", "�����򥤥�ݡ�����Ǥ�");
define("_AM_SSECTION_IMPORT_ALL_PARTNERS", "���Ƥε���");
define("_AM_SSECTION_IMPORTED_ARTICLE_FILE", "�����򥤥�ݡ��Ȥ��ޤ��� %s");
define("_AM_SSECTION_IMPORT_ARTICLE_ERROR", "�����򥤥�ݡ�����Υ��顼 <em>%s</em>");
define("_AM_SSECTION_IMPORT_ARTICLE_WRAP", "�����ե����� %s �򥳥�ƥ�ĥե�����˥��ԡ����ޤ�����");
define("_AM_SSECTION_IMPORT_AUTOAPPROVE", "��ư�Ǿ�ǧ");
define("_AM_SSECTION_IMPORT_BACK", "����ݡ��ȤΥڡ��������");
define("_AM_SSECTION_IMPORT_CATEGORIES", "���ƥ���򥤥�ݡ��Ȥ���");
define("_AM_SSECTION_IMPORT_CATEGORIES_DSC", "SmartSection �˥���ݡ��Ȥ��륫�ƥ���Ȥ��ε�����");
define("_AM_SSECTION_IMPORT_CATEGORY_ERROR", "���顼 ���ƥ���򥤥�ݡ��Ƚ���ޤ��� <em>%s</em>.");
define("_AM_SSECTION_IMPORT_CATEGORY_SUCCESS", "���ƥ��� <em>%s</em> �򥤥�ݡ��Ȥ��ޤ�����");
define("_AM_SSECTION_IMPORT_ERROR", "���顼 �����򥤥�ݡ��Ƚ���ޤ���Ǥ�����");
define("_AM_SSECTION_IMPORT_FILE_NOT_FOUND", "�ե����뤬���Ĥ���ޤ��� <b>%s</b>");
define("_AM_SSECTION_IMPORT_FROM", "%s ���饤��ݡ��� ");
define("_AM_SSECTION_IMPORT_GOTOMODULE", "���ޡ��ȥ��������Υ���ǥå����ڡ��������");
define("_AM_SSECTION_IMPORT_INFO", "���ޡ��ȥ��������ε���������ߤޤ�������ݡ��Ȥ���⥸�塼�����ꤷ�ơ�����ݡ��ȥܥ���򥯥�å����Ƥ���������<br><b>�������Ϸ��֤��Ԥ�ʤ��ǲ�������������ʣ������������ޤ���</b>");
define("_AM_SSECTION_IMPORT_MODULE_FOUND", "%s �⥸�塼��򸫤Ĥ��ޤ�����%s �Ĥε����� %s ���ƥ��꤬����ݡ��Ȥ���ޤ�");
define("_AM_SSECTION_IMPORT_MODULE_FOUND_NO_ITEMS", "%s �⥸�塼��򸫤Ĥ��ޤ�����������ݡ��Ȥ��뵭�������Ĥ���ޤ���.");
define("_AM_SSECTION_IMPORT_NOCATSELECTED", "����ݡ��Ȥ��륫�ƥ��꤬���Ĥ���ޤ���");
define("_AM_SSECTION_IMPORT_NO_MODULE", "����ݡ��Ȳ�ǽ�ʥ⥸�塼�뤬���󥹥ȡ��뤵��Ƥ��ޤ��󡣵����򥤥�ݡ��Ƚ���ޤ���");
define("_AM_SSECTION_IMPORT_PARENT_CATEGORY", "�ƥ��ƥ���");
define("_AM_SSECTION_IMPORT_PARENT_CATEGORY_DSC", "����ݡ��Ȥ���ƥ��ƥ�������򤷤Ƥ���������<br>���ƥ�������򤷤����ƥ���Υ��֥��ƥ���Ȥ��ƥ���ݡ��Ȥ���ޤ���");
define("_AM_SSECTION_IMPORT_PARTNER_ERROR", "���顼 ����ݡ��Ƚ���ޤ��� '%s'.");
define("_AM_SSECTION_IMPORT_RESULT", "����ݡ��ȷ��");
define("_AM_SSECTION_IMPORT_SETTINGS", "����ݡ��Ȥ�����");
define("_AM_SSECTION_IMPORT_SUCCESS", "�⥸�塼��ε����Υ���ݡ��Ȥ���λ���ޤ�����");
define("_AM_SSECTION_IMPORT_TITLE", "�����Υ���ݡ���");
define("_AM_SSECTION_IMPORTED_ARTICLE", "����ݡ��Ȥ������� : <em>%s</em>");
define("_AM_SSECTION_IMPORTED_ARTICLES", "����ݡ��Ȥ������� : <em>%s</em>");
define("_AM_SSECTION_IMPORTED_CATEGORY", "����ݡ��Ȥ������ƥ��� : <em>%s</em>");
define("_AM_SSECTION_IMPORTED_CATEGORIES", "����ݡ��Ȥ������ƥ��� : <em>%s</em>");
define("_AM_SSECTION_IMPORT_SELECTION", "�����Υ���ݡ���");
define("_AM_SSECTION_IMPORT_SELECT_FILE", "����");
define("_AM_SSECTION_IMPORT_SELECT_FILE_DSC", "����ݡ��Ȥ��뵭���Τ���⥸�塼������򤷤Ʋ�������");
define("_AM_SSECTION_INACTIVEUSERS", "�����ƥ��֤Ǥʤ��桼����: %s��");
define("_AM_SSECTION_INDEX", "����ǥå���");
define("_AM_SSECTION_INVENTORY", "�⥸�塼�복��");
define("_AM_SSECTION_ITEM", "����");
define("_AM_SSECTION_ITEM_CREATING", "�����������κ���");
define("_AM_SSECTION_ITEM_CREATING_DSC", "�����ե������Ȥäƿ�����������������ޤ���");
define("_AM_SSECTION_ITEM_DELETE_ERROR", "���顼 ������������ޤ���");
define("_AM_SSECTION_ITEM_DUPLICATING", "������ʣ��");
define("_AM_SSECTION_ITEM_DUPLICATING_DSC", "���ꥸ�ʥ�ε����򸵤˿�����������������ޤ���");
define("_AM_SSECTION_ITEM_EDIT", "���ε������Խ�");
define("_AM_SSECTION_ITEM_INFORMATIONS", "���饹�Υ��������Υ����Ĥξ���(Class action suit informations)");
define("_AM_SSECTION_ITEM_RECEIVED_NEED_APPROVAL", "���ʤ��ε�������������ޤ�����<br />��ǥ졼�����ˤ�꾵ǧ���줿���ȸ�������ޤ���<br />�����δ�Ƥ˴��դ��ޤ���");
define("_AM_SSECTION_ITEM_REJECTED", "������Ѳ����ޤ���");
define("_AM_SSECTION_ITEMCAT", "���ƥ���");
define("_AM_SSECTION_ITEMCATEGORYNAME", "���ƥ���");
define("_AM_SSECTION_ITEMCOLNAME", "�����ȥ�");
define("_AM_SSECTION_ITEMCREATEDOK", "�����ϡ���������Ǻܤ���ޤ�����");
define("_AM_SSECTION_ITEMDESC", "����");
define("_AM_SSECTION_ITEMID", "ID");
define("_AM_SSECTION_ITEMISDELETED", "�����������ޤ���");
define("_AM_SSECTION_ITEMMODIFIED", "�������ѹ����ޤ�����");
define("_AM_SSECTION_ITEMNOTCREATED", "�������������ޤ���");
define("_AM_SSECTION_ITEMNOTUPDATED", "�����򹹿�����ޤ���");
define("_AM_SSECTION_ITEMS", "����");
define("_AM_SSECTION_LIMIT", "1�ڡ����������ɽ���桼����");
define("_AM_SSECTION_MESSAGE_ADD_MIME_ERROR", "���顼: MIME�����פ��ɲäǤ��ʤ��ä�");
define("_AM_SSECTION_MESSAGE_DELETE_MIME_ERROR", "���顼: MIME�����פ�����Ǥ��ʤ��ä�");
define("_AM_SSECTION_MESSAGE_EDIT_MIME_ERROR", "���顼: MIME�����פ������Ǥ��ʤ��ä�");
define("_AM_SSECTION_MESSAGE_NO_ID", "���顼: ID ������Ǥ��ʤ��ä�");
define("_AM_SSECTION_MESSAGE_NO_VALUE", "���顼: MIME�����פ��ͤ�����Ǥ��ʤ��ä�");
define("_AM_SSECTION_MIME_ADD_TITLE", "�ե�����Υ����פ��ɲ�");
define("_AM_SSECTION_MIME_ADMIN", "������");
define("_AM_SSECTION_MIME_ADMINF", "�����Ԥ˵��Ĥ��� MIME������");
define("_AM_SSECTION_MIME_ADMINFINFO", "<b>�����Ԥ����åץ��ɲ�ǽ�ʥե�����Υ�����</b>");
define("_AM_SSECTION_MIME_CANCEL", "����󥻥�");
define("_AM_SSECTION_MIME_CLEAR", "�ꥻ�å�");
define("_AM_SSECTION_MIME_CREATE", "����");
define("_AM_SSECTION_MIME_CREATED", "MIME�����׾����������ޤ���");
define("_AM_SSECTION_MIME_CREATEF", "�ե����륿���פ��ɲ�");
define("_AM_SSECTION_MIME_DELETE", "���");
define("_AM_SSECTION_MIME_DELETETHIS", "����MIME�����פ������ޤ���");
define("_AM_SSECTION_MIME_EDIT_TITLE", "�ե����륿���פ��Խ�");
define("_AM_SSECTION_MIME_EXT", "��ĥ��");
define("_AM_SSECTION_MIME_EXTF", "�ե�����γ�ĥ��");
define("_AM_SSECTION_MIME_EXTFIND", "�ե�����γ�ĥ�Ҥ򸡺�<div style='padding-top: 8px;'><span style='font-weight: normal;'>�����������ե�����γ�ĥ�Ҥ����Ϥ���</span></div>");
define("_AM_SSECTION_MIME_FINDIT", "��ĥ�Ҥ�õ��");
define("_AM_SSECTION_MIME_FINDMIMETYPE", "�������ե������MIME�����פ�õ���ޤ���?");
define("_AM_SSECTION_MIME_ID", "ID");
define("_AM_SSECTION_MIME_INFOTEXT", "<ul><li>���Υե�����ǡ��ե�����Υ����פ��ɲá��Խ��ޤ��Ϻ������ޤ���</li> <li>�������ե�����Υ����פ����Υ����Ȥ�õ�����Ȥ�����ޤ���</li> <li>�����ԡ��桼������ɽ������ե����륿���פ�ɽ�����ޤ���</li> <li>�ե����륿���פ�������ѹ�����ޤ���</li></ul>");
define("_AM_SSECTION_MIME_MANAGE_TITLE", "�ե����륿���״���");
define("_AM_SSECTION_MIME_MIMEDELETED", "��ĥ�� %s �������ޤ���");
define("_AM_SSECTION_MIME_MODIFIED", "�ե����륿���פξ�����ѹ����ޤ���");
define("_AM_SSECTION_MIME_MODIFY", "�ѹ�");
define("_AM_SSECTION_MIME_MODIFYF", "�ե����륿�����ѹ�");
define("_AM_SSECTION_MIME_NAME", "���ץꥱ�������Υ�����");
define("_AM_SSECTION_MIME_NAMEF", "���ץꥱ�������Υ�����/̾��<div style='padding-top: 8px;'><span style='font-weight: normal;'>��ĥ�Ҥ˴�Ϣ���륢�ץꥱ�������̾</span></div>");
define("_AM_SSECTION_MIME_NOMIMEINFO", "MIME�����פ����򤵤�Ƥ��ޤ���");
define("_AM_SSECTION_MIME_SEARCH", "�ե����륿���׸���");
define("_AM_SSECTION_MIME_TYPEF", "MIME������<div style='padding-top: 8px;'><span style='font-weight: normal;'>�ե������ĥ�Ҥȴ�Ϣ����ơ��Υե������MIME�����פ����Ϥ��Ƥ���������MIME�����פϡ����ڡ����Ƕ��ڤ��Ƥ��ʤ���Фʤ�ޤ���</span></div>");
define("_AM_SSECTION_MIME_USER", "�桼����");
define("_AM_SSECTION_MIME_USERF", "�桼�����˵��Ĥ��� MIME������");
define("_AM_SSECTION_MIME_USERFINFO", "<b>�桼���������åץ��ɲ�ǽ�ʥե�����Υ�����</b>");
define("_AM_SSECTION_MIMETYPES", "�ե����륿����");
define("_AM_SSECTION_MINDEX_ACTION", "���");
define("_AM_SSECTION_MINDEX_PAGE", "<b>�ڡ���</b> ");
define("_AM_SSECTION_MODADMIN", "�⥸�塼����� :");
define("_AM_SSECTION_MODIFY", "�ѹ�");
define("_AM_SSECTION_MODIFYCAT", "���ƥ�����ѹ�");
define("_AM_SSECTION_MODIFYTHISCAT", "���Υ��ƥ�����ѹ����ޤ���?");
define("_AM_SSECTION_NB_SUBCATS","����ʬ���ƥ�����ɲä��ޤ�:<br><br>�������Ϥ���'�ɲ�'�򲡤��Ʋ�����");
define("_AM_SSECTION_NEED_CATEGORY_ITEM", "�������������ޤ��󡣤ޤ��ǽ�˥��ƥ����������Ƥ���������");
define("_AM_SSECTION_NO", "������");
define("_AM_SSECTION_NOCAT", "ɽ�����륫�ƥ��꤬����ޤ���");
define("_AM_SSECTION_NOCOLTOEDIT", "�Խ����뤹�륫�ƥ��꤬����ޤ���");
define("_AM_SSECTION_NOFILE", "���ε����ˤϡ�ź�եե�����Ϥ���ޤ���");
define("_AM_SSECTION_NOFILESELECTED", "�ե���������򤷤Ƥ��ޤ���");
define("_AM_SSECTION_NOFOUND", "���ꤵ�줿���Ǥϸ��Ĥ���ޤ���");
define("_AM_SSECTION_NOITEMS", "������ε����Ϥ���ޤ���");
define("_AM_SSECTION_NOITEMS_OFFLINE", "�������ε����Ϥ���ޤ���");
define("_AM_SSECTION_NOITEMS_REJECTED", "�Ѳ����������Ϥ���ޤ���");
define("_AM_SSECTION_NOITEMS_SUBMITTED", "��ǧ�Ԥ��ε����Ϥ���ޤ���");
define("_AM_SSECTION_NOITEMSELECTED", "���������򤷤Ƥ��ޤ���");
define("_AM_SSECTION_NOITEMSSEL", "���Υ��ơ������˵����Ϥ���ޤ���");
define("_AM_SSECTION_NONE", "̵��");
define("_AM_SSECTION_NOPERMSSET", "�������������������ޤ��� : ���ƥ��꤬��������Ƥ��ޤ��󡣥��ƥ������˺������Ʋ�������");
define("_AM_SSECTION_NOSUBCAT","���֥��ƥ���Ϥ���ޤ���");
define("_AM_SSECTION_NOTAVAILABLE", "<span style='font-weight: bold; color: red;'>�����Բ�</span>");
define("_AM_SSECTION_NOTUPDATED", "�ǡ����١����ι����˼��Ԥ��ޤ�����");
define("_AM_SSECTION_OFFLINE", "�����");
define("_AM_SSECTION_OFFLINE_CREATED_SUCCESS", "������������ˤ��ޤ�����");
define("_AM_SSECTION_OFFLINE_EXP", "<b>������ε���</b> : ��������ߤ⤷���ϰ��Ū��ȯ�Ԥ��������Ǥ���������ε����ϡ�ɽ������ޤ���");
define("_AM_SSECTION_OFFLINE_FIELD", "���ե饤��<span style='font-size: xx-small; font-weight: normal; display: block;'>�Ԥθ����֤��Ȥ��� 'No' �����򤹤�</span>");
define("_AM_SSECTION_OFFLINE_MOD_SUCCESS", "���򤵤줿������������ˤ��ޤ�����.");
define("_AM_SSECTION_OFFLINEEDITING", "������ε������Խ�");
define("_AM_SSECTION_OFFLINEEDITING_INFO", "������ε������Խ�����ޤ����������Խ��塢����������ϥ��ơ�������<b>����</b>�˻��ꤷ�Ʋ�������");
define("_AM_SSECTION_OPTS", "��������");
define("_AM_SSECTION_PAGEWRAP","�ڡ����μ�����");
define("_AM_SSECTION_PAGEWRAPDSC", "�ڡ����μ����ߤϡ���������˻��ꤵ�줿�ե���������Ƥ�����ߤޤ�������ϡ���¸�Υ���ƥ�Ĥ�ڡ�����������ǥڡ������������ޤ���<br>��¸�� HTML�ե�������귿HTML�ե�����Ȥ���ͭ���˻Ȥ��ޤ���");
define("_AM_SSECTION_PARENT_CATEGORY_EXP", "�ƥ��ƥ���<span style='font-size: small; font-weight: normal; display: block;'>���ƥ���β��˥��֥��ƥ�����������ޤ���<br />���֥��ƥ���Ȥ��ƺ��������硢���ƥ���οƤˤʤ륫�ƥ�������򤷤Ʋ�������</span>");
define("_AM_SSECTION_PATH", "�ѥ�");
define("_AM_SSECTION_PATH_CONTENT", "������ե�����");
define("_AM_SSECTION_PATH_FILES", "ź�եե�����");
define("_AM_SSECTION_PATH_IMAGES", "���Τβ���");
define("_AM_SSECTION_PATH_IMAGES_CATEGORY", "���ƥ���β����ե�����");
define("_AM_SSECTION_PATH_IMAGES_ITEM", "�����β����ե�����");
define("_AM_SSECTION_PATH_ITEM", "�ե�����μ���");
define("_AM_SSECTION_PATHCONFIGURATION", "�ѥ�������");
define("_AM_SSECTION_PERMERROR", "ERROR: �ǥ��쥯�ȥ�˥�����������ޤ���uploads/smartsection/content �ǥ��쥯�ȥ�����߲�ǽ�ˤ��Ʋ�������");
define("_AM_SSECTION_PERMISSIONS", "����������");
define("_AM_SSECTION_PERMISSIONS_APPLY_ON_ITEMS", "���ƥ���Υ����������򵭻���Ŭ��<span style='font-size: small; font-weight: normal; display: block;'>���Υ��ƥ�����ε����˾嵭������������Ŭ�Ѥ��ޤ���<br />���ƥ���������Ƥε����Υ������������񤭤��ޤ���</span>");
define("_AM_SSECTION_PERMISSIONS_CAT_READ", "����������<span style='font-size: small; font-weight: normal; display: block;'>���Υ��ƥ��������Ǥ��륰�롼�פ����򤷤Ƥ���������</span>");
define("_AM_SSECTION_PERMISSIONS_CAT_SUBMIT", "��������Ƹ���");
define("_AM_SSECTION_PERMISSIONS_CAT_SUBMIT_DSC", "���ƥ��ꤴ�Ȥ˵�������Ƥ��븢�¤���ꤷ�ޤ��� �ƥ��롼�פ���ƽ���륫�ƥ�������򤷤Ʋ�������");
define("_AM_SSECTION_PERMISSIONS_ITEM", "����������");
define("_AM_SSECTION_PERMISSIONS_ITEM_DSC", "���ε���������Ǥ��륰�롼�פ����򤷤Ƥ���������");
define("_AM_SSECTION_PERMISSIONSADMIN", "��������������");
define("_AM_SSECTION_PERMISSIONSADMINMAN", "���ƥ����̤�ɽ������");
define("_AM_SSECTION_PERMISSIONSSUBMIT", "��������ƤǤ��븢��");
define("_AM_SSECTION_PERMISSIONSSUBMIT_DESC", "���줾��Υ��롼�פˤơ���������ƤǤ��륫�ƥ�������򤹤�");
define("_AM_SSECTION_PERMISSIONSVIEWMAN", "���ƥ����̤α�������");
define("_AM_SSECTION_PUBLISH", "�Ǻ�");
define("_AM_SSECTION_PUBLISHED", "������");
define("_AM_SSECTION_PUBLISHED_DSC", "���߸�����ε����ΰ����Ǥ���");
define("_AM_SSECTION_PUBLISHED_EXP", "<b>�������줿����</b> : ���߸�����ε����Ǥ���");
define("_AM_SSECTION_PUBLISHED_MOD_SUCCESS", "�����ι������������ޤ�����");
define("_AM_SSECTION_PUBLISHEDEDITING", "ȯ�Ԥ��줿�������Խ����ޤ�");
define("_AM_SSECTION_PUBLISHEDEDITING_INFO", "���ʤ��Ϥ��ε������Խ����뤳�Ȥ��Ǥ��ޤ��� �ѹ���ľ����ȿ�Ǥ��졢��������ޤ���");
define("_AM_SSECTION_PUBLISHEDITEMS", "������ε���");
define("_AM_SSECTION_REALNAME", "��̾");
define("_AM_SSECTION_REJECTED", "�Ѳ�");
define("_AM_SSECTION_REJECTED_EDIT", "�Ѳ������������Խ�");
define("_AM_SSECTION_REJECTED_ITEM", "�Ѳ����줿����");
define("_AM_SSECTION_REJECTED_ITEM_EXP", "<b>�Ѳ����줿����</b> : �����Ԥˤ�äƵѲ����줿�����Ǥ����Ѳ����줿�����ϡ�������ˤʤ�ޤ���");
define("_AM_SSECTION_RESULTS", "�������");
define("_AM_SSECTION_RUSUREDELF", "���Υե�����������ޤ�����");
define("_AM_SSECTION_SCATEGORYNAME","���֥��ƥ������<br><br><span style='font-size: xx-small; font-weight: normal; display: block;'>�ƥ����ȥܥå�����̾�������Ϥ���ȥ��֥��ƥ����������ޤ���<br>����ξ��ϥ��֥��ƥ����������ޤ��󡣤�ä�¿���Υ��ƥ�������������ϡ��ɲä�����ܿ������ϸ���ɲåܥ���򲡤��Ƥ���������</span>");
define("_AM_SSECTION_SEARCH","����");
define("_AM_SSECTION_SEARCH_PW","HTML, HTM �ޤ��� XHTML �γ�ĥ�ҤΤߥ��åץ��ɤ��Ʋ�������");
define("_AM_SSECTION_SELECT_SORT", "�����Ƚ������");
define("_AM_SSECTION_SELECT_STATUS", "���ơ�����");
define("_AM_SSECTION_SELECTFILE","�ե����������");
define("_AM_SSECTION_SETMPERM", "����������������");
define("_AM_SSECTION_SHOWING", "ɽ��");
define("_AM_SSECTION_STATUS", "���ơ�����");
define("_AM_SSECTION_STATUS0", "���ơ�����̵��");
define("_AM_SSECTION_STATUS_DSC", "���ε����Υ��ơ�����������");
define("_AM_SSECTION_SUBCAT_CAT","���֥��ƥ���");
define("_AM_SSECTION_SUBCAT_CAT_DSC","���Υ��ƥ���Υ��֥��ƥ������");
define("_AM_SSECTION_SUBCATEGORY_SAVE_ERROR","���ƥ�����������ޤ���:");
define("_AM_SSECTION_SUBDESCRIPT","����");
define("_AM_SSECTION_SUBMISSION_MODERATE", "��ǧ�Ԥ������ξ�ǧ");
define("_AM_SSECTION_SUBMISSIONSMNGMT", "��ǧ�Ԥ�����");
define("_AM_SSECTION_SUBMIT", "������Ͽ");
define("_AM_SSECTION_SUBMITTED", "��ǧ�Ԥ�����");
define("_AM_SSECTION_SUBMITTED_APPROVE_SUCCESS", "������ǧ�����������ޤ�����");
define("_AM_SSECTION_SUBMITTED_EXP", "<b>��ǧ�Ԥ��ε���</b> : �桼���ˤ�ä���Ƥ��줿��������������ˤϾ�ǧ��ɬ�פǤ���");
define("_AM_SSECTION_SUBMITTED_INFO", "��Ƥ��줿�����Ǥ������������Ƥ��ǧ�����Խ����ǽ�Ǥ�����������ˤϾ�ǧ��ɬ�פǤ���");
define("_AM_SSECTION_SUBMITTED_TITLE", "��Ƥ��줿�����ξ�ǧ");
define("_AM_SSECTION_SUMMARY", "�����γ���");
define("_AM_SSECTION_SUMMARY_DSC", "���ε����γ���");
define("_AM_SSECTION_TEXT_ASCENDING", "�߽�");
define("_AM_SSECTION_TEXT_DESCENDING", "����");
define("_AM_SSECTION_TEXT_NUMBER_PER_PAGE", "�ڡ�����ư:");
define("_AM_SSECTION_TEXT_ORDER_BY", "�¤ӽ�:");
define("_AM_SSECTION_TEXT_SEARCH_BY", "��������:");
define("_AM_SSECTION_TEXT_SEARCH_MIME", "�ե����륿���פ򸡺�");
define("_AM_SSECTION_TEXT_SEARCH_TEXT", "�ƥ����ȸ���:");
define("_AM_SSECTION_TEXT_SORT_BY", "�¤��ؤ�:");

define("_AM_SSECTION_TEXT_NO_RECORDS", "�ǡ���������ޤ���");

define("_AM_SSECTION_TITLE", "�����ȥ�");
define("_AM_SSECTION_TITLE_REQ", "�����ȥ�*");
define("_AM_SSECTION_TOTAL_OFFLINE", "������ε���: ");
define("_AM_SSECTION_TOTALCAT", "���ƥ��� :");
define("_AM_SSECTION_TOTALPUBLISHED", "������ε���: ");
define("_AM_SSECTION_TOTALSUBMITTED", "��ǧ�Ԥ�����: ");
define("_AM_SSECTION_UID", "��Ƽ�̾");
define("_AM_SSECTION_UID_DSC", "��ƼԤ�̾��������");
define("_AM_SSECTION_UNAME", "�桼��̾");
define("_AM_SSECTION_UPDATE_MODULE", "�⥸�塼��Υ��åץǡ���");
define("_AM_SSECTION_UPLOAD", "���åץ���");
define("_AM_SSECTION_UPLOAD_FILE", "ź�եե�����");
define("_AM_SSECTION_UPLOAD_FILE_NEW", "ź�եե�������ɲä���");
define("_AM_SSECTION_UPLOADED_DATE", "��Ͽ��");
define("_AM_SSECTION_UPLOADPATH", "���åץ��ɤ��줿ź�եե��������¸����ѥ� : ");
define("_AM_SSECTION_VIEW_CATS", "�ƥ��롼�פ�ɽ���Ǥ��륫�ƥ�������򤷤Ƥ���������");
define("_AM_SSECTION_WEIGHT", "�¤ӽ�");
define("_AM_SSECTION_YES", "�Ϥ�");
define("_MD_SSECTION_CATEGORY_ITEM", "���ƥ���<span style='font-size: xx-small; font-weight: normal; display: block;'>���ƥ����°���륫�ƥ���</span>");

// === v2.1 ===
define("_AM_SSECTION_CATEGORY_HEADER", "���ƥ���Υإå���");
define("_AM_SSECTION_CATEGORY_HEADER_DSC", "");
define("_AM_SSECTION_CATEGORY_META_DESCRIPTION", "Meta Description");
define("_AM_SSECTION_CATEGORY_META_DESCRIPTION_DSC", "�������󥸥��к��Τ���ˡ����Υ��ƥ��꡼�������Ѥ� Meta Description �򥫥����ޥ������뤳�Ȥ��Ǥ��ޤ����⤷�����ƥ��꡼����Ȥ��ˡ����ι��ܤ����Τޤޤˤ��Ƥ����С���ưŪ�ˤ��Υ��ƥ��꡼�Ѥ� Meta Description ����������ޤ���");
define("_AM_SSECTION_CATEGORY_META_KEYWORDS", "Meta Keywords");
define("_AM_SSECTION_CATEGORY_META_KEYWORDS_DSC", "�������󥸥��к��Τ���ˡ����Υ��ƥ��꡼�������Ѥ� Meta Keywords �򥫥����ޥ������뤳�Ȥ��Ǥ��ޤ����⤷�����ƥ��꡼����Ȥ��ˡ����ι��ܤ����Τޤޤˤ��Ƥ����С���ưŪ�ˤ��Υ��ƥ��꡼�Ѥ� Meta Keywords ����������ޤ���");
define("_AM_SSECTION_CATEGORY_SHORT_URL", "���硼��URL");
define("_AM_SSECTION_CATEGORY_SHORT_URL_DSC", "���Υ⥸�塼���SEO�к���Ԥ��Ȥ��ϡ����Υ��ƥ��꡼�Τ���˥��硼��(û��)URL�򵭽Ҥ��뤳�Ȥ��Ǥ��ޤ������ι��ܤϥ��ץ����Ǥ���");
define("_AM_SSECTION_ITEM_META_DESCRIPTION", "Meta Description");
define("_AM_SSECTION_ITEM_META_DESCRIPTION_DSC", "�������󥸥��к��Τ���ˡ����ε����������Ѥ� Meta Description �򥫥����ޥ������뤳�Ȥ��Ǥ��ޤ����⤷����������Ȥ��ˡ����ι��ܤ����Τޤޤˤ��Ƥ����С���ưŪ�ˤ��ε����Ѥ� Meta Description ����������ޤ���");
define("_AM_SSECTION_ITEM_META_KEYWORDS", "Meta Keywords");
define("_AM_SSECTION_ITEM_META_KEYWORDS_DSC", "�������󥸥��к��Τ���ˡ����ε����������Ѥ� Meta Keywords �򥫥����ޥ������뤳�Ȥ��Ǥ��ޤ����⤷����������Ȥ��ˡ����ι��ܤ����Τޤޤˤ��Ƥ����С���ưŪ�ˤ��ε����Ѥ� Meta Keywords ����������ޤ���");
define("_AM_SSECTION_ITEM_SHORT_URL", "���硼��URL");
define("_AM_SSECTION_ITEM_SHORT_URL_DSC", "���Υ⥸�塼���SEO�к���Ԥ��Ȥ��ϡ����ε����Τ���˥��硼��(û��)URL�򵭽Ҥ��뤳�Ȥ��Ǥ��ޤ������ι��ܤϥ��ץ����Ǥ���");
define("_AM_SSECTION_DB_NEEDUPDATE_WARNING", "�ٹ�: SmartFactory�ϡ����åץ��졼�ɤΥץ�����¹Ԥ������ˡ����Ƥ� SmartSection �Υǡ����١������ơ��֥��Хå����åפ��뤳�Ȥ򶯤��侩���ޤ���");

// === v2.12 ===
define("_AM_SSECTION_PARTIAL_VIEW", "���Υ��롼�פ���ʬŪ�ʥ����������¤�Ϳ����");
define("_AM_SSECTION_PARTIAL_VIEWDSC", "�����å��ܥå���������å����뤳�Ȥǡ����Υ��롼�פ˵����ΰ������ɤย�¤�Ϳ���뤳�Ȥ�����롣�ޤ������Υ��롼�פϥ⥸�塼��ȿƥ��ƥ���Υ����������¤����ɬ�פ�����ޤ���");

// === v2.13 ===
define("_AM_SSECTION_TOOLS", "�ġ���");
define("_AM_SSECTION_CONFIGURE_READ_PERMISSIONS", "�ɽФ����Ĥ����ꤹ��");
define("_AM_SSECTION_CONFIGURE_READ_PERMISSIONS_EXP", "���Υġ���ϡ�ľ�������ƤΥ��ƥ�������Ƥε������Ф����ɽФ����Ĥ����ꤹ�롣<br />�ǽ�����Ƥε��ĤϺ������롣���줫�餢�ʤ�����������ץ������֤��������롣<br /><br /><b>��դ��ƻ��ѤΤ��� !</b>");
define("_AM_SSECTION_FULLACCESS", "���ƤΥ��ƥ�������Ƥε������Ф����ɽФ�����");
define("_AM_SSECTION_PERMISSIONS_UPDATED", "���ĤϹ������줿��");

define("_AM_SSECTION_ITEM_TAGS", "����");
define("_AM_SSECTION_ITEM_TAGS_DSC", "");

define("_AM_SSECTION_ITEM_UPLOAD_FILE", "���ε����˥ե�������Ϣ�դ�����");
define("_AM_SSECTION_ITEM_UPLOAD_FILE_DSC", "���ε����˴�Ϣ�դ�����ե���������򤹤롣<br />�����������������Ȥǡ�ʣ���Υե�������ɲä��뤳�Ȥ��Ǥ��롣<br />�ޤ��������Խ����ơ������ޤǥ������뤷�ơ���Add file�ץܥ���򥯥�å����롣<br /><br />�㤨�С�Word�ե������Excel�ե�������ɲäǤ��롣<br />Flash�ե�����򥢥åץ��ɤ��ơ����ʤ��ε������ɲä��뤳�Ȥ������ !");

define("_AM_SSECTION_XOOPS_PRO", "���Υ⥸�塼��˴ؤ��ƽ�����ɬ�פǤ��� ?<br />��������ǽ��ɬ�פǤ��� ?");

define("_AM_SSECTION_NEW_FEATURE", "����ǽ !!!");

?>