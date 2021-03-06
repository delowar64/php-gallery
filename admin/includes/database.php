<?php

require('config.php');

class Database{
    public $connection;

    function __construct(){
        $this->open_db_connection();
    }

    public function open_db_connection(){
        $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if(mysqli_connect_errno()){
            die('Database connection failed badly'. mysqli_error());
        }
    }
}

$db = new Database();