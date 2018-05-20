<?php 
session_start();
require_once __DIR__. "/../library/database.php";
require_once __DIR__. "/../library/function.php";
$db = new Database;
define("ROOT", $_SERVER['DOCUMENT_ROOT']."/Photo-Story/food/");
$thang = $db -> fetchAll("thang");
$picture = $db -> fetchAll("thunbar");
?>