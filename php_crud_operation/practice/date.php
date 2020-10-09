<?php

// echo date('m/d/Y',strtotime('bulan selanjutnya'));
// echo ":";
// echo date('m/d/Y',strtotime('saturday'));

$date="06/32/2020";
$result=explode("/",$date);
// var_dump($result);
// var_dump(checkdate($result[1],$result[0],$result[2]));

// echo date('l jS \of F Y h:i:s A');
date_default_timezone_set('Asia/Jakarta');
echo date('d/m/Y h:i:s:a');
