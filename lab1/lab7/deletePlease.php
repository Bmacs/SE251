<?php
require ("actordb.php");

$pid = $_POST['pId'];

try {
  $ct = $db->prepare("DELETE FROM actorstable WHERE id=:pId");
  $ct->bindParam(':pId', $pid, PDO::PARAM_STR);
  $ct->execute();
  echo returnAllActors();
} catch (PDOException $e) {
  echo "Could not connect to database";
}




?>
