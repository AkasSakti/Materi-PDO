<?php
try{
  $dbh = new PDO("mysql:host=localhost;dbname=karyawan", "root", " ");

  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $dbh = null;
}
catch (PDOException $error){
  die("Koneksi Gagal: ". $error->getMessage());
}
?>