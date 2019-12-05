<?php

        $support = [];
         $ext = [
            '\App\handlers\TextHandler',
            '\App\handlers\DirectoryHandler',
            '\App\handlers\ArhivHandler',   
         ];

         foreach($ext as $handler){
           $support = $support + array_fill_keys($handler::supports(), $handler);
         }

$ext = substr(strrchr($nameFile, "."), 1);
$extensionHandler = $support[$ext] ?? $support[''];

echo $extensionHandler;

$handler = new $extensionHandler;
//echo('<br>'.$handler->nameF());