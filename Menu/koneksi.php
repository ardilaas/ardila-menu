<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "Menu"; 

$kon = new mysqli($host, $username, $password, $database);

if ($kon->connect_error) {
    die("Koneksi gagal: " . $kon->connect_error);
}
$sqlTableMenu = "CREATE TABLE if not exists Menu (
    menu_id  int auto_increment not null primary key,
    nama_menu VARCHAR(95) not null,
    harga int(12) not null,
    deskripsi varchar(2000)not null,
    foto VARCHAR(75) not null default'')";
    mysqli_query($kon, $sqlTableMenu) or die ("Gagal buat Table Menu");

?>
