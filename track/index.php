<?php
header('Access-Control-Allow-Origin: *');
    echo file_get_contents("https://proxyapp.correios.com.br/v1/sro-rastro/".$_GET['cod']);
?>

