<?php

$user = strtolower($_GET['user']);
$password = strtolower($_GET['password']);
$action = $_GET['action'];
$user_encoded = base64_encode($user);
$error = false;

if(strlen($user) < 6){
    $error = "Nome de usuário deve conter ao menos 6 caracteres.";
}
if(strlen($password) < 6){
    $error = "A senha deve conter ao menos 6 caracteres.";
}


if($action=="login" && $user != "" && $password != ""){
    $verifica = file_get_contents('users/'.$user_encoded);
    if($verifica==$password){
        // user existe
        echo "OK";
    } else {
        echo "Usuário ou senha incorreto.";
    }
}

if($action=="register" && $user != "" && $password != "" && $error == false){
    $verifica = file_get_contents('users/'.$user_encoded);
    if($verifica!=""){
        // ja existe cadastro com email
        echo "Nome de usuário já cadastrado, use outro.";
    } else {
        // realiza o cadastro
        file_put_contents('users/'.$user_encoded, $password);
        echo "OK";
    }
}

if($error!=false){
    echo $error;
}
?>