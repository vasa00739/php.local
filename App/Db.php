<?php

namespace App;


class Db
{
    private $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=localhost;dbname=test', 'root', '');
    }

    public function query($sql, $class_name, $placeholder = '')
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($placeholder);
        if (false !== $res)
        {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class_name);
        }
        return $res;
    }


}