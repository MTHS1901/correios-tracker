<?php
// header('Access-Control-Allow-Origin: *');
date_default_timezone_set('America/Sao_Paulo'); // TIMEZONE SP/BRAZIL

$date= date('d-m-Y'); // DATE FORMAT
$old_counter = file_get_contents('visits/logs_'.$date.'.txt'); // GET STORED COUNTS FROM TEXT FILE
$e= $old_counter + 1; // COUNT +1

file_put_contents('visits/logs_'.$date.'.txt', $e); // STORE IN TEXT FILE
echo "OK!";


$dir = 'visits/';
  $deleted = 0;
  foreach (glob($dir."*") as $file) {
  if(time() - filectime($file) > 518400){
      unlink($file);
      ++$deleted;
      echo "<br>" . $deleted . " file " . $file . " deleted";
      }
  }


?>