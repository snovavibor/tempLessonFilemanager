<?php

namespace App\handlers;

use \App\handlers;

include_once 'MainHandler.php';


class DirectoryHandler extends MainHandler {

    const EXTENSIONS = [''];


    public function __construct()
    {
        $this::getNextDirectory();
    }
    

    public static function getNextDirectory()
    {
      //return  $nextDir = dirOpen($_POST['pathTo']) ;
      if(isset($_POST['pathTo'])){

            $catalog = $_POST['pathTo'] ?? cutOfPath($startPath,'/');

            foreach(dirOpen($catalog) as $item){
            include 'App/views/viewRes.php';
        }

        }
    } 
    
    
    
}


