<?php

$user = strtolower($_GET['user']);
$password = strtolower($_GET['password']);
$action = $_GET['action'];
$user_encoded = base64_encode($user);

if($action=="login" && $user != "" && $password != ""){
    $verifica = file_get_contents('users/'.$user_encoded);
    if($verifica==$password){
        // user existe
        echo "OK";
    } else {
        echo "Usuario não cadastrado";
    }
}

if($action=="register" && $user != "" && $password != ""){
    $verifica = file_get_contents('users/'.$user_encoded);
    if($verifica!=""){
        // ja existe cadastro com email
        echo "Já existe um usuário com este email";
    } else {
        // realiza o cadastro
        file_put_contents('users/'.$user_encoded, $password);
        echo "OK";
    }
}

?>