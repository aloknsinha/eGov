<?php
include("header.php");
include("config.php");
session_start();
require_once("DBforpdf.php");
$cur_user = $_SESSION['t'];
echo "$cur_user";
?>

