<?php

namespace App\handlers;


class MainHandler {


    public static function supports()
{
  return static::EXTENSIONS;
}

public function nameF()
{
  return get_class($this);
}


}


