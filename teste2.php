<?php
echo '<pre>';
session_start();
echo 'o primeiro valor é '. $_SESSION['chave']. ' o segundo '. $_SESSION['chave2'];
echo '</pre>';