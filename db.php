<?php

class DB{

    private $host;
    private $db;
    private $user;
    private $pass;
    private $charset;
    public $vcon = "";

    public function __construct()
    {
        $this->host = "localhost";
        $this->db = "chat";
        $this->user = "root";
        $this->pass = "";
        $this->charset = "utf-8";
    }

    function connect()
    {
        $this->vcon = "";

        try{
            $this->vcon = new PDO("mysql:host=localhost;dbname=chat", "root", "");
            $this->vcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
        return $this->vcon;
    }
}
/**
 * Created by PhpStorm.
 * User: Luis Eduardo
 * Date: 30/10/2018
 * Time: 18:08
 */