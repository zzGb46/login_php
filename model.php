<?php
require('conexao.php');
$query = "SELECT * from tb_user where usuario  = '$usuario' and senha = '$senha'";
 $resultado = mysqli_query($mysqli, $query);
 $total = mysqli_num_rows($resultado);