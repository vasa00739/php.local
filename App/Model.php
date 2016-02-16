<?php


namespace App;


abstract class Model
{
    const TABLE = '';

    public $id;

    public static function findAll()
    {
        $db = Db::getInstance();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            static::class
        );
    }


    public static function findById($id)
    {
        $db = Db::getInstance();
        return $db->query(
            'SELECT * FROM ' . static::TABLE .
            ' WHERE id = :id',
            static::class,
            array('id' => $id)
        );
    }

    public function save()
    {
        if ('NULL' == $this->id)
            $this->insert();
        else echo "Объект существует";
    }

    public function insert()
    {

        // формируем массив из объеста
        // для формирования запроса к базе формата
        // array [col1, col2, col3]
        // $array[:col1 => col1, :col2 => col2 :col3 => col3)
        foreach ($this as $key => $value)
        {
            if ("id" == $key)
                continue;
            $columns[] = $key;
            $parameters[':'. $key] = $value;
        }

        // подготавливаем запрос на добавление записи в формате
        // INSERT INTO table.name (col1, col2, col3) VALUES (:col1, :col2, :col3)
        $sql =
            'INSERT INTO ' . static::TABLE . '
            (' . implode(", ", $columns) .')
            VALUES (' . implode(', ', array_keys($parameters)) .')
            ';

        $db = Db::getInstance();
        if ('TRUE' == $db->execute($sql, $parameters))
        {
            // присваем значение Id объекта АвтоИнкрементом из базы данных
            $this->id = (int) $db->getLastInsertId();
        }
    }


}