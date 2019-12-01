<?php

namespace App\handlers;

use \App\handlers;
include_once 'MainHandler.php';

class DirectoryHandler extends MainHandler {

    const EXTENSIONS = ['*'];

    
}

$d = new DirectoryHandler();
echo($d->supports()[0]); 