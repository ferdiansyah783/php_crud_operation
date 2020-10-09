<?php

$db= new PDO("mysql:dbname=latihan;host=localhost","root","");
// $simpan= $db->query("insert into kelas(kelas,jurusan) values ('SMK','IPS')");

$data=$db->query("select * from kelas");
$tampil_data=$data->fetchAll();
var_dump($tampil_data);