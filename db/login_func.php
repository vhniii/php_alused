<?php


function htmlFromFile($fileName){

    $fileName = $fileName.'.html';
    $fp = fopen($fileName, 'r');
    $content = fread($fp, filesize($fileName));
    fclose($fp);
    return $content;

}