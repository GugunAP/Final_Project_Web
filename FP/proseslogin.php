<?php

include "koneksi.php";
session_start();

$npm = $_POST['npm'];
$password = $_POST['password'];

// $query1 =  $link->query("select * from register where username='$username' and password='$password' and approve='1'");
// $query1 = $link->query("select * from registrasi where username='$username' and pass='$password'");
$login = mysqli_query($koneksi,"select * from admin where npm='$npm' and password='$password'");
$cek = mysqli_num_rows($login);
$loginuser = mysqli_query($koneksi,"select * from user where npm='$npm' and password='$password'");
$cekuser = mysqli_num_rows($loginuser);

if($cek > 0){

    echo '<script language="javascript">alert("Anda berhasil Login !"); document.location="login/masuk.php";</script>';

}
if ($cekuser > 0) {
  echo '<script language="javascript">alert("Anda berhasil Login !"); document.location="login/masukUser.php";</script>';
}
else{

    echo '<script language="javascript">alert("Anda Gagal Login !");</script>';

}


?>
