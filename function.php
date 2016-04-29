<?php
include("config.php");


function checkIfUserExists($user){
global $conn;
$sql = "SELECT * FROM users WHERE user=?";
$query = $conn->prepare($sql);
$query->bind_param('s',$user);
$query->execute();
$query->store_result();
if ($query->num_rows > 0) {
return true;
} else{
return false;
}
$query->close();
}

//registracija funckija
function dodajKorisnik($user, $pass)
{
global $conn;
if(!checkIfUserExists($user)){
$insert = "INSERT INTO users (user,pass) VALUES
(?,?)";
$query = $conn->prepare($insert);
$query->bind_param('ss',$user,md5($pass));
$query->execute();
$query->close();
return 1;
} else{
return 0;
}
}

function proveriKorisnika($user, $pass){
global $conn;
$sql = "SELECT * FROM users WHERE user=? AND pass=?";
$query = $conn->prepare($sql);
$query->bind_param('ss',$user,md5($pass));
$query->execute();
$query->store_result();
if ($query->num_rows > 0) {
return 1;
} else{
return 0;
}
$query->close();
}



?>