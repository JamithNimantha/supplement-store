<?php
/**
 * Created by PhpStorm.
 * User: bossmanlk
 * Date: 12/3/18
 * Time: 5:16 PM
 */

class DBConnection
{
    private $host = "127.0.0.1";
    private $user = "root";
    private $password = "1234";
    private $database = "supplement_shop";
    private $port = "3306";

    private $connection;

    /**
     * DBConnection constructor.
     */
    public function __construct()
    {
        $this->connection = new mysqli($this->host, $this->user, $this->password, $this->database, $this->port);
    }

    public function getDBConnection()
    {
        return $this->connection;
    }


}