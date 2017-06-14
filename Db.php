<?php

/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 14.06.17
 * Time: 14:27
 */
class Db
{
    private $host = 'localhost';
    private $dbName = 'search';
    private $userName = 'root';
    private $password = '1';

    public function instance()
    {
        return $dbHandler = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->userName, $this->password);
    }
}