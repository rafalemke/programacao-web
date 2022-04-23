<?php
require "validar-acesso.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema para adicionar Notas</title>
  <link rel="stylesheet" href="./css/index.css">
</head>

<body>
  <div class="container">
    <nav>
      <ul>
        <li>
          <a href="home-sistema.php">Tela inicial</a>
        </li>

        <li>
          <a href="logoff.php">Sair</a>
        </li>
      </ul>
    </nav>
    <header>
      <div class="center">
        <img src="./img/icone-empresa.jpg" />
      </div>

    </header>

    <main>
      <section>
        <h3>Menu</h3>
        <p>
          Aqui você consegue adicionar as notas.
        </p>
      </section>
      <section>
        <a href="cadastro-notas.php">
          <img src="./img/notas.svg " width="50px" height="50px" />
          Cadastrar Notas
        </a>
      </section>
      <br>
      <section>
        <a href="historico-notas.php">
          <img src="./img/historico.svg" width="50px" height="50px" />
          Histórico de Notas
        </a>
      </section>



    </main>



  </div>
</body>

</html>