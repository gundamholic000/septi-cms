<?php
//session_start();
class BismillahSource{

    function Koneksi(){

        $con = mysqli_connect("localhost","root","septiyo23","septi-cms");
        if (mysqli_connect_errno())
        {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        return $con;

    } 

    function TesTampil(){
        //include "koneksi.php";
       

        $sql = "select * from userx";
        $hasil = mysqli_query($this->Koneksi(),$sql);
        $result=mysqli_fetch_assoc($hasil);
        echo $result["USER"];
  
        //return $oke;

    }

    function LoginAdmin($x,$z){
        //session_start();
        //echo "dari Class ".$x.$z;

        $sql = "select * from userx where EMAIL = '$x' AND PASS = '$z'";
        //echo $sql;
        $hasil = mysqli_query($this->Koneksi(),$sql);
        $result=mysqli_fetch_assoc($hasil);
        $hak  = $result['HAK'];               
        $user = $result['USER'];               

         setcookie('HAK', $hak, time()+86400, '/septi-cms', '');
         setcookie('USER', $user, time()+86400, '/septi-cms', '');
         setcookie('EMAIL', $x, time()+86400, '/septi-cms', '');
        //echo $hak;
         //exit();
         //$_SESSION["HAK"] = $hak;

        //echo "ini adalah Session = ".$_SESSION["HAK"];
        //exit();

        if($result != ""){

            echo "<script>window.location='../adminjos/xtreme-html/ltr/index.php';</script>";  

        }
        else{

            echo "<script>alert('Maaf Email atau Password anda masih Salah...!, mohon Coba kembali')</script>";
            echo "<script>window.location='../login/index.php';</script>";
        }
        //echo $result['USER'];


    }

    function InputAlamat($w,$x,$y,$z){

        $sql = "insert into alamat_toko set NAMA_TOKO = '$w',
                                                EMAIL = '$x',
                                                HP    = '$y',
                                                ALAMAT_LENGKAP = '$z'";
        //echo $sql;
        $hasil = mysqli_query($this->Koneksi(),$sqls);
       
      
        if($hasil){
            echo "<script>alert('Save Alamat Berhasil..')</script>";
            echo "<script>window.location='index.php';</script>";  

        }
        else{

            echo "<script>alert('Save tidak berhasil, cek koneksi anda....!, mohon Coba kembali')</script>";
            echo "<script>window.location='alamat-baru.php'</script>";
        }
        //echo $result['USER'];

    }
    
    
   // $this->
    
}//class end

//$db = new Database();

//$db->TesTampil();
//$db->Koneksi();

?>