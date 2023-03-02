<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Mensagens</title>
</head>
<body>
  <h1 class="texto-1">Escreva sua Mensagem!</h1>
  <form class = "formulario" action="process.php" method="POST">
    <input id = "barra" type="text" name="message" id="message">
    <input id = "texto-formulario" type="submit" value="Enviar Mensagem">
  </form>
</body>
</html>