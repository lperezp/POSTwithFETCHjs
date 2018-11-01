<?php

include_once 'apiUser.php';

$api = new apiUser();

if(isset($_POST['name_user'])&& isset($_POST['mail'])){
    $item = array(
        "name_user" => $_POST['name_user'],
        "mail" => $_POST['mail']
    );
    $api->addUser($item);
}else{
    $api->error("Error al registrar.");
}
