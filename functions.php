<?php

define("CORPORATE", "./corporate_slide");
define("WHATEVER", "./whatever_slide");

function getImgList($_dir) {
    $dir = $_dir;

    // Ouvre un dossier bien connu, et liste tous les fichiers
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                if ($file != ".." AND $file != ".") {
                    $aReturn[] = "{$dir}/{$file}";
                }
            }
            closedir($dh);
        }
    }
    return $aReturn;
}

function getRandomImg($_current_slide) {
    if ( $_current_slide % 2 == 0 ) 
        return getRandomImgByType($_SESSION['slide']['whatever']);
    return getRandomImgByType($_SESSION['slide']['corporate']);

}

function getRandomImgByType(&$_array) {
    $key = array_rand($_array);
    $img = $_array[$key];
    unset($_array[$key]);
    return $img;
}
?>
