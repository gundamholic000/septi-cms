<?php
//session_start();
//session_destroy();
//setcookie('HAK', '',time() - 3600);
setcookie('HAK', '', time()-3600, '/septi-cms', '');
echo "<script>alert('Anda Sudah Logout dar halaman Administrator');window.location='index.php';</script>";

?>