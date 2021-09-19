<?php

/*	Constant
--------------------------------------------------------------*/

define('LOCATION', 'http://'.$_SERVER['SERVER_NAME'].str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace(DIRECTORY_SEPARATOR, '/', realpath(dirname(__FILE__)."/.."))).'/', true);


/* SSL */
$ssl = str_replace('http', 'https', LOCATION);
if(empty($_SERVER['HTTPS'])) define('LOCATION_FILE', LOCATION, true);
else define('LOCATION_FILE', $ssl, true);


/* normalPages */
$normalPageList = array(
	'copy',				#コピー1　(copy/index.php)
	'copy__copy',		#コピー2 (copy/copy.php)
	'copy_copy',		#コピー3 (copy/copy/)
	'copy_copy__copy'	#コピー4 (copy/copy/copy.php)
);


/* sslPages */
$sslPageList = array(
	'contact'			#お問い合わせ
);

definitionLink($normalPageList,false);
definitionLink($sslPageList,false); //本番環境ではtrue


/* Reservations */
define('LOCATION_RSV', '', true);
define('LOCATION_PLAN', '', true);
define('LOCATION_CHANGE', '', true);
define('LOCATION_CANCEL', '', true);
define('LOCATION_LOGIN', '', true);


/* リンク振り分け */
if(!$phone) {
	//pcSite
	define('LOCATION_XXX', '', true);
}else {
	//spSite
	define('LOCATION_XXX', '', true);
}


/* Other */
define('LOCATION_TEL','tel:00000000000',true);


?>
