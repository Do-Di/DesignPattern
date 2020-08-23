<?php
class Connection {
    private static $instance= null;
    private $con;
    private $hostName = 'localhost';
    private $userName = "root";
    private $passWord ="";
    private $databaseName = "dodi";

    private function __construct()
    {
        $this->con = mysqli_connect($this->hostName, $this->userName, $this->passWord, $this->databaseName);
        if (!$this->con) {
            exit('Kết nối không thành công!');
        }
    }

    public static function getConnection() {
        if(!self::$instance)
        {
            !self::$instance = new Connection();
        }
        return self::$instance;
    }
}

$con= Connection::getConnection();
var_dump($con);