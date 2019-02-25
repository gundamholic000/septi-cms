<?php
include "../../../source.php";

$nama = $_POST['NAMA'];
$email = $_POST['EMAIL'];
$hp = $_POST['HP'];
$alamat = $_POST['ALAMAT'];

echo $nama.$email.$hp.$alamat;

$db = new BismillahSource();

$db->InputAlamat($nama,$email,$hp,$alamat);


?>