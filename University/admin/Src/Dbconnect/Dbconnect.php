<?php

namespace App\Dbconnect;

use PDO;
class Dbconnect
{
    protected $dbhost = "localhost";
    protected $dbname = "uvmanagement";
    protected $dbuser = "root";
    protected $dbpass = "";
    protected $pdo;

    public function __construct()
    {
        if (!isset($this->pdo)){
            try{
                $db = new PDO("mysql:host=".$this->dbhost.";dbname=".$this->dbname,$this->dbuser,$this->dbpass);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->pdo = $db;
            } catch (PDOException $e){

            }
        }
    }

}