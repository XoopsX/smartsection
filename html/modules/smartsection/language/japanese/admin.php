<?php
// $Id: admin.php,v 1.1 2012/03/31 11:45:35 ohwada Exp $

// 2007-04-10 K.OHWADA
// v2.13 に対応した

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
// 有朋自遠方来
//=========================================================

/**
* Id: admin.php 1470 2008-04-07 16:04:52Z kurak_bu 
* Module: SmartSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

define("_AM_SSECTION_ABOUT", "モジュールについて");
define("_AM_SSECTION_ACTION", "操作");
define("_AM_SSECTION_ACTIVEUSERS", "アクティブなユーザー: %s人");
define("_AM_SSECTION_ADD_OPT","%s 個のサブカテゴリを追加する");
define("_AM_SSECTION_ADD_OPT_SUBMIT","追加");
define("_AM_SSECTION_ADMIN_CATS", "カテゴリを管理するグループを選択して下さい");
define("_AM_SSECTION_ADMINCOLMNGMT", "カテゴリ管理");
define("_AM_SSECTION_ALL", "すべて");
define("_AM_SSECTION_ALL_EXP", "<b>すべて</b> : モジュール内のすべての記事を表示しています。");
define("_AM_SSECTION_ALLITEMS", "登録記事一覧リスト");
define("_AM_SSECTION_ALLITEMSMSG", "ソート順を変更すると並び替えます。また、ステータスを変更すると対応した記事の一覧を表示します。");
define("_AM_SSECTION_ALLOWCOMMENTS", "記事へのコメントを許可する");
define("_AM_SSECTION_APPROVE", "承認");
define("_AM_SSECTION_APPROVED", "承認する");
define("_AM_SSECTION_APPROVED_MODERATE", "モデレータが承認しました");
define("_AM_SSECTION_APPROVESUB", "承認しました");
define("_AM_SSECTION_APPROVING", "承認する");
define("_AM_SSECTION_ASC", "昇順");
define("_AM_SSECTION_AVAILABLE", "<span style='font-weight: bold; color: green;'>利用可能</span>");
define("_AM_SSECTION_AVAILABLE_PAGE_WRAP", "現在取り込み中のページ");
define("_AM_SSECTION_AVAILABLE_PAGE_WRAP_DSC", "現在記事の中に取り込んでいるページです。ファイル名をクリックすると記事に取り込みます。これは、XOOPS のエディタのみ動作します。その他のエディタを使っている場合は、マニュアルで追加して下さい。");
define("_AM_SSECTION_BACK2IDX", "キャンセルしました。インデックスページへ戻って下さい。");
define("_AM_SSECTION_BLOCKS", "ブロック管理");
define("_AM_SSECTION_BLOCKSANDGROUPS", "ブロック・グループ設定");
define("_AM_SSECTION_BLOCKSGROUPSADMIN", "ブロック・グループ設定");
define("_AM_SSECTION_BLOCKSTXT", "このモジュールには以下のブロックがあります。各ブロックは、システム管理のブロック管理からも設定することができます。");
define("_AM_SSECTION_BODY", "本文");

//define("_AM_SSECTION_BODY_DSC", "この記事の本文");
define("_AM_SSECTION_BODY_DSC", "この記事の本文<br><b>入力オプション</b><span style='font-size: xx-small; font-weight: normal; display: block;'><p>1- 整形される通常のテキストと画像</p>2- 下記のページラップ<p>[pagewrap=filename.html]</p><p>あるいは</p>[pagewrap=filename_1.html]<br>[pagebreak] <i>ページ数をつける</i><br>[pagewrap=filename_2.html]<br>そのほか ... <p>あるいは</p><p>[pagewrap=filename_1.html]<br>[pagewrap=filename_2.html]<br><i>ページを結合する</i><p>ページラップする順番に、yoursite.com/uploads/smartsection/content に必要なHTMLファイルをアップロードする。<br />あるいは ページの下にあるページラップのアップローダーを使用するだけでもよい。</p><p>本文の欄の下に注意すること。<br />希望するページをクリックするだけで、挿入できるページの一覧を見つけることができます。</p></span>");

define("_AM_SSECTION_BODY_REQ", "本文*");
define("_AM_SSECTION_BODY_SELECTFILE", "本文 : 取り込むページ");
define("_AM_SSECTION_BODY_SELECTFILE_DSC", "本文に取り込むファイルを選択して下さい");
define("_AM_SSECTION_BUTTON_CANCEL", "キャンセル");
define("_AM_SSECTION_BUTTON_DELETE", "削除");
define("_AM_SSECTION_BUTTON_EDIT", "編集");
define("_AM_SSECTION_BUTTON_SEARCH", "検索");
define("_AM_SSECTION_BUTTON_SUBMIT", "投稿");
define("_AM_SSECTION_BUTTON_UPDATE", "更新");
define("_AM_SSECTION_BY", "by");
define("_AM_SSECTION_CANCEL", "キャンセル");
define("_AM_SSECTION_CAT_ITEMS", "記事");
define("_AM_SSECTION_CAT_ITEMS_DSC", "このカテゴリ内の記事");
define("_AM_SSECTION_CATCOLNAME","タイトル");
define("_AM_SSECTION_CATCREATED", "新規カテゴリを作成しました。");
define("_AM_SSECTION_CATEGORIES", "カテゴリ");
define("_AM_SSECTION_CATEGORIES_DSC", "現在作成されているカテゴリ一覧を表示しています。");
define("_AM_SSECTION_CATEGORIES_TITLE", "カテゴリのリスト");
define("_AM_SSECTION_CATEGORY", "カテゴリ名");
define("_AM_SSECTION_CATEGORY_CREATE", "新しいカテゴリの作成");
define("_AM_SSECTION_CATEGORY_CREATE_INFO", "新しいカテゴリを作成します。作成したカテゴリは保存され、公開されます。");
define("_AM_SSECTION_CATEGORY_DSC", "この記事のカテゴリ");
define("_AM_SSECTION_CATEGORY_EDIT_INFO", "カテゴリを編集すること出来ます。変更後は直ちに反映し公開されます。");
define("_AM_SSECTION_CATEGORY_REQ", "カテゴリ*");
define("_AM_SSECTION_CATEGORY_SAVE_ERROR", "エラーが発生しました、カテゴリを保存出来ません。 :");
define("_AM_SSECTION_CATHEADER", "カテゴリ管理");
define("_AM_SSECTION_CATID","ID");
define("_AM_SSECTION_CLEAR", "クリア");
define("_AM_SSECTION_CLONE_ITEM", "記事の複製");
define("_AM_SSECTION_CLONE_NEW", "記事の複製");
define("_AM_SSECTION_COLDESCRIPT", "カテゴリの説明");
define("_AM_SSECTION_COLISDELETED", "カテゴリ %s を削除しました");
define("_AM_SSECTION_COLMODIFIED", "カテゴリを更新しました。");
define("_AM_SSECTION_COLPOSIT", "カテゴリの位置");
define("_AM_SSECTION_CREATE", "作成");
define("_AM_SSECTION_CREATECATEGORY", "新しいカテゴリを作成する");
define("_AM_SSECTION_CREATED", "作成日");
define("_AM_SSECTION_CREATEITEM", "記事を作成");
define("_AM_SSECTION_CREATEITEM_PAGEWRAP", "取り込みページ作成");
define("_AM_SSECTION_CREATESMARTITEM", "新しい記事を作成");
define("_AM_SSECTION_CREATETHEDIR", "フォルダを作成");
define("_AM_SSECTION_CREATINGNEW", "新規作成");
define("_AM_SSECTION_DATESUB", "公開日");
define("_AM_SSECTION_DATESUB_DSC", "公開を開始する日時を選択して下さい。");
define("_AM_SSECTION_DB_CHECKTABLES", "テーブルのチェック");
define("_AM_SSECTION_DB_CURRENTVER", "現在のバージョン: <span class='currentVer'>%s</span>");
define("_AM_SSECTION_DB_DBVER", "データベースのバージョン %s");
define("_AM_SSECTION_DB_MSG_ADD_DATA", "%s データを追加しました");
define("_AM_SSECTION_DB_MSG_ADD_DATA_ERR", "%s データが追加出来ません");
define("_AM_SSECTION_DB_MSG_CHGFIELD", "フィールドを変更 %s テーブル %s");
define("_AM_SSECTION_DB_MSG_CHGFIELD_ERR", "フィールドを変更出来ません %s テーブル %s");
define("_AM_SSECTION_DB_MSG_CREATE_TABLE", "%s テーブルを作成しました");
define("_AM_SSECTION_DB_MSG_CREATE_TABLE_ERR", "%s テーブルを作成出来ません");
define("_AM_SSECTION_DB_MSG_NEWFIELD", "フィールドを追加しました %s");
define("_AM_SSECTION_DB_MSG_NEWFIELD_ERR", "フィールドを追加出来ません %s");
define("_AM_SSECTION_DB_NEEDUPDATE", "古いデータベースです。アップグレードして下さい<br><b>注意 : データベースをバックアップした後にアップグレードする事を進めます。</b><br>");
define("_AM_SSECTION_DB_NOUPDATE", "データベースは更新されていません。アップデートは必要ありません。");
define("_AM_SSECTION_DB_UPDATE_DB", "データベースを更新しました");
define("_AM_SSECTION_DB_UPDATE_ERR", "バージョン %s へアップデート出来ません");
define("_AM_SSECTION_DB_UPDATE_NOW", "アップデートする");
define("_AM_SSECTION_DB_UPDATE_OK", "バージョン %s にアップデートに成功しました。");
define("_AM_SSECTION_DB_UPDATE_TO", "アップデートしたバージョン %s");
define("_AM_SSECTION_DELETE", "削除");
define("_AM_SSECTION_DELETE_CAT_CONFIRM", "カテゴリを削除すると、カテゴリ内の全ての サブカテゴリと記事・コメントも同時に削除されます。</br>カテゴリを削除しますか ?");
define("_AM_SSECTION_DELETE_CAT_ERROR", "エラーが発生しました、カテゴリを保存出来ません。");
define("_AM_SSECTION_DELETECOL", "カテゴリの削除");
define("_AM_SSECTION_DELETEFILE","添付ファイルの削除");
define("_AM_SSECTION_DELETEITEM", "記事の削除");
define("_AM_SSECTION_DELETETHISFILE","このファイルを削除しますか?");
define("_AM_SSECTION_DELETETHISITEM", "この記事を削除しますか?");
define("_AM_SSECTION_DESC", "降順");
define("_AM_SSECTION_DESCRIP", "カテゴリの説明");
define("_AM_SSECTION_DESCRIPTION", "説明");
define("_AM_SSECTION_DIRCREATED", "フォルダを作成しました。");
define("_AM_SSECTION_DIRNOTCREATED", "フォルダを作成出来ません。");
define("_AM_SSECTION_EDITCOL", "カテゴリの編集");
define("_AM_SSECTION_EDITFILE","ファイルを編集");
define("_AM_SSECTION_EDITING", "編集");
define("_AM_SSECTION_EDITITEM", "この記事を編集");
define("_AM_SSECTION_ERROR", " エラーが発生しました。");
define("_AM_SSECTION_ERROR_ITEM_NOT_SAVED", "エラー 記事を保存出来ません。");
define("_AM_SSECTION_FDELETED", "添付ファイルを削除しました");
define("_AM_SSECTION_FILE", "添付ファイル");
define("_AM_SSECTION_FILE_ADD", "添付ファイルを追加");
define("_AM_SSECTION_FILE_ADDING", "新しい添付ファイルを追加");
define("_AM_SSECTION_FILE_ADDING_DSC", "この記事に新しい添付ファイルを追加します。ファイルを追加するには全ての項目を入力する必要があります。<br>保存するファイル名は、ファイル名の先頭に記事IDが追加されます。");
define("_AM_SSECTION_FILE_DELETE_ERROR","エラー ファイルを削除出来ません。");
define("_AM_SSECTION_FILE_DESCRIPTION", "説明");
define("_AM_SSECTION_FILE_DESCRIPTION_DSC", "添付ファイルの説明文");
define("_AM_SSECTION_FILE_EDITING", "添付ファイルの編集");
define("_AM_SSECTION_FILE_EDITING_DSC", "添付ファイルの内容に関する説明を編集出来ます。");
define("_AM_SSECTION_FILE_EDITING_ERROR", "ファイル内容を更新出来ません。");
define("_AM_SSECTION_FILE_EDITING_SUCCESS", "ファイル内容を更新しました。");
define("_AM_SSECTION_FILE_INFORMATIONS", "添付ファイルの情報");
define("_AM_SSECTION_FILE_NAME", "名前");
define("_AM_SSECTION_FILE_NAME_DSC", "添付ファイルの表示名");
define("_AM_SSECTION_FILE_STATUS", "ファイルの公開");
define("_AM_SSECTION_FILE_STATUS_DSC", "いいえを選択した場合、ファイルは、ユーザー側から見えません。");
define("_AM_SSECTION_FILE_TO_UPLOAD", "添付ファイル :");
define("_AM_SSECTION_FILE_UPLOAD_ANOTHER", "アップロードして続ける");
define("_AM_SSECTION_FILEISDELETED","添付ファイルを削除しました") ;
define("_AM_SSECTION_FILENAME", "ファイル名");
define("_AM_SSECTION_FILES_LINKED", "この記事の添付ファイル");
define("_AM_SSECTION_FILEUPLOAD_ERROR", "ファイルをアップロード出来ません。");
define("_AM_SSECTION_FILEUPLOAD_SUCCESS", "ファイルをアップロードしました。");
define("_AM_SSECTION_FINDUSERS", "ユーザーの検索");
define("_AM_SSECTION_GOMOD", "モジュールへ");
define("_AM_SSECTION_GROUPS", "グループ管理");
define("_AM_SSECTION_GROUPSINFO", "モジュールとブロックのアクセス権設定");
define("_AM_SSECTION_HELP", "ヘルプ");
define("_AM_SSECTION_HITS", "ヒット数");
define("_AM_SSECTION_ICO_DELETE", "削除");
define("_AM_SSECTION_ICO_EDIT", "編集");
define("_AM_SSECTION_ICO_OFFLINE", "オフライン");
define("_AM_SSECTION_ICO_ONLINE", "オンライン");
define("_AM_SSECTION_ID", "ID");
define("_AM_SSECTION_IMAGE", "カテゴリ画像");
define("_AM_SSECTION_IMAGE_DSC", "カテゴリ表示に使う画像を選択して下さい");
define("_AM_SSECTION_IMAGE_ITEM", "記事の画像");
define("_AM_SSECTION_IMAGE_ITEM_DSC", "この記事に使う画像");
define("_AM_SSECTION_IMAGE_UPLOAD", "画像のアップロード");
define("_AM_SSECTION_IMAGE_UPLOAD_DSC", "あなたのコンピュータから、カテゴリに使用する画像をアップロード出来ます。");
define("_AM_SSECTION_IMAGE_UPLOAD_ITEM_DSC", "あなたのコンピュータから画像をアップロード出来ます。アップロードした画像は記事と一緒に表示されます。");
define("_AM_SSECTION_IMAGEPATH", "カテゴリ画像をソートする : ");
define("_AM_SSECTION_IMPORT", "インポート");
define("_AM_SSECTION_IMPORTED_COMMENT", "'%s' インポートしました.");
define("_AM_SSECTION_IMPORTED_COMMENT_ERROR", "エラー インポート出来ません'%s'");
define("_AM_SSECTION_IMPORT_COMMENTS", "記事をインポート中です");
define("_AM_SSECTION_IMPORT_ALL_PARTNERS", "全ての記事");
define("_AM_SSECTION_IMPORTED_ARTICLE_FILE", "記事をインポートしました %s");
define("_AM_SSECTION_IMPORT_ARTICLE_ERROR", "記事をインポート中のエラー <em>%s</em>");
define("_AM_SSECTION_IMPORT_ARTICLE_WRAP", "挿入ファイル %s をコンテンツフォルダにコピーしました。");
define("_AM_SSECTION_IMPORT_AUTOAPPROVE", "自動で承認");
define("_AM_SSECTION_IMPORT_BACK", "インポートのページに戻る");
define("_AM_SSECTION_IMPORT_CATEGORIES", "カテゴリをインポートする");
define("_AM_SSECTION_IMPORT_CATEGORIES_DSC", "SmartSection にインポートするカテゴリとその記事数");
define("_AM_SSECTION_IMPORT_CATEGORY_ERROR", "エラー カテゴリをインポート出来ません <em>%s</em>.");
define("_AM_SSECTION_IMPORT_CATEGORY_SUCCESS", "カテゴリ <em>%s</em> をインポートしました。");
define("_AM_SSECTION_IMPORT_ERROR", "エラー 記事をインポート出来ませんでした。");
define("_AM_SSECTION_IMPORT_FILE_NOT_FOUND", "ファイルが見つかりません <b>%s</b>");
define("_AM_SSECTION_IMPORT_FROM", "%s からインポート ");
define("_AM_SSECTION_IMPORT_GOTOMODULE", "スマートセクションのインデックスページに戻る");
define("_AM_SSECTION_IMPORT_INFO", "スマートセクションの記事を取り込みます。インポートするモジュールを指定して、インポートボタンをクリックしてください。<br><b>この操作は繰返し行わないで下さい。記事の複製が作成されます。</b>");
define("_AM_SSECTION_IMPORT_MODULE_FOUND", "%s モジュールを見つけました。%s つの記事と %s カテゴリがインポートされます");
define("_AM_SSECTION_IMPORT_MODULE_FOUND_NO_ITEMS", "%s モジュールを見つけましたが、インポートする記事が見つかりません。.");
define("_AM_SSECTION_IMPORT_NOCATSELECTED", "インポートするカテゴリが見つかりません");
define("_AM_SSECTION_IMPORT_NO_MODULE", "インポート可能なモジュールがインストールされていません。記事をインポート出来ません。");
define("_AM_SSECTION_IMPORT_PARENT_CATEGORY", "親カテゴリ");
define("_AM_SSECTION_IMPORT_PARENT_CATEGORY_DSC", "インポートする親カテゴリを選択してください。<br>カテゴリは選択したカテゴリのサブカテゴリとしてインポートされます。");
define("_AM_SSECTION_IMPORT_PARTNER_ERROR", "エラー インポート出来ません '%s'.");
define("_AM_SSECTION_IMPORT_RESULT", "インポート結果");
define("_AM_SSECTION_IMPORT_SETTINGS", "インポートの設定");
define("_AM_SSECTION_IMPORT_SUCCESS", "モジュールの記事のインポートが完了しました。");
define("_AM_SSECTION_IMPORT_TITLE", "記事のインポート");
define("_AM_SSECTION_IMPORTED_ARTICLE", "インポートした記事 : <em>%s</em>");
define("_AM_SSECTION_IMPORTED_ARTICLES", "インポートした記事 : <em>%s</em>");
define("_AM_SSECTION_IMPORTED_CATEGORY", "インポートしたカテゴリ : <em>%s</em>");
define("_AM_SSECTION_IMPORTED_CATEGORIES", "インポートしたカテゴリ : <em>%s</em>");
define("_AM_SSECTION_IMPORT_SELECTION", "記事のインポート");
define("_AM_SSECTION_IMPORT_SELECT_FILE", "記事");
define("_AM_SSECTION_IMPORT_SELECT_FILE_DSC", "インポートする記事のあるモジュールを選択して下さい。");
define("_AM_SSECTION_INACTIVEUSERS", "アクティブでないユーザー: %s人");
define("_AM_SSECTION_INDEX", "インデックス");
define("_AM_SSECTION_INVENTORY", "モジュール概要");
define("_AM_SSECTION_ITEM", "記事");
define("_AM_SSECTION_ITEM_CREATING", "新しい記事の作成");
define("_AM_SSECTION_ITEM_CREATING_DSC", "下記フォームを使って新しい記事を作成します。");
define("_AM_SSECTION_ITEM_DELETE_ERROR", "エラー 記事を削除出来ません。");
define("_AM_SSECTION_ITEM_DUPLICATING", "記事を複製");
define("_AM_SSECTION_ITEM_DUPLICATING_DSC", "オリジナルの記事を元に新しい記事を作成します。");
define("_AM_SSECTION_ITEM_EDIT", "この記事を編集");
define("_AM_SSECTION_ITEM_INFORMATIONS", "クラスのアクションのスーツの情報(Class action suit informations)");
define("_AM_SSECTION_ITEM_RECEIVED_NEED_APPROVAL", "あなたの記事は送信されました。<br />モデレーターにより承認されたあと公開されます。<br />記事の寄稿に感謝します。");
define("_AM_SSECTION_ITEM_REJECTED", "記事を却下しました");
define("_AM_SSECTION_ITEMCAT", "カテゴリ");
define("_AM_SSECTION_ITEMCATEGORYNAME", "カテゴリ");
define("_AM_SSECTION_ITEMCOLNAME", "タイトル");
define("_AM_SSECTION_ITEMCREATEDOK", "記事は、作成され掲載されました。");
define("_AM_SSECTION_ITEMDESC", "説明");
define("_AM_SSECTION_ITEMID", "ID");
define("_AM_SSECTION_ITEMISDELETED", "記事を削除しました");
define("_AM_SSECTION_ITEMMODIFIED", "記事を変更しました。");
define("_AM_SSECTION_ITEMNOTCREATED", "記事を作成出来ません。");
define("_AM_SSECTION_ITEMNOTUPDATED", "記事を更新出来ません。");
define("_AM_SSECTION_ITEMS", "記事");
define("_AM_SSECTION_LIMIT", "1ページあたりの表示ユーザ数");
define("_AM_SSECTION_MESSAGE_ADD_MIME_ERROR", "エラー: MIMEタイプが追加できなかった");
define("_AM_SSECTION_MESSAGE_DELETE_MIME_ERROR", "エラー: MIMEタイプが削除できなかった");
define("_AM_SSECTION_MESSAGE_EDIT_MIME_ERROR", "エラー: MIMEタイプが更新できなかった");
define("_AM_SSECTION_MESSAGE_NO_ID", "エラー: ID が指定できなかった");
define("_AM_SSECTION_MESSAGE_NO_VALUE", "エラー: MIMEタイプの値が指定できなかった");
define("_AM_SSECTION_MIME_ADD_TITLE", "ファイルのタイプを追加");
define("_AM_SSECTION_MIME_ADMIN", "管理者");
define("_AM_SSECTION_MIME_ADMINF", "管理者に許可する MIMEタイプ");
define("_AM_SSECTION_MIME_ADMINFINFO", "<b>管理者がアップロード可能なファイルのタイプ</b>");
define("_AM_SSECTION_MIME_CANCEL", "キャンセル");
define("_AM_SSECTION_MIME_CLEAR", "リセット");
define("_AM_SSECTION_MIME_CREATE", "作成");
define("_AM_SSECTION_MIME_CREATED", "MIMEタイプ情報を作成しました");
define("_AM_SSECTION_MIME_CREATEF", "ファイルタイプを追加");
define("_AM_SSECTION_MIME_DELETE", "削除");
define("_AM_SSECTION_MIME_DELETETHIS", "このMIMEタイプを削除しますか");
define("_AM_SSECTION_MIME_EDIT_TITLE", "ファイルタイプを編集");
define("_AM_SSECTION_MIME_EXT", "拡張子");
define("_AM_SSECTION_MIME_EXTF", "ファイルの拡張子");
define("_AM_SSECTION_MIME_EXTFIND", "ファイルの拡張子を検索<div style='padding-top: 8px;'><span style='font-weight: normal;'>検索したいファイルの拡張子を入力する</span></div>");
define("_AM_SSECTION_MIME_FINDIT", "拡張子を探す");
define("_AM_SSECTION_MIME_FINDMIMETYPE", "新しいファイルのMIMEタイプを探しますか?");
define("_AM_SSECTION_MIME_ID", "ID");
define("_AM_SSECTION_MIME_INFOTEXT", "<ul><li>このフォームで、ファイルのタイプを追加、編集または削除出来ます。</li> <li>新しいファイルのタイプを外部のサイトで探すことが出来ます。</li> <li>管理者・ユーザーに表示するファイルタイプを表示します。</li> <li>ファイルタイプの設定を変更出来ます。</li></ul>");
define("_AM_SSECTION_MIME_MANAGE_TITLE", "ファイルタイプ管理");
define("_AM_SSECTION_MIME_MIMEDELETED", "拡張子 %s を削除しました");
define("_AM_SSECTION_MIME_MODIFIED", "ファイルタイプの情報を変更しました");
define("_AM_SSECTION_MIME_MODIFY", "変更");
define("_AM_SSECTION_MIME_MODIFYF", "ファイルタイプ変更");
define("_AM_SSECTION_MIME_NAME", "アプリケーションのタイプ");
define("_AM_SSECTION_MIME_NAMEF", "アプリケーションのタイプ/名前<div style='padding-top: 8px;'><span style='font-weight: normal;'>拡張子に関連するアプリケーション名</span></div>");
define("_AM_SSECTION_MIME_NOMIMEINFO", "MIMEタイプが選択されていません");
define("_AM_SSECTION_MIME_SEARCH", "ファイルタイプ検索");
define("_AM_SSECTION_MIME_TYPEF", "MIMEタイプ<div style='padding-top: 8px;'><span style='font-weight: normal;'>ファイル拡張子と関連する各々のファイルのMIMEタイプを入力してください。MIMEタイプは、スペースで区切られていなければなりません。</span></div>");
define("_AM_SSECTION_MIME_USER", "ユーザー");
define("_AM_SSECTION_MIME_USERF", "ユーザーに許可する MIMEタイプ");
define("_AM_SSECTION_MIME_USERFINFO", "<b>ユーザーがアップロード可能なファイルのタイプ</b>");
define("_AM_SSECTION_MIMETYPES", "ファイルタイプ");
define("_AM_SSECTION_MINDEX_ACTION", "操作");
define("_AM_SSECTION_MINDEX_PAGE", "<b>ページ</b> ");
define("_AM_SSECTION_MODADMIN", "モジュール管理 :");
define("_AM_SSECTION_MODIFY", "変更");
define("_AM_SSECTION_MODIFYCAT", "カテゴリの変更");
define("_AM_SSECTION_MODIFYTHISCAT", "このカテゴリを変更しますか?");
define("_AM_SSECTION_NB_SUBCATS","数字分カテゴリを追加します:<br><br>数を入力して'追加'を押して下さい");
define("_AM_SSECTION_NEED_CATEGORY_ITEM", "記事を作成出来ません。まず最初にカテゴリを作成してください。");
define("_AM_SSECTION_NO", "いいえ");
define("_AM_SSECTION_NOCAT", "表示するカテゴリがありません");
define("_AM_SSECTION_NOCOLTOEDIT", "編集するするカテゴリがありません。");
define("_AM_SSECTION_NOFILE", "この記事には、添付ファイルはありません。");
define("_AM_SSECTION_NOFILESELECTED", "ファイルを選択していません");
define("_AM_SSECTION_NOFOUND", "指定された語句では見つかりません");
define("_AM_SSECTION_NOITEMS", "公開中の記事はありません。");
define("_AM_SSECTION_NOITEMS_OFFLINE", "非公開中の記事はありません");
define("_AM_SSECTION_NOITEMS_REJECTED", "却下した記事はありません");
define("_AM_SSECTION_NOITEMS_SUBMITTED", "承認待ちの記事はありません");
define("_AM_SSECTION_NOITEMSELECTED", "記事を選択していません。");
define("_AM_SSECTION_NOITEMSSEL", "このステータスに記事はありません。");
define("_AM_SSECTION_NONE", "無し");
define("_AM_SSECTION_NOPERMSSET", "アクセス権を設定出来ません : カテゴリが作成されていません。カテゴリを先に作成して下さい。");
define("_AM_SSECTION_NOSUBCAT","サブカテゴリはありません");
define("_AM_SSECTION_NOTAVAILABLE", "<span style='font-weight: bold; color: red;'>利用不可</span>");
define("_AM_SSECTION_NOTUPDATED", "データベースの更新に失敗しました。");
define("_AM_SSECTION_OFFLINE", "非公開");
define("_AM_SSECTION_OFFLINE_CREATED_SUCCESS", "記事を非公開にしました。");
define("_AM_SSECTION_OFFLINE_EXP", "<b>非公開の記事</b> : 公開を中止もしくは一時的に発行した記事です。非公開の記事は、表示されません。");
define("_AM_SSECTION_OFFLINE_FIELD", "オフライン<span style='font-size: xx-small; font-weight: normal; display: block;'>行の後ろに置くときは 'No' を選択する</span>");
define("_AM_SSECTION_OFFLINE_MOD_SUCCESS", "選択された記事を非公開にしました。.");
define("_AM_SSECTION_OFFLINEEDITING", "非公開の記事を編集");
define("_AM_SSECTION_OFFLINEEDITING_INFO", "非公開の記事を編集出来ます。記事を編集後、公開する場合はステータスを<b>公開</b>に指定して下さい。");
define("_AM_SSECTION_OPTS", "一般設定");
define("_AM_SSECTION_PAGEWRAP","ページの取り込み");
define("_AM_SSECTION_PAGEWRAPDSC", "ページの取り込みは、記事の中に指定されたファイルの内容を取り込みます。これは、既存のコンテンツをページに埋め込んでページを組成します。<br>既存の HTMLファイルや定型HTMLファイルとして有効に使えます。");
define("_AM_SSECTION_PARENT_CATEGORY_EXP", "親カテゴリ<span style='font-size: small; font-weight: normal; display: block;'>カテゴリの下にサブカテゴリを作成出来ます。<br />サブカテゴリとして作成する場合、カテゴリの親になるカテゴリを選択して下さい。</span>");
define("_AM_SSECTION_PATH", "パス");
define("_AM_SSECTION_PATH_CONTENT", "取り込むファイル");
define("_AM_SSECTION_PATH_FILES", "添付ファイル");
define("_AM_SSECTION_PATH_IMAGES", "全体の画像");
define("_AM_SSECTION_PATH_IMAGES_CATEGORY", "カテゴリの画像ファイル");
define("_AM_SSECTION_PATH_IMAGES_ITEM", "記事の画像ファイル");
define("_AM_SSECTION_PATH_ITEM", "ファイルの種類");
define("_AM_SSECTION_PATHCONFIGURATION", "パスの設定");
define("_AM_SSECTION_PERMERROR", "ERROR: ディレクトリにアクセス出来ません。uploads/smartsection/content ディレクトリを書込み可能にして下さい。");
define("_AM_SSECTION_PERMISSIONS", "アクセス権");
define("_AM_SSECTION_PERMISSIONS_APPLY_ON_ITEMS", "カテゴリのアクセス権を記事に適用<span style='font-size: small; font-weight: normal; display: block;'>このカテゴリ内の記事に上記アクセス権を適用します。<br />カテゴリ内の全ての記事のアクセス権を上書きします。</span>");
define("_AM_SSECTION_PERMISSIONS_CAT_READ", "アクセス権<span style='font-size: small; font-weight: normal; display: block;'>このカテゴリを閲覧できるグループを選択してください。</span>");
define("_AM_SSECTION_PERMISSIONS_CAT_SUBMIT", "記事の投稿権限");
define("_AM_SSECTION_PERMISSIONS_CAT_SUBMIT_DSC", "カテゴリごとに記事を投稿する権限を指定します。 各グループが投稿出来るカテゴリを選択して下さい。");
define("_AM_SSECTION_PERMISSIONS_ITEM", "アクセス権");
define("_AM_SSECTION_PERMISSIONS_ITEM_DSC", "この記事を閲覧できるグループを選択してください。");
define("_AM_SSECTION_PERMISSIONSADMIN", "アクセス権管理");
define("_AM_SSECTION_PERMISSIONSADMINMAN", "カテゴリ別の表示権限");
define("_AM_SSECTION_PERMISSIONSSUBMIT", "記事を投稿できる権限");
define("_AM_SSECTION_PERMISSIONSSUBMIT_DESC", "それぞれのグループにて、記事を投稿できるカテゴリを選択する");
define("_AM_SSECTION_PERMISSIONSVIEWMAN", "カテゴリ別の閲覧権限");
define("_AM_SSECTION_PUBLISH", "掲載");
define("_AM_SSECTION_PUBLISHED", "公開中");
define("_AM_SSECTION_PUBLISHED_DSC", "現在公開中の記事の一覧です。");
define("_AM_SSECTION_PUBLISHED_EXP", "<b>公開された記事</b> : 現在公開中の記事です。");
define("_AM_SSECTION_PUBLISHED_MOD_SUCCESS", "記事の更新に成功しました。");
define("_AM_SSECTION_PUBLISHEDEDITING", "発行された記事を編集します");
define("_AM_SSECTION_PUBLISHEDEDITING_INFO", "あなたはこの記事を編集することができます。 変更は直ちに反映され、公開されます。");
define("_AM_SSECTION_PUBLISHEDITEMS", "公開中の記事");
define("_AM_SSECTION_REALNAME", "本名");
define("_AM_SSECTION_REJECTED", "却下");
define("_AM_SSECTION_REJECTED_EDIT", "却下した記事を編集");
define("_AM_SSECTION_REJECTED_ITEM", "却下された記事");
define("_AM_SSECTION_REJECTED_ITEM_EXP", "<b>却下された記事</b> : 管理者によって却下された記事です。却下された記事は、非公開になります。");
define("_AM_SSECTION_RESULTS", "検索結果");
define("_AM_SSECTION_RUSUREDELF", "このファイルを削除しますか？");
define("_AM_SSECTION_SCATEGORYNAME","サブカテゴリ作成<br><br><span style='font-size: xx-small; font-weight: normal; display: block;'>テキストボックスに名前を入力するとサブカテゴリを作成します。<br>空白の場合はサブカテゴリを作成しません。もっと多くのカテゴリを作成する場合は、追加する項目数を入力後に追加ボタンを押してください。</span>");
define("_AM_SSECTION_SEARCH","検索");
define("_AM_SSECTION_SEARCH_PW","HTML, HTM または XHTML の拡張子のみアップロードして下さい。");
define("_AM_SSECTION_SELECT_SORT", "ソート順を選択");
define("_AM_SSECTION_SELECT_STATUS", "ステータス");
define("_AM_SSECTION_SELECTFILE","ファイルを選択");
define("_AM_SSECTION_SETMPERM", "アクセス権を設定");
define("_AM_SSECTION_SHOWING", "表示");
define("_AM_SSECTION_STATUS", "ステータス");
define("_AM_SSECTION_STATUS0", "ステータス無し");
define("_AM_SSECTION_STATUS_DSC", "この記事のステータスを選択");
define("_AM_SSECTION_SUBCAT_CAT","サブカテゴリ");
define("_AM_SSECTION_SUBCAT_CAT_DSC","このカテゴリのサブカテゴリ一覧");
define("_AM_SSECTION_SUBCATEGORY_SAVE_ERROR","カテゴリを作成出来ません。:");
define("_AM_SSECTION_SUBDESCRIPT","説明");
define("_AM_SSECTION_SUBMISSION_MODERATE", "承認待ち記事の承認");
define("_AM_SSECTION_SUBMISSIONSMNGMT", "承認待ち記事");
define("_AM_SSECTION_SUBMIT", "更新登録");
define("_AM_SSECTION_SUBMITTED", "承認待ち記事");
define("_AM_SSECTION_SUBMITTED_APPROVE_SUCCESS", "記事を承認し、公開しました。");
define("_AM_SSECTION_SUBMITTED_EXP", "<b>承認待ちの記事</b> : ユーザによって投稿された記事。公開するには承認が必要です。");
define("_AM_SSECTION_SUBMITTED_INFO", "投稿された記事です。記事の内容を確認して編集も可能です。公開するには承認が必要です。");
define("_AM_SSECTION_SUBMITTED_TITLE", "投稿された記事の承認");
define("_AM_SSECTION_SUMMARY", "記事の概要");
define("_AM_SSECTION_SUMMARY_DSC", "この記事の概要");
define("_AM_SSECTION_TEXT_ASCENDING", "降順");
define("_AM_SSECTION_TEXT_DESCENDING", "昇順");
define("_AM_SSECTION_TEXT_NUMBER_PER_PAGE", "ページ移動:");
define("_AM_SSECTION_TEXT_ORDER_BY", "並び順:");
define("_AM_SSECTION_TEXT_SEARCH_BY", "検索項目:");
define("_AM_SSECTION_TEXT_SEARCH_MIME", "ファイルタイプを検索");
define("_AM_SSECTION_TEXT_SEARCH_TEXT", "テキスト検索:");
define("_AM_SSECTION_TEXT_SORT_BY", "並び替え:");

define("_AM_SSECTION_TEXT_NO_RECORDS", "データがありません");

define("_AM_SSECTION_TITLE", "タイトル");
define("_AM_SSECTION_TITLE_REQ", "タイトル*");
define("_AM_SSECTION_TOTAL_OFFLINE", "非公開の記事: ");
define("_AM_SSECTION_TOTALCAT", "カテゴリ :");
define("_AM_SSECTION_TOTALPUBLISHED", "公開中の記事: ");
define("_AM_SSECTION_TOTALSUBMITTED", "承認待ち記事: ");
define("_AM_SSECTION_UID", "投稿者名");
define("_AM_SSECTION_UID_DSC", "投稿者の名前を選択");
define("_AM_SSECTION_UNAME", "ユーザ名");
define("_AM_SSECTION_UPDATE_MODULE", "モジュールのアップデート");
define("_AM_SSECTION_UPLOAD", "アップロード");
define("_AM_SSECTION_UPLOAD_FILE", "添付ファイル");
define("_AM_SSECTION_UPLOAD_FILE_NEW", "添付ファイルを追加する");
define("_AM_SSECTION_UPLOADED_DATE", "登録日");
define("_AM_SSECTION_UPLOADPATH", "アップロードされた添付ファイルを保存するパス : ");
define("_AM_SSECTION_VIEW_CATS", "各グループが表示できるカテゴリを選択してください。");
define("_AM_SSECTION_WEIGHT", "並び順");
define("_AM_SSECTION_YES", "はい");
define("_MD_SSECTION_CATEGORY_ITEM", "カテゴリ<span style='font-size: xx-small; font-weight: normal; display: block;'>カテゴリに属するカテゴリ</span>");

// === v2.1 ===
define("_AM_SSECTION_CATEGORY_HEADER", "カテゴリのヘッダー");
define("_AM_SSECTION_CATEGORY_HEADER_DSC", "");
define("_AM_SSECTION_CATEGORY_META_DESCRIPTION", "Meta Description");
define("_AM_SSECTION_CATEGORY_META_DESCRIPTION_DSC", "検索エンジン対策のために、このカテゴリーの説明用に Meta Description をカスタマイズすることができます。もし、カテゴリーを作るときに、この項目を空欄のままにしておけば、自動的にこのカテゴリー用の Meta Description が生成されます。");
define("_AM_SSECTION_CATEGORY_META_KEYWORDS", "Meta Keywords");
define("_AM_SSECTION_CATEGORY_META_KEYWORDS_DSC", "検索エンジン対策のために、このカテゴリーの説明用に Meta Keywords をカスタマイズすることができます。もし、カテゴリーを作るときに、この項目を空欄のままにしておけば、自動的にこのカテゴリー用の Meta Keywords が生成されます。");
define("_AM_SSECTION_CATEGORY_SHORT_URL", "ショートURL");
define("_AM_SSECTION_CATEGORY_SHORT_URL_DSC", "このモジュールのSEO対策を行うときは、このカテゴリーのためにショート(短い)URLを記述することができます。この項目はオプションです。");
define("_AM_SSECTION_ITEM_META_DESCRIPTION", "Meta Description");
define("_AM_SSECTION_ITEM_META_DESCRIPTION_DSC", "検索エンジン対策のために、この記事の説明用に Meta Description をカスタマイズすることができます。もし、記事を作るときに、この項目を空欄のままにしておけば、自動的にこの記事用の Meta Description が生成されます。");
define("_AM_SSECTION_ITEM_META_KEYWORDS", "Meta Keywords");
define("_AM_SSECTION_ITEM_META_KEYWORDS_DSC", "検索エンジン対策のために、この記事の説明用に Meta Keywords をカスタマイズすることができます。もし、記事を作るときに、この項目を空欄のままにしておけば、自動的にこの記事用の Meta Keywords が生成されます。");
define("_AM_SSECTION_ITEM_SHORT_URL", "ショートURL");
define("_AM_SSECTION_ITEM_SHORT_URL_DSC", "このモジュールのSEO対策を行うときは、この記事のためにショート(短い)URLを記述することができます。この項目はオプションです。");
define("_AM_SSECTION_DB_NEEDUPDATE_WARNING", "警告: SmartFactoryは、アップグレードのプログラムを実行する前に、全ての SmartSection のデータベース・テーブルをバックアップすることを強く推奨します。");

// === v2.12 ===
define("_AM_SSECTION_PARTIAL_VIEW", "このグループに部分的なアクセス権限を与える");
define("_AM_SSECTION_PARTIAL_VIEWDSC", "チェックボックスをチェックすることで、このグループに記事の一部を読む権限を与えることが出来る。また、このグループはモジュールと親カテゴリのアクセス権限を持つ必要があります。");

// === v2.13 ===
define("_AM_SSECTION_TOOLS", "ツール");
define("_AM_SSECTION_CONFIGURE_READ_PERMISSIONS", "読出し許可を設定する");
define("_AM_SSECTION_CONFIGURE_READ_PERMISSIONS_EXP", "このツールは、直ちに全てのカテゴリと全ての記事に対して読出し許可を設定する。<br />最初に全ての許可は削除される。それからあなたの選んだオプションに置き換えられる。<br /><br /><b>注意して使用のこと !</b>");
define("_AM_SSECTION_FULLACCESS", "全てのカテゴリと全ての記事に対する読出し許可");
define("_AM_SSECTION_PERMISSIONS_UPDATED", "許可は更新された。");

define("_AM_SSECTION_ITEM_TAGS", "タグ");
define("_AM_SSECTION_ITEM_TAGS_DSC", "");

define("_AM_SSECTION_ITEM_UPLOAD_FILE", "この記事にファイルを関連付けする");
define("_AM_SSECTION_ITEM_UPLOAD_FILE_DSC", "この記事に関連付けするファイルを選択する。<br />記事が作成したあとで、複数のファイルを追加することができる。<br />まず記事を編集して、脚部までスクロールして、「Add file」ボタンをクリックする。<br /><br />例えば、WordファイルやExcelファイルを追加できる。<br />Flashファイルをアップロードして、あなたの記事に追加することが出来る !");

define("_AM_SSECTION_XOOPS_PRO", "このモジュールに関して助けが必要ですか ?<br />新しい機能が必要ですか ?");

define("_AM_SSECTION_NEW_FEATURE", "新機能 !!!");

?>