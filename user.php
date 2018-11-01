<?php
/**
 * Created by PhpStorm.
 * User: Luis Eduardo
 * Date: 30/10/2018
 * Time: 18:56
 */
include_once "db.php";

class User extends DB{

    function getUsers(){
        $query = $this->connect()->query("select * from tbl_user;");

        return $query;
    }

    function  getUserById($id_user){
        $query = $this->connect()->prepare('select * from tbl_user where id_user = :id_user');
        $query->execute(['id_user' => $id_user]);

        return $query;
    }

    function addUser($user){
        $query = $this->connect()->prepare('insert into tbl_user (name_user,mail) values (:name_user, :mail)');
        $query->execute(['name_user' =>$user['name_user'],
                            'mail' => $user['mail']
        ]);
        return $query;
    }
}