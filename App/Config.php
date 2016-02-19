<?php
/**
 * Created by PhpStorm.
 * User: Neo
 * Date: 19.02.2016
 * Time: 19:43
 */

namespace App;

class Config
{
    public $data;

    use Singleton;

    # инициализация конфига

    private function __construct()
    {
        $this->load();
    }

    private function load ()
    {
        $data = include 'App/Config/local.php';
        foreach ($data as $section => $section_name)
        {
            foreach ($section_name as $key => $value)
            $this->data[$section][$key] = $value;
        }
    }



}