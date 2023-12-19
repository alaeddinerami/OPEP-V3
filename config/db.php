<?php

class Db
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $data_base = "opeplast";



    protected  function conn()
    {
        $dsn = "mysql:host={$this->host};dbname={$this->data_base}";
        $db = new PDO($dsn, $this->user, $this->pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }
}
