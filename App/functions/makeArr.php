<?php

$tempArr = \App\handlers\TextHandler::supports();
         $arr = array_fill_keys($tempArr, ['TextHandler']);  

$tempArr2 = \App\handlers\ArhivHandler::supports();
         $arr2 = array_fill_keys($tempArr2, ['ArhivHandler']);  
           
         $support = array_merge ($arr, $arr2);
    

if( isset( $support[$ext = substr(strrchr($nameFile, "."), 1)]) ){
    print_r($support[$ext]);
}else{
    echo 'DirectoryHandler';
}