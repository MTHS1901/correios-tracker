<?php
$action = $_GET['action'];
$user = $_GET['user'];
$event = $_GET['event'];

if($action=="view" && $user != ""){

    if( strpos(file_get_contents("data/".$user),$event) !== false) {
        echo "evento já visto pelo usuário";
    } else {
        file_put_contents("data/".$user, $event.";", FILE_APPEND);
        echo "evento visto e salvo";
    }
}

if($action=="get" && $user != ""){
    echo file_get_contents("data/".$user);
}


?>