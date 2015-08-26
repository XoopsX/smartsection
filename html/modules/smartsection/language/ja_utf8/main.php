<?php
// $Id: main.php,v 1.1 2012/03/31 11:33:50 ohwada Exp $

// 2008-10-01 K.OHWADA
// v2.14 に対応した

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
* Id: main.php 331 2007-12-23 16:01:11Z malanciault 
* Module: SmartSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

define("_MD_SSECTION_ACTION", "操作");
define("_MD_SSECTION_ADD_FILE", "ファイルを添付");
define("_MD_SSECTION_ADD_FILE_INTRO", "タイトル 「%s」 の記事に添付ファイルを追加します。全ての項目に入力して下さい。");
define("_MD_SSECTION_ADD_FILE_TITLE", "記事に添付ファイルを追加");
define("_MD_SSECTION_ADMIN_PAGE", ":: 管理画面 ::");
define("_MD_SSECTION_ALL", "全て");
define("_MD_SSECTION_ALLOWCOMMENTS", "メントを許可する");
define("_MD_SSECTION_APPROVE", "承認");
define("_MD_SSECTION_BODY", "本文");
define("_MD_SSECTION_BODY_DSC", "この記事の本文");
define("_MD_SSECTION_BODY_REQ", "本文*");
define("_MD_SSECTION_CANCEL", "キャンセル");
define("_MD_SSECTION_CATEGORY", "カテゴリ");
define("_MD_SSECTION_CATEGORY_DSC", "記事のカテゴリを選択");
define("_MD_SSECTION_CATEGORY_EDIT", "カテゴリの編集");
define("_MD_SSECTION_CATEGORY_SUMMARY", "%s のカテゴリ一覧");
define("_MD_SSECTION_CATEGORY_SUMMARY_DESC", "このカテゴリに属する全ての記事の一覧があります。記事の全文を見たいときはタイトルをクリックする。");
define("_MD_SSECTION_CATEGORY_SUMMARY_INFO", "%s に登録されているカテゴリのリストです。");
define("_MD_SSECTION_CLEAR", "クリア");
define("_MD_SSECTION_CLONE", "記事を複製");
define("_MD_SSECTION_COMMENTS", "コメント");
define("_MD_SSECTION_CREATE", "記事を作成");
define("_MD_SSECTION_DATE", "日付");
define("_MD_SSECTION_DATESUB", "掲載日");
define("_MD_SSECTION_DELETE", "記事を削除");
define("_MD_SSECTION_DESCRIPTION", "説明");
define("_MD_SSECTION_DOHTML", "HTMLタグを有効にする");
define("_MD_SSECTION_DOIMAGE", "画像を有効にする");
define("_MD_SSECTION_DOLINEBREAK", "改行を有効にする");
define("_MD_SSECTION_DOSMILEY", "顔アイコンを有効にする");
define("_MD_SSECTION_DOWNLOAD_FILE", "ファイルをダウンロード");
define("_MD_SSECTION_DOXCODE", "XOOPS コードを有効");
define("_MD_SSECTION_EDIT", "記事の編集");
define("_MD_SSECTION_EDIT_ARTICLE", "記事を編集");
define("_MD_SSECTION_EMPTY", "このカテゴリには、記事やサブカテゴリはありません");
define("_MD_SSECTION_ERROR_ITEM_NOT_SAVED", "エラー： 記事を保存出来ません。");
define("_MD_SSECTION_FILE", "ファイル");
define("_MD_SSECTION_FILE_ADD", "ファイルを追加");
define("_MD_SSECTION_FILE_ADDING", "新しいファイルを追加");
define("_MD_SSECTION_FILE_ADDING_DSC", "この記事にファイルを添付するには全ての項目に入力して下さい");
define("_MD_SSECTION_FILE_DESCRIPTION", "説明");
define("_MD_SSECTION_FILE_DESCRIPTION_DSC", "添付ファイルの説明");
define("_MD_SSECTION_FILE_EDITING", "ファイルを編集する");
define("_MD_SSECTION_FILE_EDITING_DSC", "ファイルを編集しました。編集された内容で公開されます。");
define("_MD_SSECTION_FILE_EDITING_ERROR", "ファイルの編集が出来ません");
define("_MD_SSECTION_FILE_EDITING_SUCCESS", "ファイルの編集を行ないました");
define("_MD_SSECTION_FILE_INFORMATIONS", "ファイルの情報");
define("_MD_SSECTION_FILE_NAME_DSC", "添付ファイルの名前");
define("_MD_SSECTION_FILE_STATUS", "ファイルの公開");
define("_MD_SSECTION_FILE_STATUS_DSC", "いいえを選択した場合、ファイルは、ユーザー側から見えません。");
define("_MD_SSECTION_FILE_TO_UPLOAD", "アップロード :");
define("_MD_SSECTION_FILE_TYPE", "ファイルタイプ");
define("_MD_SSECTION_FILE_UPLOAD_ANOTHER", "登録して続ける");
define("_MD_SSECTION_FILENAME", "ファイル名");
define("_MD_SSECTION_FILES_LINKED", "この記事の添付ファイル");
define("_MD_SSECTION_FILEUPLOAD_ERROR", "ファイルをアップロード出来ません");
define("_MD_SSECTION_FILEUPLOAD_SUCCESS", "ファイルのアップロードを行ないました");
define("_MD_SSECTION_FINDITEMHERE", "記事の検索結果: ");
define("_MD_SSECTION_GOODDAY", "こんにちは, ");
define("_MD_SSECTION_HITS", "ヒット");
define("_MD_SSECTION_HITSDETAIL", "" . "この記事の読まれた回数");
define("_MD_SSECTION_HOME", "ホーム");
define("_MD_SSECTION_IMAGE_ITEM", "記事の画像");
define("_MD_SSECTION_IMAGE_ITEM_DSC", "この記事に対する画像");
define("_MD_SSECTION_IMAGE_UPLOAD", "画像をアップロード");
define("_MD_SSECTION_IMAGE_UPLOAD_DSC", "あなたのコンピュータの中の画像を選択して下さい。画像をサーバへアップロードし記事の画像として保存します。");
define("_MD_SSECTION_IMAGE_UPLOAD_ITEM_DSC", "あなたのコンピュータの中の画像を選択して下さい。 <br />画像をサーバへアップロードし<br />記事の画像として保存します。");
define("_MD_SSECTION_INDEX_CATEGORIES_SUMMARY", "カテゴリ一覧");
define("_MD_SSECTION_INDEX_CATEGORIES_SUMMARY_INFO", "カテゴリの一覧です。カテゴリを選択すると、記事リストを表示します。");
define("_MD_SSECTION_INDEX_ITEMS", "最新の記事");
define("_MD_SSECTION_INDEX_ITEMS_INFO", "最近公開された記事の一覧です。");
define("_MD_SSECTION_INTITEM", "この記事を見てください %s");
define("_MD_SSECTION_INTITEMFOUND", "ここに私が見つけた面白い記事があります %s");
define("_MD_SSECTION_ITEM", "記事");
define("_MD_SSECTION_ITEM_CAP", "記事");
define("_MD_SSECTION_ITEM_RECEIVED_AND_PUBLISHED", "投稿した記事は、自動承認され、公開されました。投稿ありがとうございます。");
define("_MD_SSECTION_ITEM_RECEIVED_NEED_APPROVAL", "投稿した記事は、管理者によって確認の後に公開されます。<br />投稿ありがとうございます。");
define("_MD_SSECTION_ITEMCOMEFROM", "記事が見つかりました ");
define("_MD_SSECTION_ITEMMODIFIED", "記事を変更しました!");
define("_MD_SSECTION_ITEMS", "記事");
define("_MD_SSECTION_ITEMS_INFO", "このカテゴリに登録された記事のリストです。");
define("_MD_SSECTION_ITEMS_LINKS", "ページ移動");
define("_MD_SSECTION_ITEMS_TITLE", "%s の記事リスト");
define("_MD_SSECTION_LAST_SMARTITEM", "最新の記事");
define("_MD_SSECTION_MAIL", "記事をメールで送信");
define("_MD_SSECTION_MAINHEAD", "ようこそ");
define("_MD_SSECTION_MAINNOITEMS", "このカテゴリには表示する記事がありません");
define("_MD_SSECTION_MAINNOSELECTCAT", "カテゴリを選択していません");
define("_MD_SSECTION_NAME", "名前");
define("_MD_SSECTION_NEED_CATEGORY_ITEM", "記事を作成するには、最初にカテゴリを作成して下さい。");
define("_MD_SSECTION_NEXT_ITEM", "次の記事");
define("_MD_SSECTION_NO", "No");
define("_MD_SSECTION_NO_CAT_EXISTS", "&#8217s カテゴリが定義されていません<br />管理者に連絡してください。");
define("_MD_SSECTION_NO_CAT_PERMISSIONS", "このカテゴリにアクセスする権限がありません。");
define("_MD_SSECTION_NO_TOP_PERMISSIONS", "表示する記事がありません。");
define("_MD_SSECTION_NOCATEGORYSELECTED", "カテゴリを選択していません。");
define("_MD_SSECTION_NOITEMS_INFO", "表示する記事がありません。");
define("_MD_SSECTION_NOITEMSELECTED", "記事を選択していません。");
define("_MD_SSECTION_NONE", "いいえ");
define("_MD_SSECTION_NOTIFY", "承認されたら通知する");
define("_MD_SSECTION_OF", "オフ");
define("_MD_SSECTION_ON", "オン");
define("_MD_SSECTION_OPTIONS", "オプション");
define("_MD_SSECTION_OTHER_ITEMS", "このカテゴリの記事");
define("_MD_SSECTION_PAGE", "ページ");
define("_MD_SSECTION_PDF", "この記事を PDF フォーマットで見る");
define("_MD_SSECTION_POSTEDBY", "投稿者: %s 掲載日: %s");
define("_MD_SSECTION_PREVIEW", "プレビュー");
define("_MD_SSECTION_PREVIOUS_ITEM", "良く読まれた記事");
define("_MD_SSECTION_PRINT", "記事を印刷する");
define("_MD_SSECTION_PRINTERFRIENDLY", "この記事を印刷に適した状態で印刷します");
define("_MD_SSECTION_READMORE", "もっと詳しく...");
define("_MD_SSECTION_READS", "回閲覧");
define("_MD_SSECTION_RSSFEED","RSS フィード");
define("_MD_SSECTION_SENDSTORY", "友達にこの記事を教える");
define("_MD_SSECTION_SMARTITEMS_INFO", "このカテゴリの記事");
define("_MD_SSECTION_SUB_CLONE", "複製した記事");
define("_MD_SSECTION_SUB_INTRO", "さん、下記フォームから記事を投稿してください。投稿した記事は管理者が確認の後、掲載されます。");
define("_MD_SSECTION_SUB_SMNAME", "記事の投稿");
define("_MD_SSECTION_SUB_SNEWNAME", "記事の投稿");
define("_MD_SSECTION_SUBMIT", "記事の投稿");
define("_MD_SSECTION_SUBMIT_ERROR", "エラー：投稿した記事の登録が出来ません。");
define("_MD_SSECTION_SUBMITITEM", "記事の投稿");
define("_MD_SSECTION_SUMMARY", "概要");
define("_MD_SSECTION_SUMMARY_DSC", "この記事の概要");
define("_MD_SSECTION_THE", " ");
define("_MD_SSECTION_TIMES", "回");
define("_MD_SSECTION_TITLE", "タイトル");
define("_MD_SSECTION_TITLE_REQ", "タイトル*");
define("_MD_SSECTION_TOTAL_SMARTITEMS", "記事合計");
define("_MD_SSECTION_UNKNOWNERROR", "エラー.  前の画面へ戻ってください");
define("_MD_SSECTION_UPLOAD", "登録");
define("_MD_SSECTION_UPLOAD_FILE", "添付ファイル");
define("_MD_SSECTION_VIEW_MORE", "全ての記事を読む");
define("_MD_SSECTION_WEIGHT", "Weight");
define("_MD_SSECTION_WHO_WHEN", "投稿者: %s 掲載日: %s ");
define("_MD_SSECTION_YES", "はい");

// v2.14 smartobject へ移動
// v2.1
// --- hacked xoopsnote ---
// PDF出力の項目名
//define('_MD_POSTEDON',"投稿情報 : ");
// --- hacke end ----

// === v2.1 ===
define("_MD_SSECTION_SUBCATEGORIES_INFO", "<em>%s</em> 中のサブカテゴリ:");

// === v2.14 ===
define('_MD_SSECTION_PRINT_CLOSE', 'このウィンドウを閉じる');

?>