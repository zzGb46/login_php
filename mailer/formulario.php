<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="envia-email.php" method="POST">
        <label for="Nome">Nome</label><br>
        <input type="text" name="nome" required><br>

        <label for="Sobrenome">Sobrenome</label><br>
        <input type="text" name="sobrenome" required><br>

        <label for="E-mail">E-mail</label><br>
        <input type="email" name="email" required><br>

        <label for="E-mail">E-mail destinatário</label><br>
        <input type="email" name="destinatario" required><br>

        <label for="">Mensagem</label><br>
        <textarea name="mensagem" required></textarea><br>

        <input type="submit" name="Enviar">
    </form>
</body>

</html>