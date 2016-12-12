<?php

$username = "shop";
$password = "se266";
$dsn = "mysql:host=localhost;dbname=actordb";
$db = new PDO ($dsn, $username, $password);
try {

  $db = new PDO ($dsn, $username, $password);
} catch (PDOException $e) {
  die("There was a problem connecting to the database");
}


function returnAllActors(){
  global $db;
  try {
    $ct = $db->prepare("SELECT * FROM actorstable");
    $ct->execute();
    $results = $ct->fetchAll(PDO::FETCH_ASSOC);
    return json_encode($results);
  } catch (PDOException $e) {
    echo "Could not connect to database";
  }
}
?>
