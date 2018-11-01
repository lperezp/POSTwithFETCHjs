<?php
/**
 * Created by PhpStorm.
 * User: Luis Eduardo
 * Date: 30/10/2018
 * Time: 19:09
 */
include_once "apiUser.php";
$api = new apiUser();

if(isset($_GET["id_user"])){
    $id_user = $_GET["id_user"];

    if(is_numeric($id_user)) {
        $api->getUserById($id_user);
    }else{
        $api->error("Los parametros no son correctos.");
    }
}else {
    $api->getAll();
}