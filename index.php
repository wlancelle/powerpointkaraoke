<?php
session_start();

require_once("functions.php");

if (!isset($_SESSION['slide'])) {
    $_SESSION['slide']['corporate'] = getImgList(CORPORATE);
    $_SESSION['slide']['whatever'] = getImgList(WHATEVER);
} else {
    if(count($_SESSION['slide']['whatever']) == 0) $_SESSION['slide']['whatever'] = getImgList(WHATEVER);
    if(count($_SESSION['slide']['corporate']) == 0) $_SESSION['slide']['corporate'] = getImgList(CORPORATE);
}

if ( isset($_GET['reset']) && isset($_SESSION['tpl'])) {
    unset($_SESSION['tpl']);
}

if (isset($_GET['slide'])) $_SESSION['current_slide'] = $_GET['slide']; 
else unset($_SESSION['tpl']);

if ( count($_POST) > 0 ) {
    $_SESSION['subject'] = $_POST['subject']; 
    $_SESSION['nb_slide'] = $_POST['nb_slide']; 
    $_SESSION['nb_sec'] = $_POST['nb_sec']; 
    $_SESSION['tpl'] = "slide";
}

if (isset($_SESSION['tpl']) && $_SESSION['tpl'] == "slide") {
    $stop = false;
    if ($_SESSION['current_slide'] > $_SESSION['nb_slide']) $stop = true;
    $slide = getRandomImg($_SESSION['current_slide']);
}

$tpl = "index";
if (isset($_SESSION['tpl'])) $tpl = $_SESSION['tpl'];

include("{$tpl}.tpl.php");

?>
