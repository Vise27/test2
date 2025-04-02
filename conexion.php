<?php

function conexion(){

$host = "host=dpg-cvmpjcgdl3ps73fc1thg-a.oregon-postgres.render.com";
$port = "port=5432";
$dbname = "dbname=test_cl0q";
$user = "user=vise";
$password = "QUSW4EGVkfb83tkoVkUgQT4Qs9yR2aeY";

$db = pg_connect("$host $port $dbname $user $password");

return $db;
}
?>