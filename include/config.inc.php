<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', 'root');
define('DB', 'romenys');

function connect(){
  return mysqli_connect(HOST, USER, PASSWORD, DB); //bool
}

?>
