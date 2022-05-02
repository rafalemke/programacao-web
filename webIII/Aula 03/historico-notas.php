<?php
require "validar-acesso.php";
require "notas-alunos.php";
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
          <a href="home-sistema.php">Tela Inicial</a>
        </li>
        <li>
          <a href="logoff.php">Sair</a>
        </li>
      </ul>
    </nav>
    <header>
      <div class="center">
        <img id="imglogin" src="./img/historico.png" />
        <h1>Histórico de Notas</h1>
      </div>
      <header>
        <table class="table table-success">
          <tr class="table-primary">
            <th>Nome do(a) Aluno(a)</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Média</th>


            <?php foreach ($dados_alunos as $nota) {
              $dados_notas = explode('#', $nota);

            ?>


          <tr>

            <?php


              if ($dados_notas[3] < 7) {

                echo "<td class='table-danger'>";
                echo $dados_notas[0];
                echo "</td>";
                echo "<td class='table-danger'>";
                echo $dados_notas[1];
                echo "</td>";
                echo "<td class='table-danger'>";
                echo $dados_notas[2];
                echo "</td>";
                echo "<td class='table-danger'>";
                echo $dados_notas[3];
              } else {
                echo "<td>";
                echo $dados_notas[0];
                echo "</td>";
                echo "<td>";
                echo $dados_notas[1];
                echo "</td>";
                echo "<td>";
                echo $dados_notas[2];
                echo "</td>";
                echo "<td>";
                echo $dados_notas[3];
                echo "</td>";
              }
            ?>
          </tr>
  </div>
<?php } ?>
</table>
<div class="center">
  <a class="btn btn-dark" href="home-sistema.php">Voltar</a>
</div>

</div>

</body>

</html>