<?php
echo '<pre>';
session_start();

$_SESSION['chave'] = 'valor';
$_SESSION['chave2'] = 'valor2';
$_SESSION['chave3'] = 'valor3';

var_export($_SESSION);

echo '</pre>';