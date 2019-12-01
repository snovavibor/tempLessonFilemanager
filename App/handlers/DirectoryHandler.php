<?php

namespace App\handlers;

use \App\handlers;
include_once 'MainHandler.php';

class DirectoryHandler extends MainHandler {

    const EXTENSIONS = ['*'];

    public $arr;

    public function __construct()
    {
       $this->arr = $this->supports();
    }
}

$d = new DirectoryHandler();
echo($d->arr[0]); 