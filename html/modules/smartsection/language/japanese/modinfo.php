<?php
// $Id: modinfo.php,v 1.1 2012/03/31 11:45:35 ohwada Exp $

// 2008-10-01 K.OHWADA
// v2.14 ���б�����

// 2007-04-10 K.OHWADA
// v2.13 ���б�����
// http://xoopscube.jp/modules/xhnewbb/viewtopic.php?topic_id=4379

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
* Id: modinfo.php 3195 2008-06-23 17:03:58Z xoops-magazine 
* Module: SmartSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

// Module Info
// The name of this module

global $xoopsModule;

define("_MI_SSECTION_ADMENU1", "����ǥå���");
define("_MI_SSECTION_ADMENU2", "���ƥ���");
define("_MI_SSECTION_ADMENU3", "����");
define("_MI_SSECTION_ADMENU4", "��������������");
define("_MI_SSECTION_ADMENU5", "�֥�å������롼�״���");
define("_MI_SSECTION_ADMENU6", "Mime������");
define("_MI_SSECTION_ADMENU7", "�⥸�塼���");
define("_MI_SSECTION_ADMINHITS", "[����ƥ��]�����Ԥ򥫥����");
define("_MI_SSECTION_ADMINHITSDSC", "�����Ԥ�����Υ�����Ȥ������");
define("_MI_SSECTION_ALLOWSUBMIT", "[����] �桼��������Ƥ����:");
define("_MI_SSECTION_ALLOWSUBMITDSC", "���ƤΥ桼��������Ƥ���Ĥ���");
define("_MI_SSECTION_ANONPOST", "[����] ��������Ƥ����");
define("_MI_SSECTION_ANONPOSTDSC", "�����Ȥ˵����κ�������Ĥ���");
define("_MI_SSECTION_AUTHOR_INFO", "��ȯ�Ԥξ���");
define("_MI_SSECTION_AUTHOR_WORD", "��Ԥ���Υ�å�����");
define("_MI_SSECTION_AUTOAPP", "[����] ������ưŪ�˾�ǧ����:");
define("_MI_SSECTION_AUTOAPPDSC", "�����Ԥγ�ǧ�ʤ���ưŪ����Ƥ��줿������ǧ���롣");
define("_MI_SSECTION_BCRUMB","[��] �ꥹ�Ȥ˥⥸�塼��̾��ɽ������");
define("_MI_SSECTION_BCRUMBDSC","�֤Ϥ��פξ�硢���֤򼨤��ꥹ�Ȥ�\"Smartsection > ���ƥ���̾ > ����̾\"��ɽ�����ޤ���<br />�����Ǥʤ����ϡ�\"���ƥ���̾ > ����̾\" ��ɽ�����ޤ���");
define("_MI_SSECTION_BOTH_FOOTERS",'ξ���Υեå���');
define("_MI_SSECTION_BY", "by");
define("_MI_SSECTION_CATEGORY_ITEM_NOTIFY", "���ƥ���");
define("_MI_SSECTION_CATEGORY_ITEM_NOTIFY_DSC", "���ߤΥ��ƥ����Ŭ�Ѥ�������Υ��ץ����");
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY", "���������ηǺ�");
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_CAP", "���Υ��ƥ���˿����������Ǻܤ��줿�������Τ���");
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_DSC", "���Υ��ƥ���˿����������Ǻܤ��줿�������Τ���");
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} ��ư���� : ���������� �����ƥ���˷Ǻܤ���ޤ���");
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY", "'�����������");
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_CAP", "���Υ��ƥ���˿�����������Ƥ��줿�������Τ���");   
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_DSC", "���Υ��ƥ���˿�����������Ƥ��줿�������Τ���");
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} ��ư���� : ���������� �����ƥ������Ƥ���ޤ���");
define("_MI_SSECTION_CATPERPAGE", "[��] ���ڡ�����ɽ�����륫�ƥ���� (ɽ������):");
define("_MI_SSECTION_CATPERPAGEDSC", "ɽ�����̤ǣ��ڡ�����ɽ�����륫�ƥ���������");
define("_MI_SSECTION_CLONE", "[����] ������ʣ������Ĥ��ޤ���");
define("_MI_SSECTION_CLONEDSC", "�֤Ϥ��פ����򤷤���硢������ʣ����Ԥä��ڡ����κ�������ǽ�ˤʤ�ޤ���");
define("_MI_SSECTION_COLLHEAD", "[��] �ޤꤿ���ߥС���ɽ��");
define("_MI_SSECTION_COLLHEADDSC", "�֤Ϥ��פξ�硢���ƥ�����ޤꤿ���ߥС���ɽ�������֤������פξ����ޤꤿ���ߥС���ɽ�����ޤ���");
define("_MI_SSECTION_COMMENTS", "[����]����ñ�̤ǥ����Ȥ����");
define("_MI_SSECTION_COMMENTSDSC", "�֤Ϥ��פ����򤹤�ȡ������̤˥����Ȥβ��ݤ�����ǽ��<br /><br />�֤������פξ�硢����Ρ֥�������Ƥ˴ؤ���롼��פǴ�������ˡ�");
define("_MI_SSECTION_DATEFORMAT", '[��] ���դΥե����ޥå�:');
define("_MI_SSECTION_DATEFORMATDSC", "�⥸�塼��ǻ��Ѥ������եե����ޥåȤ����ꡣ<br />��: 'd-M-Y H:i' �ϡ�'30-Mar-2004 22:35' ��ɽ�����ޤ�'Y-m-d H:i' �ϡ�'2004-03-30 22:35'");
define("_MI_SSECTION_DEMO_SITE", "SmartFactory �ǥ⥵����");
define("_MI_SSECTION_DEVELOPER_CONTRIBUTOR", "��ȯ�ٱ��");
define("_MI_SSECTION_DEVELOPER_CREDITS", "���쥸�å�");
define("_MI_SSECTION_DEVELOPER_EMAIL", "Ϣ����");
define("_MI_SSECTION_DEVELOPER_LEAD", "���׳�ȯ��");
define("_MI_SSECTION_DEVELOPER_WEBSITE", "�����֥�����");
define("_MI_SSECTION_DISCOM", "[����ƥ��] �����ȿ���ɽ��");
define("_MI_SSECTION_DISCOMDSC", "�֤Ϥ��פξ�硢�����Υ����ȿ���ɽ�����ޤ�");
define("_MI_SSECTION_DISDATECOL", "[����ƥ��] �Ǻ�����ɽ��");
define("_MI_SSECTION_DISDATECOLDSC", "�֥����ȥ�ɽ���פΤȤ��֤Ϥ��פξ��ȥåץڡ����ȥ��ƥ���ڡ����˷Ǻ�����ɽ�����ޤ�");

// v2.1
//define("_MI_SSECTION_DISPLAY_CAT_SUMMARY", "[����ƥ��] ���ƥ����������ɽ��");
//define("_MI_SSECTION_DISPLAY_CAT_SUMMARY_DSC", "�֤Ϥ��פξ�硢�⥸�塼����ǥ��ƥ����������ɽ�����ޤ�");

define("_MI_SSECTION_DISPLAY_CATEGORY", "���ƥ���̾��ɽ������");
define("_MI_SSECTION_DISPLAY_CATEGORY_DSC", "�֤Ϥ��פξ�硢�Ƶ����˥��ƥ���Υ�󥯤�ɽ�����ޤ�");
define("_MI_SSECTION_DISPLAYTYPE_FULL", "���٤Ƥ�ɽ��");
define("_MI_SSECTION_DISPLAYTYPE_LIST", "�ꥹ��ɽ��");
define("_MI_SSECTION_DISPLAYTYPE_SUMMARY", "�����ȥ�ɽ��");
define("_MI_SSECTION_DISSBCATDSC", "[����ƥ��] ���֥��ƥ��������ʸ��ɽ��");
define("_MI_SSECTION_DISSBCATDSCDSC", "�֤Ϥ��פξ�硢���ƥ�����˥��֥��ƥ��������ʸ��ɽ�����ޤ�");
define("_MI_SSECTION_DISTYPE", "[��] ������ɽ������");
define("_MI_SSECTION_DISTYPEDSC", "�֥����ȥ�ɽ���� �ξ�硢���򤷤����ƥ�����γƵ����Υ����ȥ롦���ա��ҥåȿ���ɽ���� �֤��٤Ƥ�ɽ���פξ�硢���򤵤줿���ƥ�����γƵ����Τ��٤Ƥ�ɽ�����ޤ�");
define("_MI_SSECTION_FILEUPLOADDIR", "ź�եե�����Υ��åץ��ɥǥ��쥯�ȥ�:");
define("_MI_SSECTION_FILEUPLOADDIRDSC", "ź�եե��������¸����ǥ��쥯�ȥ����ꤷ�ޤ����Ǹ�Υ���å����ɬ�פ���ޤ���");
define("_MI_SSECTION_FOOTERPRINT","[����] �����ڡ����Υեå���");
define("_MI_SSECTION_FOOTERPRINTDSC","���������������Υեå���");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY", "�������ƥ���");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_CAP", "�������ƥ��꤬�������줿�������Τ���");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_DSC", "�������ƥ��꤬�������줿�������Τ���");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} ��ư���� : ���������ƥ��꤬��������ޤ���");
define("_MI_SSECTION_GLOBAL_ITEM_NOTIFY", "�⥸�塼������");
define("_MI_SSECTION_GLOBAL_ITEM_NOTIFY_DSC", "Smartsection �⥸�塼�����Τˤ��������Υ��ץ����");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY", "���������Ǻ�");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_CAP", "�����������Ǻܤ��줿�������Τ���");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_DSC", "�����������Ǻܤ��줿�������Τ���");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} ��ư���� : ���������� ���Ǻܤ���ޤ���");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY", "�����������");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_CAP", "������������Ƥ���ǧ�ڤ��ԤäƤ���������Τ���");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_DSC", "������������Ƥ���ǧ�ڤ��ԤäƤ���������Τ���");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} ��ư���� : ���������� ����Ƥ���ޤ���");
define("_MI_SSECTION_HEADERPRINT","[����] �����ڡ����Υإå���");
define("_MI_SSECTION_HEADERPRINTDSC","���������������Υإå���");
define("_MI_SSECTION_HELP_CUSTOM", "��������ѥ�");
define("_MI_SSECTION_HELP_INSIDE", "�⥸�塼����");
define("_MI_SSECTION_HELP_PATH_CUSTOM", "���ޡ��ȥ��������Υإ�ץե�����Υ�������ѥ�");
define("_MI_SSECTION_HELP_PATH_CUSTOM_DSC", "'��������ѥ�' �Υ��ץ��������򤷤�����'SmartSection�Υإ�ץե�����'������URL����ꤷ�ޤ����� : http://www.yoursite.com/doc");
define("_MI_SSECTION_HELP_PATH_SELECT", "SmartSection�Υإ�ץե�����Υѥ�");
define("_MI_SSECTION_HELP_PATH_SELECT_DSC", "SmartSection �إ�ץե�����ξ�����ꤹ�뤳�Ȥ�����ޤ���'�⥸�塼����'�����򤹤���ϡ� 'SmartSection' ����إ�ץѥå��������������ɤ��� 'modules/smartsection/doc/'�˥��åץ��ɤ��Ʋ�������xoops.org �����򤷤����ϡ�ľ�ܥ⥸�塼��Υ����ȤΥإ�ץե�����˥����������뤳�Ȥ�����ޤ����ޤ���'��������ѥ�' �����򤷤����ϡ����Υ��ץ���������'SmartSection �Υإ�ץե�����'�Υѥ��򵭽Ҥ��Ƥ���������");
define("_MI_SSECTION_HITSCOL", "[����ƥ��] ���������ɽ��");
define("_MI_SSECTION_HITSCOLDSC", "�֥����ȥ�ɽ���פΤȤ��֤Ϥ��פξ��ȥåץڡ����ȥ��ƥ���ڡ����˱��������ɽ�����ޤ�");
define("_MI_SSECTION_HLCOLOR", "[��] ������ɤ�ϥ��饤�Ȥ��뿧");
define("_MI_SSECTION_HLCOLORDSC", "�����������˥�����ɤ�ϥ��饤�Ȥ��뿧�����");
define("_MI_SSECTION_IMAGENAV", "[��] �ڡ�����ư�˲��������:");
define("_MI_SSECTION_IMAGENAVDSC", "�֤Ϥ��פξ�硢�ڡ�����ư�������ɽ�����������Ǥʤ����ϥƥ����Ȥˤ��ɽ���򤷤ޤ�");
define("_MI_SSECTION_INDEXFOOTER","[����ƥ��] �եå���");
define("_MI_SSECTION_INDEXFOOTER_SEL","����ǥå����Υեå���");
define("_MI_SSECTION_INDEXFOOTERDSC","����ǥå����ڡ����β�����ɽ�������å�����");
define("_MI_SSECTION_INDEXMSG", "[����ƥ��] ����ǥå����ڡ����Υ�å�����:");
define("_MI_SSECTION_INDEXMSGDEF", ""); 
define("_MI_SSECTION_INDEXMSGDSC", "�⥸�塼��Υ���ǥå����ڡ�����ɽ�������å�������");
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY", "������ǧ");
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY_CAP", "��������ǧ���줿�������Τ���");
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY_DSC", "��������ǧ���줿�������Τ���");
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} ��ư���� : ���� ����ǧ����ޤ���"); 
define("_MI_SSECTION_ITEM_NOTIFY", "����");
define("_MI_SSECTION_ITEM_NOTIFY_DSC", "�����ˤ��������Υ��ץ����");
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY", "�����Ѳ�");
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY_CAP", "�������Ѳ����줿�������Τ���");
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY_DSC", "�������Ѳ����줿�������Τ���");
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} ��ư���� : ���� ���Ѳ�����ޤ���"); 
define("_MI_SSECTION_ITEM_TYPE", "����̾");
define("_MI_SSECTION_ITEM_TYPEDSC", "���Υ⥸�塼������Ѥ������̾�����Ƥ����򤷤Ƥ���������");
define("_MI_SSECTION_ITEMFOOTER", "[����ƥ��] �����Υեå���");
define("_MI_SSECTION_ITEMFOOTER_SEL", "�����Υեå���");
define("_MI_SSECTION_ITEMFOOTERDSC","�Ƶ����β�����ɽ�������å�����");
define("_MI_SSECTION_ITEMSMENU", "��˥塼�֥�å�");
//bd tree block hack
define("_MI_SSECTION_ITEMSTREE", "�ĥ꡼���֥�å�");
//--/bd
define("_MI_SSECTION_ITEMSNEW", "�ǿ��ε����ꥹ��");
define("_MI_SSECTION_ITEMSPOT", "���ܤε���");
define("_MI_SSECTION_ITEMSRANDOM_ITEM", "������ɽ��");
define("_MI_SSECTION_LASTITEM", "[����ƥ��] �ǿ��ε������ƥ�����ˤ�ɽ��");
define("_MI_SSECTION_LASTITEMDSC", "�֤Ϥ��פξ�硢�ȥåץڡ����ȥ��ƥ���ڡ����Υ��ƥ�����˺ǿ��ε�����ɽ�����ޤ�");
define("_MI_SSECTION_LASTITEMS", "[����ƥ��] �ǿ��ε������ƥ�����ˤ�ɽ��");
define("_MI_SSECTION_LASTITEMSDSC", "�֤Ϥ��פξ�硢�ȥåץڡ����˺ǿ��ε����ΰ�����ɽ�����ޤ�");
define("_MI_SSECTION_LASTITSIZE", "[��] �ǿ��ε����Υ����� :");
define("_MI_SSECTION_LASTITSIZEDSC", "�ǿ������ΰ�����ɽ�����륿���ȥ�κ��祵���������ꤹ�롣");
define("_MI_SSECTION_LINKPATH", "[��] ���ƥ�����֤Υ��:");
define("_MI_SSECTION_LINKPATHDSC", "���Υ��ץ����ϡ����ƥ���䵭����ɽ�����ξ�����ɽ�����륫�ƥ���ꥹ�ȤΥ�󥯤򤹤뤫�ɤ�������ꤷ�ޤ���");
define("_MI_SSECTION_MAX_HEIGHT", "[����] ���åץ��ɤ�������κ���⤵");
define("_MI_SSECTION_MAX_HEIGHTDSC", "���åץ��ɤ���ǽ�ʲ����ե�����κ���⤵");
define("_MI_SSECTION_MAX_SIZE", "[����] ���åץ��ɤ�������ե�����Υ�����");
define("_MI_SSECTION_MAX_SIZEDSC", "���åץ��ɲ�ǽ�ʲ����ե�����Υ�����(�Х���)");
define("_MI_SSECTION_MAX_WIDTH", "[����] ���åץ��ɤ�������κ�����");
define("_MI_SSECTION_MAX_WIDTHDSC", "���åץ��ɤ���ǽ�ʲ����ե�����κ�����");
define("_MI_SSECTION_MD_DESC", "XOOPS�����γ�ĥ���������������������ƥ�");
define("_MI_SSECTION_MD_NAME", "SmartSection");
define("_MI_SSECTION_MODULE_BUG", "�⥸�塼��ΥХ���ݡ���");
define("_MI_SSECTION_MODULE_DEMO", "�ǥ⥵����");
define("_MI_SSECTION_MODULE_DISCLAIMER", "���ջ���");
define("_MI_SSECTION_MODULE_FEATURE", "�⥸�塼��ο���ǽ���");
define("_MI_SSECTION_MODULE_INFO", "�⥸�塼��ˤĤ���");
define("_MI_SSECTION_MODULE_RELEASE_DATE", "������");
define("_MI_SSECTION_MODULE_STATUS", "�С������");
define("_MI_SSECTION_MODULE_SUBMIT_BUG", "�Х�����𤹤�");
define("_MI_SSECTION_MODULE_SUBMIT_FEATURE", "��������ǽ��ꥯ�����Ȥ���");
define("_MI_SSECTION_MODULE_SUPPORT", "�������ݡ��ȥ�����");
define("_MI_SSECTION_NO_FOOTERS","�եå����ʤ�");
define("_MI_SSECTION_ORDERBY", "[��] �¤ӽ�");
define("_MI_SSECTION_ORDERBY_DATE", "���ս�");
define("_MI_SSECTION_ORDERBY_TITLE", "�����ȥ��");
define("_MI_SSECTION_ORDERBY_WEIGHT", "�������Ƚ�");
define("_MI_SSECTION_ORDERBYDSC", "�������¤٤���֤���ꤷ�ޤ���");
define("_MI_SSECTION_OTHER_ITEMS_TYPE_ALL", "���Ƥε���");
define("_MI_SSECTION_OTHER_ITEMS_TYPE_NONE", "�ʤ�");
define("_MI_SSECTION_OTHER_ITEMS_TYPE_PREVIOUS_NEXT", "�ڡ�����ư");
define("_MI_SSECTION_OTHERITEMS", "[��] ¾�ε�����ɽ����ˡ");
define("_MI_SSECTION_OTHERITEMSDSC", "�����ڡ������Ʊ�����ƥ���ε�����ɤΤ褦��ɽ�����뤫�����򤷤ޤ���");
define("_MI_SSECTION_PERPAGE", "[��] ���ڡ�����ɽ�����뵭���� (��������):");
define("_MI_SSECTION_PERPAGEDSC", "�������̤ǡ����ڡ�����ɽ�����뵭��������ꤹ�롣");
define("_MI_SSECTION_PERPAGEINDEX", "[��] ���ڡ�����ɽ�����뵭���� (ɽ������):");
define("_MI_SSECTION_PERPAGEINDEXDSC", "ɽ�����̤ǡ����ڡ�����ɽ�����뵭��������ꤹ�롣");
define("_MI_SSECTION_PRINTLOGOURL","[����] ��������URL");
define("_MI_SSECTION_PRINTLOGOURLDSC","��������ڡ����˻Ȥ������᡼����URL");
define("_MI_SSECTION_RECENTITEMS", "�ǿ��ε��� (����)");
define("_MI_SSECTION_SHOW_RSS","[����ƥ��] RSS�ե�����ɤΥ�󥯤�ɽ������");
define("_MI_SSECTION_SHOW_RSSDSC","");
define("_MI_SSECTION_SHOW_SUBCATS", "[����ƥ��] ����ǥå����ڡ����˥��֥��ƥ����ɽ��");
define("_MI_SSECTION_SHOW_SUBCATS_ALL", "���ƤΥ��֥��ƥ����ɽ������");
define("_MI_SSECTION_SHOW_SUBCATS_DSC", "�֤Ϥ��פξ�硢����ǥå����ڡ����˥��ƥ���ꥹ�Ȥ���˥��֥��ƥ����ɽ�����ޤ�");
define("_MI_SSECTION_SHOW_SUBCATS_NO", "���֥��ƥ����ɽ�����ʤ�");
define("_MI_SSECTION_SHOW_SUBCATS_NOTEMPTY", "�����Τ��륫�ƥ����ɽ������");
define("_MI_SSECTION_SUB_SMNAME1", "��������Ƥ���");
define("_MI_SSECTION_SUB_SMNAME2", "�͵��ε���");
define("_MI_SSECTION_SUBMITMSG", "[����ƥ��] ��ƥڡ����Υ�å�����:");
define("_MI_SSECTION_SUBMITMSGDEF", "");
define("_MI_SSECTION_SUBMITMSGDSC", "��������Ƥ���ڡ�����ɽ�������å�������");
define("_MI_SSECTION_TITLE_SIZE", "[��] �����ȥ��Ĺ��:");
define("_MI_SSECTION_TITLE_SIZEDSC", "ɽ�����륿���ȥ��ʸ���������ꡣ");
define("_MI_SSECTION_UPLOAD", "[����] �桼���Υե����롦���åץ���");
define("_MI_SSECTION_UPLOADDSC", "���ƤΥ桼������ź�եե�����Υ��åץ��ɤ���Ĥ���");
define("_MI_SSECTION_USEREALNAME", "[��] �桼������̾����Ѥ���");
define("_MI_SSECTION_USEREALNAMEDSC", "��ƼԤ˥桼��������̾��Ȥ����桼������̾�����ꤵ��Ƥ����硢�桼������̾����ѡ�");
define("_MI_SSECTION_VERSION_HISTORY", "��������");
define("_MI_SSECTION_WARNING_BETA", "���ΥС������������ʥ�꡼���ǤϤʤ�����ȯ��Υ١����ʻ��ѡ��ǤǤ������Ѥ�������ݾڤϤ���ޤ���<br />���Υ�꡼����<b>�ƥ��Ȥΰ�̣</b>�ǹԤäƤ��ꡢ�����˲�ư��Υ����Ȥ�Ƴ�����뤳�Ȥ�<b>�侩���ޤ���</b>��");
define("_MI_SSECTION_WARNING_FINAL", "���ΥС������������ʥ�꡼���ǤǤ��������˲�ư��Υ����Ȥ�Ƴ�����������ǽ�Ǥ���<br />���Υ⥸�塼�����Ѥ���ˤ����ꡢ���ѼԤ���Ǥ��Ƴ������ԤäƤ����������ޤ����Զ�礬��������硢�����ʤ�����Ԥ���Ǥ���餤���ͤޤ���");
define("_MI_SSECTION_WARNING_RC", "���ΥС������������ʥ�꡼���ǤϤʤ���RC�������ʥ�꡼���θ�����ǤǤ������Ѥ�������ݾڤϤ���ޤ��� <br />���ߤޤ���ȯ��ʰ١����ѼԤ���Ǥ��Ƴ������ԤäƤ����������Զ�礬��������硢�����ʤ�����Ԥ���Ǥ���餤���ͤޤ���.");
define("_MI_SSECTION_WELCOME", "[����ƥ��] �����ȥ�ȥ�å�������ɽ��");
define("_MI_SSECTION_WELCOMEDSC", "�֤Ϥ��פξ�硢�⥸�塼��Υ���ǥå����ڡ����˲������ܤ����ꤷ����å�������ɽ�����ޤ����֤������פξ�硢ɽ�����ޤ���");
define("_MI_SSECTION_WHOWHEN", "[����ƥ��] ��ƼԤȷǺ�����ɽ��");
define("_MI_SSECTION_WHOWHENDSC", "�֤Ϥ��פξ�硢�Ƶ�������ƼԤȷǺ�����ɽ�����ޤ�");
define("_MI_SSECTION_WYSIWYG", "[��] ���ǥ����μ���");
define("_MI_SSECTION_WYSIWYGDSC", "���Ѥ��륨�ǥ������������ޤ���XoopsEditor(ɸ��)�ʳ��Υ��ǥ�����Ȥ����ϡ����󥹥ȡ��뤬ɬ�פǤ���");

// v2.1
// hacked xoopsnote
//define("_MI_SSECTION_DISPCATIMG", "���ƥ������");
//define("_MI_SSECTION_DISPCATIMGDSC", "���ƥ���β�����ɽ������");

// === v2.1 ===
define("_MI_SSECTION_DCS", "[����ƥ��] ���ƥ���������ɽ��");
define("_MI_SSECTION_DCS_DSC", "�֤������פξ�硢���֥��ƥ��������ʤ����ƥ���Υڡ����ˤ����ơ����ƥ���������ɽ�����ʤ���");
define("_MI_SSECTION_DISPLAYTYPE_WFSECTION", "WFSection ����");
define("_MI_SSECTION_CATLIST_IMG_W", "[��] ���ƥ�������β����β���"); 
define("_MI_SSECTION_CATLIST_IMG_WDSC", "���ƥ�������ˤ����ơ����ƥ�������β�������ꤹ��"); 
define("_MI_SSECTION_CATMAINIMG_W", "[��] ���ƥ���Υᥤ�󡦥ڡ����β����β���"); 
define("_MI_SSECTION_CATMAINIMG_WDSC", "���ƥ���Υᥤ�󡦥ڡ����ˤ����ơ����ƥ�������β�������ꤹ�롣"); 

// === v2.12 ===
define("_MI_SSECTION_PV_TEXT", "��ʬŪ�ʥ����������¤Υ�å�����");
define("_MI_SSECTION_PV_TEXTDSC", "��ʬŪ�ʥ����������¤����뵭���ؤΥ�å�����");
define("_MI_SSECTION_PV_TEXT_DEF", "���Ƥε������ɤि��ˤϡ��桼����Ͽ���Ƥ�������");

define("_MI_SSECTION_SEOMODNAME", "�⥸�塼���URL�񴹤�");
define("_MI_SSECTION_SEOMODNAMEDSC", "�⥸�塼����Ф���URL�񴹤���ͭ���ˤʤäƤ���ȡ��⥸�塼���̾�������ѤǤ��롣�� : http://yoursite.com/smartection/...");

define("_MI_SSECTION_ARTCOUNT", "�����ο���ɽ������");
define("_MI_SSECTION_ARTCOUNTDSC", "'�Ϥ�' �����򤹤�ȡ����ƥ�������ˤƳƥ��ƥ���˴ޤޤ�뵭���ο���ɽ�����롣�ʤ������֥��ƥ���ϴޤޤʤ���");
define("_MI_SSECTION_LATESTFILES", "�Ƕ�Υ��åץ��ɡ��ե�����");

// === v2.13 ===
define("_MI_SSECTION_PATHSEARCH", "[��] ������̤ˤƥ��ƥ���Υѥ���ɽ������");
define("_MI_SSECTION_PATHSEARCHDSC", "");

// === v2.14 ===
define("_MI_SSECTION_SHOW_SUBCATS_NOMAIN", "�ᥤ��ڡ����˥��֥��ƥ����ɽ������");
define("_MI_SSECTION_RATING_ENABLED", "ɾ�������ƥ��ͭ���ˤ���");
define("_MI_SSECTION_RATING_ENABLEDDSC", "���ε�ǽ�� SmartObject Framework ��ɬ�פȤ��ޤ�");
define("_MI_SSECTION_DISPBREAD", "�ѥ󤯤���ɽ������");
define("_MI_SSECTION_DISPBREADDSC", "�ѥ󤯤��ϥ��ƥ��깽¤�ˤ�����ڡ����ΰ��֤�ɽ�����롣");
define('_MI_SSECTION_DATE_TO_DATE', '���֤���ꤷ������')

?>