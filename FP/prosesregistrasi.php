<?php
include "koneksi.php";

$email = $_POST['email'];
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$no = $_POST['no'];
$password = $_POST['password'];

$loginuser = mysqli_query($koneksi,"select * from user where npm='$npm'");
$cekuser = mysqli_num_rows($loginuser);

if($cekuser > 0){

    echo '<script language="javascript">alert("Data Sudah Ada !"); document.location="index.html";</script>';

}
else{

  	$sql = "insert into user (email,npm,nama,no,password) values('$email','$npm','$nama','$no','$password')";
    $result = mysqli_query($koneksi,$sql);
    echo "$sql";

    echo '<script language="javascript">alert("Registrasi Berhasil !");</script>';

}

 ?>
