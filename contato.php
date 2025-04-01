<?php
  include ('conexao.php');
$mensagem ="Preencha os dados do formulario";
$nome = "";
$email = "";
$msg = "";
if(isset($_POST['nome'], $_POST['email'], $_POST['msg'])){
  
    $nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $msg = mysqli_real_escape_string($mysqli, $_POST['msg']);

$sql = "INSERT INTO tb_contato(nome, email, msg)
values(
'$nome',
'$email',
'$msg')";
$resultado = $mysqli->prepare($sql);
$resultado->execute();

}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>

<body>
    <main>
        <form method="POST">
            <div id="form">
                <label>Nome</label>
                <input type="text" name="nome" required />
                <label>E-mail</label>
                <input type="email" name="email" required />
                
                <label>Mensagem</label>
                <textarea name="msg"></textarea>
                <button type="submit">Enviar</button>
            </div>
        </form>
        <div class="mensagem">
            <?=$mensagem ?>
        </div>
    </main>
</body>

</html>