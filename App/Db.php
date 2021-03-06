<?php

namespace App;

class Db
{

    use Singleton;

    private $dbh;

    protected function __construct()
    {
        $this->dbh = new \PDO('mysql:host=localhost;dbname=test', 'root', '');
    }


    public function execute($sql, $parameters = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($parameters);
        return $res;
    }

    public function query($sql, $class_name, $parameters = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($parameters);
        if (false !== $res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class_name);
        }
        return $res;
    }

    public function getLastInsertId()
    {
        return $this->dbh->lastInsertId();
    }

    public function getError()
    {
        return $this->dbh->errorInfo();
    }
}