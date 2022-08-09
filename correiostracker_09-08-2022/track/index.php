<?php
header('Access-Control-Allow-Origin: *');
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
echo file_get_contents("https://proxyapp.correios.com.br/v1/sro-rastro/".$_GET['cod']);
?>
