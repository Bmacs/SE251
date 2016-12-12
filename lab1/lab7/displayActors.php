<?php
require ("actordb.php");


$data = json_decode($_POST['data'], true);
echo $data;

$Fname = $data["Fname"];
$Lname = $data["Lname"];
$dob = $data["dob"];
$gender = $data["gender"];
$genre = $data["genre"];



echo $Fname;
echo $Lname;
echo $dob;
echo $gender;
echo $genre;

try {
  $ct = $db->prepare("INSERT INTO actorstable (Fname, Lname, dob, gender, genre) VALUES (:Fname, :Lname, :dob, :gender, :genre) ");
  $ct->bindParam(':Fname', $Fname, PDO::PARAM_STR);
  $ct->bindParam(':Lname', $Lname, PDO::PARAM_STR);
  $ct->bindParam(':dob', $dob, PDO::PARAM_STR);
  $ct->bindParam(':gender', $gender, PDO::PARAM_STR);
  $ct->bindParam(':genre', $genre, PDO::PARAM_STR);
  $ct->execute();
  echo "Success";
} catch (PDOException $e) {
  echo "Could not connect to database";
}



?>
