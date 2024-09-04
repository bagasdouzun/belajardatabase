<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "smk2024";
$conn = new mysqli($host,$user,$pass,$db_name);
if ($conn->connect_error){
    die("Gagal Koneksi".$conn->connect_error);
}
?>