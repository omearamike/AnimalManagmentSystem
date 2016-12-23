<?php

namespace App;

use \PDO;
use \PDOException;


class DatabaseConnection extends PDO
{
    private $user = 'farmadmin';
    private $password = 'mike';
    private $host = 'localhost';
    private $port = 3360;
    private $dbname = 'farmsystem';

    private $dsn;

    public function __construct()
    {
        $this->dsn = 'mysql:dbname=' . $this->dbname . ';host=' . $this->host . ';port=' . $this->port . '';
        try {
            parent::__construct($this->dsn, $this->user, $this->password);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    public static function make()
    {
        return new self();
    }

}
