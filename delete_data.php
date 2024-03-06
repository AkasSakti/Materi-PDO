<?php
try{
  $dbh = new PDO("mysql:host=localhost;dbname=karyawan", "root", "");

  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $result = $dbh->query("DELETE FROM jabatan WHERE id_jabatan=3");

  echo $result->rowCount()." berhasil dihapus.";

  $dbh = null;
}
catch (PDOException $error){
  die("Koneksi/query bermasalah: ". $error->getMessage());
}
?>