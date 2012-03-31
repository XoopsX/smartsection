<?php
// $Id: modinfo.php,v 1.1 2012/03/31 11:33:50 ohwada Exp $

// 2008-10-01 K.OHWADA
// v2.14 に対応した

// 2007-04-10 K.OHWADA
// v2.13 に対応した
// http://xoopscube.jp/modules/xhnewbb/viewtopic.php?topic_id=4379

// 2006-12-17 K.OHWADA
// v2.12 に対応した

// 2006-05-28 K.OHWADA
// v2.1 に対応した

// 2006-02-01 K.OHWADA <http://linux.ohwada.jp/>
// v1.05 に対応した

//=========================================================
// SmartSection Module
// 2005-11-04
// http://xoops.sourceforge.jp/wiki/xoops2/index.php?cmd=read&page=DEV%2FSmartSection%2F%B8%C0%B8%EC%A5%D5%A5%A1%A5%A4%A5%EB
// UTF-8
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

define("_MI_SSECTION_ADMENU1", "インデックス");
define("_MI_SSECTION_ADMENU2", "カテゴリ");
define("_MI_SSECTION_ADMENU3", "記事");
define("_MI_SSECTION_ADMENU4", "アクセス権管理");
define("_MI_SSECTION_ADMENU5", "ブロック・グループ管理");
define("_MI_SSECTION_ADMENU6", "Mimeタイプ");
define("_MI_SSECTION_ADMENU7", "モジュールへ");
define("_MI_SSECTION_ADMINHITS", "[コンテンツ]管理者をカウント");
define("_MI_SSECTION_ADMINHITSDSC", "管理者も閲覧のカウントに入れる");
define("_MI_SSECTION_ALLOWSUBMIT", "[権限] ユーザーの投稿を許可:");
define("_MI_SSECTION_ALLOWSUBMITDSC", "全てのユーザーが投稿を許可する");
define("_MI_SSECTION_ANONPOST", "[権限] ゲスト投稿を許可");
define("_MI_SSECTION_ANONPOSTDSC", "ゲストに記事の作成を許可する");
define("_MI_SSECTION_AUTHOR_INFO", "開発者の情報");
define("_MI_SSECTION_AUTHOR_WORD", "作者からのメッセージ");
define("_MI_SSECTION_AUTOAPP", "[権限] 記事を自動的に承認する:");
define("_MI_SSECTION_AUTOAPPDSC", "管理者の確認なく自動的に投稿された記事を承認する。");
define("_MI_SSECTION_BCRUMB","[書式] リストにモジュール名を表示する");
define("_MI_SSECTION_BCRUMBDSC","「はい」の場合、位置を示すリストに\"Smartsection > カテゴリ名 > 記事名\"と表示します。<br />そうでない場合は、\"カテゴリ名 > 記事名\" と表示します。");
define("_MI_SSECTION_BOTH_FOOTERS",'両方のフッター');
define("_MI_SSECTION_BY", "by");
define("_MI_SSECTION_CATEGORY_ITEM_NOTIFY", "カテゴリ");
define("_MI_SSECTION_CATEGORY_ITEM_NOTIFY_DSC", "現在のカテゴリに適用される通知オプション");
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY", "新規記事の掲載");
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_CAP", "このカテゴリに新規記事が掲載された時に通知する");
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_DSC", "このカテゴリに新規記事が掲載された時に通知する");
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} 自動通知 : 新しい記事 がカテゴリに掲載されました");
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY", "'新規記事投稿");
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_CAP", "このカテゴリに新規記事が投稿された時に通知する");   
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_DSC", "このカテゴリに新規記事が投稿された時に通知する");
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} 自動通知 : 新しい記事 がカテゴリに投稿されました");
define("_MI_SSECTION_CATPERPAGE", "[書式] １ページに表示するカテゴリ数 (表示画面):");
define("_MI_SSECTION_CATPERPAGEDSC", "表示画面で１ページに表示するカテゴリ数を指定");
define("_MI_SSECTION_CLONE", "[権限] 記事の複製を許可しますか");
define("_MI_SSECTION_CLONEDSC", "「はい」を選択した場合、記事の複製を行ったページの作成が可能になります。");
define("_MI_SSECTION_COLLHEAD", "[書式] 折りたたみバーを表示");
define("_MI_SSECTION_COLLHEADDSC", "「はい」の場合、カテゴリに折りたたみバーを表示し、「いいえ」の場合は折りたたみバーを表示しません。");
define("_MI_SSECTION_COMMENTS", "[権限]記事単位でコメントを管理");
define("_MI_SSECTION_COMMENTSDSC", "「はい」を選択すると、記事別にコメントの可否を指定可能。<br /><br />「いいえ」の場合、下欄の「コメント投稿に関するルール」で管理する）。");
define("_MI_SSECTION_DATEFORMAT", '[書式] 日付のフォーマット:');
define("_MI_SSECTION_DATEFORMATDSC", "モジュールで使用する日付フォーマットを設定。<br />例: 'd-M-Y H:i' は、'30-Mar-2004 22:35' と表示します'Y-m-d H:i' は、'2004-03-30 22:35'");
define("_MI_SSECTION_DEMO_SITE", "SmartFactory デモサイト");
define("_MI_SSECTION_DEVELOPER_CONTRIBUTOR", "開発支援者");
define("_MI_SSECTION_DEVELOPER_CREDITS", "クレジット");
define("_MI_SSECTION_DEVELOPER_EMAIL", "連絡先");
define("_MI_SSECTION_DEVELOPER_LEAD", "主要開発者");
define("_MI_SSECTION_DEVELOPER_WEBSITE", "ウェブサイト");
define("_MI_SSECTION_DISCOM", "[コンテンツ] コメント数を表示");
define("_MI_SSECTION_DISCOMDSC", "「はい」の場合、記事のコメント数を表示します");
define("_MI_SSECTION_DISDATECOL", "[コンテンツ] 掲載日を表示");
define("_MI_SSECTION_DISDATECOLDSC", "「タイトル表示」のとき「はい」の場合トップページとカテゴリページに掲載日を表示します");

// v2.1
//define("_MI_SSECTION_DISPLAY_CAT_SUMMARY", "[コンテンツ] カテゴリの説明を表示");
//define("_MI_SSECTION_DISPLAY_CAT_SUMMARY_DSC", "「はい」の場合、モジュール内でカテゴリの説明を表示します");

define("_MI_SSECTION_DISPLAY_CATEGORY", "カテゴリ名を表示する");
define("_MI_SSECTION_DISPLAY_CATEGORY_DSC", "「はい」の場合、各記事にカテゴリのリンクを表示します");
define("_MI_SSECTION_DISPLAYTYPE_FULL", "すべてを表示");
define("_MI_SSECTION_DISPLAYTYPE_LIST", "リスト表示");
define("_MI_SSECTION_DISPLAYTYPE_SUMMARY", "タイトル表示");
define("_MI_SSECTION_DISSBCATDSC", "[コンテンツ] サブカテゴリの説明文を表示");
define("_MI_SSECTION_DISSBCATDSCDSC", "「はい」の場合、カテゴリ欄にサブカテゴリの説明文を表示します");
define("_MI_SSECTION_DISTYPE", "[書式] 記事の表示形式");
define("_MI_SSECTION_DISTYPEDSC", "「タイトル表示」 の場合、選択したカテゴリ内の各記事のタイトル・日付・ヒット数を表示。 「すべてを表示」の場合、選択されたカテゴリ内の各記事のすべてを表示します");
define("_MI_SSECTION_FILEUPLOADDIR", "添付ファイルのアップロードディレクトリ:");
define("_MI_SSECTION_FILEUPLOADDIRDSC", "添付ファイルを保存するディレクトリを指定します。最後のスラッシュは必要ありません。");
define("_MI_SSECTION_FOOTERPRINT","[印刷] 印刷ページのフッター");
define("_MI_SSECTION_FOOTERPRINTDSC","記事を印刷する時のフッター");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY", "新規カテゴリ");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_CAP", "新規カテゴリが作成された時に通知する");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_DSC", "新規カテゴリが作成された時に通知する");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} 自動通知 : 新しいカテゴリが作成されました");
define("_MI_SSECTION_GLOBAL_ITEM_NOTIFY", "モジュール全体");
define("_MI_SSECTION_GLOBAL_ITEM_NOTIFY_DSC", "Smartsection モジュール全体における通知オプション");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY", "新規記事掲載");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_CAP", "新規記事が掲載された時に通知する");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_DSC", "新規記事が掲載された時に通知する");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} 自動通知 : 新しい記事 が掲載されました");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY", "新規記事投稿");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_CAP", "新規記事が投稿され認証を待っている時に通知する");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_DSC", "新規記事が投稿され認証を待っている時に通知する");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} 自動通知 : 新しい記事 が投稿されました");
define("_MI_SSECTION_HEADERPRINT","[印刷] 印刷ページのヘッダー");
define("_MI_SSECTION_HEADERPRINTDSC","記事を印刷する時のヘッダー");
define("_MI_SSECTION_HELP_CUSTOM", "カスタムパス");
define("_MI_SSECTION_HELP_INSIDE", "モジュール内");
define("_MI_SSECTION_HELP_PATH_CUSTOM", "スマートセクションのヘルプファイルのカスタムパス");
define("_MI_SSECTION_HELP_PATH_CUSTOM_DSC", "'カスタムパス' のオプションを選択した時は'SmartSectionのヘルプファイル'があるURLを指定します。例 : http://www.yoursite.com/doc");
define("_MI_SSECTION_HELP_PATH_SELECT", "SmartSectionのヘルプファイルのパス");
define("_MI_SSECTION_HELP_PATH_SELECT_DSC", "SmartSection ヘルプファイルの場所を指定することが出来ます。'モジュール内'を選択する場合は、 'SmartSection' からへルプパッケージをダウンロードして 'modules/smartsection/doc/'にアップロードして下さい。xoops.org を選択した時は、直接モジュールのサイトのヘルプファイルにアクセスすることが出来ます。また、'カスタムパス' を選択した場合は、次のオプション設定に'SmartSection のヘルプファイル'のパスを記述してください。");
define("_MI_SSECTION_HITSCOL", "[コンテンツ] 閲覧回数を表示");
define("_MI_SSECTION_HITSCOLDSC", "「タイトル表示」のとき「はい」の場合トップページとカテゴリページに閲覧回数を表示します");
define("_MI_SSECTION_HLCOLOR", "[書式] キーワードをハイライトする色");
define("_MI_SSECTION_HLCOLORDSC", "検索した時にキーワードをハイライトする色を指定");
define("_MI_SSECTION_IMAGENAV", "[書式] ページ移動に画像を使用:");
define("_MI_SSECTION_IMAGENAVDSC", "「はい」の場合、ページ移動を画像で表示し、そうでない場合はテキストによる表示をします");
define("_MI_SSECTION_INDEXFOOTER","[コンテンツ] フッター");
define("_MI_SSECTION_INDEXFOOTER_SEL","インデックスのフッター");
define("_MI_SSECTION_INDEXFOOTERDSC","インデックスページの下部に表示するメッセージ");
define("_MI_SSECTION_INDEXMSG", "[コンテンツ] インデックスページのメッセージ:");
define("_MI_SSECTION_INDEXMSGDEF", ""); 
define("_MI_SSECTION_INDEXMSGDSC", "モジュールのインデックスページに表示するメッセージ。");
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY", "記事承認");
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY_CAP", "記事が承認された時に通知する");
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY_DSC", "記事が承認された時に通知する");
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} 自動通知 : 記事 が承認されました"); 
define("_MI_SSECTION_ITEM_NOTIFY", "記事");
define("_MI_SSECTION_ITEM_NOTIFY_DSC", "記事における通知オプション");
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY", "記事却下");
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY_CAP", "記事が却下された時に通知する");
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY_DSC", "記事が却下された時に通知する");
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} 自動通知 : 記事 が却下されました"); 
define("_MI_SSECTION_ITEM_TYPE", "項目名");
define("_MI_SSECTION_ITEM_TYPEDSC", "このモジュールで利用する項目名の内容を選択してください。");
define("_MI_SSECTION_ITEMFOOTER", "[コンテンツ] 記事のフッター");
define("_MI_SSECTION_ITEMFOOTER_SEL", "記事のフッター");
define("_MI_SSECTION_ITEMFOOTERDSC","各記事の下部に表示するメッセージ");
define("_MI_SSECTION_ITEMSMENU", "メニューブロック");
//bd tree block hack
define("_MI_SSECTION_ITEMSTREE", "ツリー・ブロック");
//--/bd
define("_MI_SSECTION_ITEMSNEW", "最新の記事リスト");
define("_MI_SSECTION_ITEMSPOT", "注目の記事");
define("_MI_SSECTION_ITEMSRANDOM_ITEM", "ランダム表示");
define("_MI_SSECTION_LASTITEM", "[コンテンツ] 最新の記事カテゴリ欄にを表示");
define("_MI_SSECTION_LASTITEMDSC", "「はい」の場合、トップページとカテゴリページのカテゴリ欄に最新の記事を表示します");
define("_MI_SSECTION_LASTITEMS", "[コンテンツ] 最新の記事カテゴリ欄にを表示");
define("_MI_SSECTION_LASTITEMSDSC", "「はい」の場合、トップページに最新の記事の一覧を表示します");
define("_MI_SSECTION_LASTITSIZE", "[書式] 最新の記事のサイズ :");
define("_MI_SSECTION_LASTITSIZEDSC", "最新記事の一覧で表示するタイトルの最大サイズを設定する。");
define("_MI_SSECTION_LINKPATH", "[書式] カテゴリ位置のリンク:");
define("_MI_SSECTION_LINKPATHDSC", "このオプションは、カテゴリや記事の表示時の上部に表示するカテゴリリストのリンクをするかどうかを指定します。");
define("_MI_SSECTION_MAX_HEIGHT", "[権限] アップロードする画像の最大高さ");
define("_MI_SSECTION_MAX_HEIGHTDSC", "アップロードが可能な画像ファイルの最大高さ");
define("_MI_SSECTION_MAX_SIZE", "[権限] アップロードする画像ファイルのサイズ");
define("_MI_SSECTION_MAX_SIZEDSC", "アップロード可能な画像ファイルのサイズ(バイト)");
define("_MI_SSECTION_MAX_WIDTH", "[権限] アップロードする画像の最大幅");
define("_MI_SSECTION_MAX_WIDTHDSC", "アップロードが可能な画像ファイルの最大幅");
define("_MI_SSECTION_MD_DESC", "XOOPS向けの拡張したセクション管理システム");
define("_MI_SSECTION_MD_NAME", "SmartSection");
define("_MI_SSECTION_MODULE_BUG", "モジュールのバグレポート");
define("_MI_SSECTION_MODULE_DEMO", "デモサイト");
define("_MI_SSECTION_MODULE_DISCLAIMER", "免責事項");
define("_MI_SSECTION_MODULE_FEATURE", "モジュールの新機能提案");
define("_MI_SSECTION_MODULE_INFO", "モジュールについて");
define("_MI_SSECTION_MODULE_RELEASE_DATE", "公開日");
define("_MI_SSECTION_MODULE_STATUS", "バージョン");
define("_MI_SSECTION_MODULE_SUBMIT_BUG", "バグを報告する");
define("_MI_SSECTION_MODULE_SUBMIT_FEATURE", "新しい機能をリクエストする");
define("_MI_SSECTION_MODULE_SUPPORT", "公式サポートサイト");
define("_MI_SSECTION_NO_FOOTERS","フッターなし");
define("_MI_SSECTION_ORDERBY", "[書式] 並び順");
define("_MI_SSECTION_ORDERBY_DATE", "日付順");
define("_MI_SSECTION_ORDERBY_TITLE", "タイトル順");
define("_MI_SSECTION_ORDERBY_WEIGHT", "ウェイト順");
define("_MI_SSECTION_ORDERBYDSC", "記事を並べる順番を指定します。");
define("_MI_SSECTION_OTHER_ITEMS_TYPE_ALL", "全ての記事");
define("_MI_SSECTION_OTHER_ITEMS_TYPE_NONE", "なし");
define("_MI_SSECTION_OTHER_ITEMS_TYPE_PREVIOUS_NEXT", "ページ移動");
define("_MI_SSECTION_OTHERITEMS", "[書式] 他の記事の表示方法");
define("_MI_SSECTION_OTHERITEMSDSC", "記事ページ内で同じカテゴリの記事をどのように表示するかを選択します。");
define("_MI_SSECTION_PERPAGE", "[書式] １ページに表示する記事数 (管理画面):");
define("_MI_SSECTION_PERPAGEDSC", "管理画面で、１ページに表示する記事数を指定する。");
define("_MI_SSECTION_PERPAGEINDEX", "[書式] １ページに表示する記事数 (表示画面):");
define("_MI_SSECTION_PERPAGEINDEXDSC", "表示画面で、１ページに表示する記事数を指定する。");
define("_MI_SSECTION_PRINTLOGOURL","[印刷] 印刷ロゴのURL");
define("_MI_SSECTION_PRINTLOGOURLDSC","印刷するページに使うロゴイメージのURL");
define("_MI_SSECTION_RECENTITEMS", "最新の記事 (概要)");
define("_MI_SSECTION_SHOW_RSS","[コンテンツ] RSSフィールドのリンクを表示する");
define("_MI_SSECTION_SHOW_RSSDSC","");
define("_MI_SSECTION_SHOW_SUBCATS", "[コンテンツ] インデックスページにサブカテゴリを表示");
define("_MI_SSECTION_SHOW_SUBCATS_ALL", "全てのサブカテゴリを表示する");
define("_MI_SSECTION_SHOW_SUBCATS_DSC", "「はい」の場合、インデックスページにカテゴリリストの中にサブカテゴリを表示します");
define("_MI_SSECTION_SHOW_SUBCATS_NO", "サブカテゴリを表示しない");
define("_MI_SSECTION_SHOW_SUBCATS_NOTEMPTY", "記事のあるカテゴリを表示する");
define("_MI_SSECTION_SUB_SMNAME1", "記事を投稿する");
define("_MI_SSECTION_SUB_SMNAME2", "人気の記事");
define("_MI_SSECTION_SUBMITMSG", "[コンテンツ] 投稿ページのメッセージ:");
define("_MI_SSECTION_SUBMITMSGDEF", "");
define("_MI_SSECTION_SUBMITMSGDSC", "記事の投稿するページに表示するメッセージ。");
define("_MI_SSECTION_TITLE_SIZE", "[書式] タイトルの長さ:");
define("_MI_SSECTION_TITLE_SIZEDSC", "表示するタイトルの文字数を設定。");
define("_MI_SSECTION_UPLOAD", "[権限] ユーザのファイル・アップロード");
define("_MI_SSECTION_UPLOADDSC", "全てのユーザーに添付ファイルのアップロードを許可する");
define("_MI_SSECTION_USEREALNAME", "[書式] ユーザの本名を使用する");
define("_MI_SSECTION_USEREALNAMEDSC", "投稿者にユーザーの本名を使う。ユーザの本名が設定されている場合、ユーザの本名を使用。");
define("_MI_SSECTION_VERSION_HISTORY", "更新履歴");
define("_MI_SSECTION_WARNING_BETA", "このバージョンは正式なリリースではなく、開発中のベータ（試用）版です。利用する場合の保証はありません。<br />このリリースは<b>テストの意味</b>で行っており、正式に稼動中のサイトに導入することを<b>推奨しません</b>。");
define("_MI_SSECTION_WARNING_FINAL", "このバージョンは正式なリリース版です。正式に稼動中のサイトに導入する事が可能です。<br />このモジュールを使用するにあたり、使用者の責任で導入等を行ってください。また、不具合が生じた場合、いかなる場合も作者は責任を負いかねます。");
define("_MI_SSECTION_WARNING_RC", "このバージョンは正式なリリースではなく、RC（正式なリリースの候補）版です。利用する場合の保証はありません。 <br />現在まだ開発中な為、使用者の責任で導入等を行ってください。不具合が生じた場合、いかなる場合も作者は責任を負いかねます。.");
define("_MI_SSECTION_WELCOME", "[コンテンツ] タイトルとメッセージの表示");
define("_MI_SSECTION_WELCOMEDSC", "「はい」の場合、モジュールのインデックスページに下記項目で設定したメッセージを表示します。「いいえ」の場合、表示しません。");
define("_MI_SSECTION_WHOWHEN", "[コンテンツ] 投稿者と掲載日を表示");
define("_MI_SSECTION_WHOWHENDSC", "「はい」の場合、各記事に投稿者と掲載日を表示します");
define("_MI_SSECTION_WYSIWYG", "[書式] エディタの種類");
define("_MI_SSECTION_WYSIWYGDSC", "使用するエディタを選択出来ます。XoopsEditor(標準)以外のエディタを使う場合は、インストールが必要です。");

// v2.1
// hacked xoopsnote
//define("_MI_SSECTION_DISPCATIMG", "カテゴリ画像");
//define("_MI_SSECTION_DISPCATIMGDSC", "カテゴリの画像を表示する");

// === v2.1 ===
define("_MI_SSECTION_DCS", "[コンテンツ] カテゴリの要約の表示");
define("_MI_SSECTION_DCS_DSC", "「いいえ」の場合、サブカテゴリを持たないカテゴリのページにおいて、カテゴリの要約を表示しない。");
define("_MI_SSECTION_DISPLAYTYPE_WFSECTION", "WFSection 形式");
define("_MI_SSECTION_CATLIST_IMG_W", "[書式] カテゴリ一覧の画像の横幅"); 
define("_MI_SSECTION_CATLIST_IMG_WDSC", "カテゴリ一覧において、カテゴリ画像の横幅を指定する"); 
define("_MI_SSECTION_CATMAINIMG_W", "[書式] カテゴリのメイン・ページの画像の横幅"); 
define("_MI_SSECTION_CATMAINIMG_WDSC", "カテゴリのメイン・ページにおいて、カテゴリ画像の横幅を指定する。"); 

// === v2.12 ===
define("_MI_SSECTION_PV_TEXT", "部分的なアクセス権限のメッセージ");
define("_MI_SSECTION_PV_TEXTDSC", "部分的なアクセス権限がある記事へのメッセージ");
define("_MI_SSECTION_PV_TEXT_DEF", "全ての記事を読むためには、ユーザ登録してください");

define("_MI_SSECTION_SEOMODNAME", "モジュールのURL書換え");
define("_MI_SSECTION_SEOMODNAMEDSC", "モジュールに対してURL書換えが有効になっていると、モジュールの名前が使用できる。例 : http://yoursite.com/smartection/...");

define("_MI_SSECTION_ARTCOUNT", "記事の数を表示する");
define("_MI_SSECTION_ARTCOUNTDSC", "'はい' を選択すると、カテゴリ一覧にて各カテゴリに含まれる記事の数を表示する。なお、サブカテゴリは含まない。");
define("_MI_SSECTION_LATESTFILES", "最近のアップロード・ファイル");

// === v2.13 ===
define("_MI_SSECTION_PATHSEARCH", "[書式] 検索結果にてカテゴリのパスを表示する");
define("_MI_SSECTION_PATHSEARCHDSC", "");

// === v2.14 ===
define("_MI_SSECTION_SHOW_SUBCATS_NOMAIN", "メインページにサブカテゴリを表示する");
define("_MI_SSECTION_RATING_ENABLED", "評価システムを有効にする");
define("_MI_SSECTION_RATING_ENABLEDDSC", "この機能は SmartObject Framework を必要とします");
define("_MI_SSECTION_DISPBREAD", "パンくずを表示する");
define("_MI_SSECTION_DISPBREADDSC", "パンくずはカテゴリ構造におけるページの位置を表示する。");
define('_MI_SSECTION_DATE_TO_DATE', '期間を指定した記事');

?>