<?php

//initial Author: Fabian Bienz
//2018-03-06



$myFile = fopen("../Neues Textdokument.txt", "r") or die("Fail!");


$filestr = fread($myFile,filesize("../Neues Textdokument.txt"));//.str_split("", 130);

$strArray = str_split($filestr, 130);


foreach($strArray as $item) {
    echo "\n";
    echo $item;
    echo "\n";
}

echo count($strArray);

fclose($myFile);