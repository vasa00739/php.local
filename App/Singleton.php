<?php


namespace App;


trait Singleton
{
    private static $_instance = null;

    private function __construct()
    {
    }

    static public function getInstance()
    {
        if (is_null(self::$_instance))
        {
            self::$_instance = new self;
        }
        return self::$_instance;
    }
}