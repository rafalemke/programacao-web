<?php
session_start();
$usuario_auten = false;


$usuarios = array(
  array('email' => 'adm@teste.com', 'senha' => '123456'),
  array('email' => 'user@teste.com', 'senha' => 'abcdef'),
  array('email' => 'professora@teste.com', 'senha' => '654321'),

);

foreach ($usuarios as $user) {
  if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
    $usuario_auten = true;
  }
}

if ($usuario_auten) {
  $_SESSION['autenticado'] = 'S';
  header('Location:home-sistema.php');
  //print_r($_POST);
} else {
  $_SESSION['autenticado'] = 'N';
  header('Location:login.php?login=erro1'); //usada para enviar cabeçalho bruto
}
