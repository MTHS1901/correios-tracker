<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$date = new DateTime("now", new DateTimeZone('America/Sao_Paulo') );
$y = $date->format('d-m-Y');

echo "today\n";
echo "users: " . file_get_contents('log/unique/logs_'.$y.'.txt') . "\n";
echo "views: " . file_get_contents('log/visits/logs_'.$y.'.txt') . "\n\n";

echo "users (7 days)\n";
$path    = 'log/unique/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){
  echo substr($file, 5, -4);
  echo " | ".file_get_contents('log/unique/'.$file)."\n";
}

echo "\nviews (7 days)\n";
$path    = 'log/visits/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){
  echo substr($file, 5, -4);
  echo " | ".file_get_contents('log/visits/'.$file)."\n";
}



?>