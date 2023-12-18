<?php
define("_GUVENLIK", true);
session_start();
ob_start();
include("includes/languages.php");
include("includes/header.php");
include("includes/menu.php");
include("includes/pages.php");
include("includes/footer.php");
ob_end_flush();
?>

