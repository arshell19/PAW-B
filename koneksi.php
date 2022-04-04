<?php
  $host ="localhost";
  $user ="root";
  $password =""; 
  $database ="arshelia";
  $koneksi = mysqli_connect($host, $user, $password, $database);
  if(!$koneksi){
      echo "Koneksi gagal";
  }
?>