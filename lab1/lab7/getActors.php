<?php
require ("actordb.php");

try {
  $ct = $db->prepare("SELECT * FROM actorstable");
  $ct->execute();
  $results = $ct->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($results);
} catch (PDOException $e) {
  echo "Could not connect to database";
}
?>
