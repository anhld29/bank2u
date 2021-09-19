<?php
/*

	meta.php
	メタ情報を管理するファイルです

	$meta['title'] →　title
	$meta['keywords'] →　keywords
	$meta['description'] →　description


*/


/*--	Settings
--------------------------------------------------*/

//共通文言
define('TITLE', 'タイトルが入ります', true);
define('KEYWORDS', 'key,key,key,key,key,key,key,key,key', true);
define('DESCRIPTION', 'デスクリプションが入ります', true);


//初期文言
$meta = array(
	'title' => TITLE,
	'keywords' => KEYWORDS,
	'description' => DESCRIPTION
);


/*--	Main page
--------------------------------------------------*/

#トップページ
if($page == 'homepage') {
	$meta['title'] = TITLE;
	$meta['keywords'] = KEYWORDS;
	$meta['description'] = DESCRIPTION;
}

#コピー
if($page == 'copy') {
	$meta['title'] = 'コピー | '.TITLE;
	$meta['keywords'] = KEYWORDS.',コピー';
	$meta['description'] = DESCRIPTION;
}


/*--    Error page
--------------------------------------------------*/

#error - 403
if($page == 'misc_403') $meta['title'] = 'Error 403 Forbidden アクセスが制限されています | '.title;

#error - 404
if($page == 'misc_404') $meta['title'] = 'Error 404 Page Not Found ページが見つかりません | '.title;

#error - 500
if($page == 'misc_500') $meta['title'] = 'Error 500 Internal Server Error サーバーエラーが出ています | '.title;


?>
