<?php
require_once __DIR__."/System_Config.php";
require_once __DIR__."/Class_function.php";
// require_once __DIR__."/Class_Pagination.php";
$tad = new TAD_VN;

function FULL_URL($path) {
    return "https://".$_SERVER['SERVER_NAME'].$path;
}
$exec = $_SERVER['REQUEST_URI'];