<?php
/*
   Algorithm required to connect to the Database
*/

// connecting to the Database
$connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if(!$connection){
  die("Couldn't connect due to: " . $connection->error());
  return false;
}else{
  echo "All is good, Bro!";
  return $connection;
}
