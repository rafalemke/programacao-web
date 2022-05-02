<?php
session_start();
if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'S') {
  header('Location:index.php?login=erro2');
}
//Isset: para saber se a variável está definida
