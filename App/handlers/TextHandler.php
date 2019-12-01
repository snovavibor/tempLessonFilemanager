<?php

namespace App\handlers;

use App\handlers;
include_once 'MainHandler.php';



class TextHandler extends MainHandler {

    const  EXTENSIONS = ['txt'];

    public $arr;

     public function __construct()
     {
         $this->arr = ($this->supports()) ;
     }
}

$t = new TextHandler();
echo('расширение '.$t->arr[0]); 