<?php
// echo '<pre>';

$host ='localhost:3306';
$user = 'root';
$pass= '';
$db ='db_login';

$pdo = new PDO("mysql:dbname=$db;host=$host", "$user", "$pass");
// $mysqli = new mysqli($host, $user, $pass, $db);


// function foi2(){
//     global $pdo;
//     $query = $pdo->query("SELECT * from tb_user");
//     $resultado = $query->fetchAll();
//     return $resultado;
// }
// var_export(foi2());

 
// function meu(){
//   global $pdo;
//   $query = $pdo->query("SELECT * FROM tb_user");
//   $resolucao = $query->fetch();
//   return $resolucao;
// }
// var_export( meu());



echo '</pre>';