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
          <a href="index.php">Home</a>
        </li>
        <li>
          <a href="login.php">Login</a>
        </li>
      </ul>
    </nav>

    <div class="center">
      <img id="imglogin" src="./img/usuario.jpg" />
      <h1>Cadastro</h1>
    </div>


    <form class="contato-form">

      <div>
        <label for="text">Nome</label>
        <input type="text" name="nome" required>
      </div>
      <div>
        <label for="email">E-mail:</label>
        <input type="email" name="email" required>
      </div>
      <div>
        <label for="text">Senha</label>
        <input type="password" name="senha" required>
      </div>

      <a href="login.php">Já tem cadastro? Faça seu login</a>
      <button type="button" class="btn btn-dark">Cadastrar</button>





    </form>
  </div>
</body>

</html>