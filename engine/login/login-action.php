<?php
//session_start();
include "../../source/source.php";

$email = $_POST['EMAIL'];
$pass  = $_POST['PASS'];


//$_SESSION['EMAIL'] = $email;
//echo $email.$pass

$db = new BismillahSource();

$db->LoginAdmin($email,$pass);

?>