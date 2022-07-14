<?php 
/* INI_SET("session.cookie_domain", ".tcs-agri.org"); */
INI_SET("session.cache_expire", 3600);
INI_SET("session.gc_maxlifetime", 3600);
ini_set('session.use_trans_sid', 0);

ob_start();

error_reporting(E_ALL);
ini_set("display_errors", true);

SESSION_START();

//주소분할
$Route = str_replace("?".$_SERVER['QUERY_STRING'], "", $_SERVER["REQUEST_URI"]);
$arrRoute = explode("/", str_replace("?".$_SERVER['QUERY_STRING'], "", $_SERVER["REQUEST_URI"]));

$InitPage = $arrRoute[1];
if(empty($arrRoute[1]))
{
    $InitPage = "main";
}

include $_SERVER["DOCUMENT_ROOT"]."/public/".$InitPage.".php";
?>