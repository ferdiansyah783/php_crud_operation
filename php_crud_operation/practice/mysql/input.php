<?php

include 'connection.php';

$input=$db->exec("insert into siswa(nama,job) values('".$_POST["nama"]."','".$_POST["job"]."')");

if ($input){
    header("Location:index.php ");
}