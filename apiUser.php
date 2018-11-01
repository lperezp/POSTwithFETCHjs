<?php

include_once "user.php";

class apiUser{
    
    //Imprimir todos los usuarios
    function getAll(){
        $user = new User();
        $users = array();
        $users["item"]= array();

        $res = $user->getUsers();

        if($res->rowCount()){
            while($row = $res->fetch(PDO::FETCH_ASSOC)){
                $item = array(
                    'id_user' => $row['id_user'],
                    'name_user' => $row['name_user'],
                    'mail' => $row['mail']
                );
                array_push($users['item'],$item);
            }
            //echo json_encode($users);
            $this->printJSON($users);

        }else{
            //echo json_encode(array('mensaje' => 'No hay usuarios.'));
            $this->error("No hay usuarios.");
        }
    }

    //Imprimir el usuario según ID
    function getUserById($id_user){
        $user = new User();
        $users = array();
        $users["item"]= array();

        $res = $user->getUserById($id_user);

        if($res->rowCount()){
            while($row = $res->fetch(PDO::FETCH_ASSOC)){
                $item = array(
                    'id_user' => $row['id_user'],
                    'name_user' => $row['name_user'],
                    'mail' => $row['mail']
                );
                array_push($users['item'],$item);
            }
            //echo json_encode($users);
            $this->printJSON($users);

        }else{
            //echo json_encode(array('mensaje' => 'No hay usuarios.'));
            $this->error("No hay usuarios.");
        }
    }

    //Imprimir todos los Usuarios
    function addUser($element){
        $user = new User();

        $res = $user->addUser($element);
        $this->sucess("Usuario registrado.");
    }

    //Imprimir en formato JSON 
    function printJSON($array){
        json_encode($array);
    }

    //Imprimir en formato JSON el error
    function error($mensaje){
        echo json_encode(array("mensaje" => $mensaje));
    }

    //Imprimir en formato JSON la respuesta OK
    function sucess($mensaje){
       echo json_encode(array("mensaje" => $mensaje));
    }
}