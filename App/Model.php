<?php


namespace App;


abstract class Model
{
    const TABLE = '';

    public $id;

    public static function findAll()
    {
        $db = new Db();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            static::class
        );
    }


    public static function findById($id)
    {
        $db = new Db();
        return $db->query(
            'SELECT * FROM ' . static::TABLE .
            ' WHERE id = :id',
            static::class,
            array('id' => $id)
        );
    }

    public function insert()
    {

        $db = new Db();

        $columns = [];
        foreach ($this as $key => $value)
        {
            if ("id" == $key)
                continue;
            $columns[$key] = '\''.$value.'\'';
        }

        echo "INSERT INTO " . static::TABLE .
             " (". implode(', ', array_keys($columns)) .")
            VALUES (". implode(', ', $columns) .")";
        var_dump($columns);
        die();
    }


}