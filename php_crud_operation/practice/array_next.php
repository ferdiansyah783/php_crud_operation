<?php

$data=["one","two","three"];

// echo current($data);
// echo next($data);
// echo next($data);
// echo current($data);
// echo next($data);

for($x=0;$x<count($data);$x++){
    echo next($data);
}