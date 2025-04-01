<?php
echo '<pre>';

$host ='localhost:3307';
$user = 'root';
$pass= '';
$db ='db_login';

$mysqli = new mysqli($host, $user, $pass, $db);

function foi(){
    global $mysqli;
    $query = $mysqli->query("SELECT senha from tb_user");
    $resultado = $query->fetch_assoc();
    return $resultado;
}
var_export(foi());

echo '</pre>';