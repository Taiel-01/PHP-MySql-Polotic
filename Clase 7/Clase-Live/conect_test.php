<?php
session_start();
$conn = mysql_connect(
    'localhost',
    'root',
    '',
    'test'
);
if (isset($conn)){
    echo "conexion exitosa";
}
?>