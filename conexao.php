<?php
// echo '<pre>';

$host ='localhost:3306';
$user = 'root';
$pass= '';
$db ='db_login';

$pdo = new PDO("mysql:dbname=$db;host=$host", "$user", "$pass");
// $mysqli = new mysqli($host, $user, $pass, $db);


function foi2(){
    global $pdo;
    $query = $pdo->query("SELECT * from tb_user");
    $resultado = $query->fetchAll();
    return $resultado;
}
var_export(foi2());

// echo '</pre>';