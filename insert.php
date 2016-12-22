<?php
$mysqli = mysqli_connect("localhost","farmsystem","mike","farmsystem");
// echo $mysqli;
// $mysqli = new mysqli('localhost','farmsystem','farmsystem','farm_system');
// $data =json_decode(file_get_contents("php://input"));
// echo serialize($data);
// $tagid = mysqli_real_escape_string($mysqli, $data->firstName);
// $dob = mysqli_real_escape_string($mysqli, $data->lastName);

// $mysqli = mysqli_connect('localhost','farmsystem','farmsystem','farm_system');
// mysqli_query($mysqli, "INSERT INTO test('valueone', 'valuetwo')VALUES('".$tagid."', '".$dob."')");
$query = mysqli_query($mysqli, "INSERT INTO test('valueone', 'valuetwo')VALUES('dsfds', 'fdfds')");

echo $query;
?>
