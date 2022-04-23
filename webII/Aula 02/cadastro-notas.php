<?php
require "validar-acesso.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Sistema para adicionar Notas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/index.css">
</head>

<body>
  <div class="container">
    <nav>
      <ul>
        <li>
          <a href="home-sistema.php">Home</a>
        </li>
        <li>
          <a href="logoff.php">Sair</a>
        </li>
      </ul>
    </nav>
    <header>
      <div class="center">
        <img id="imglogin" src="./img/nota.jpg" />
        <h1>Cadastrar as Notas</h1>
      </div>
      <header>


        <form class="contato-form">

          <div>
            <label for="text">Nome do aluno</label>
            <input type="text" name="nome-aluno" required>
          </div>
          <div>
            <label for="text">Primeira Nota</label>
            <input type="text" name="nota1" required>
          </div>
          <div>
            <label for="text">Segunda Nota</label>
            <input type="text" name="nota2" required>
          </div>
          <div class="center">
            <button class="btn btn-primary" type="submit">Cadastrar</button>
          </div>





        </form>
  </div>
</body>

</html>