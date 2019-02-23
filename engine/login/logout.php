<?php
session_start();
session_destroy();

echo "<script>alert('Anda Sudah Logout dar halaman Administrator');window.location='index.php';</script>";

?>