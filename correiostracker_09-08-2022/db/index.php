<?php

if($_GET['action']=='load'){
 echo file_get_contents("data/".$_GET['user']);
}

if($_GET['action']=="save"){
    file_put_contents("data/".$_GET['user'], $_GET['data']);
    echo "OK";
}

?>