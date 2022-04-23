<?php
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
echo "<hr>";
if ($_POST['operacoes'] == "+") {
  echo "Resultado da Soma: " . "<b/>" . $n1 + $n2 . "</b>";
}
if ($_POST['operacoes'] == "-") {
  echo "Resultado da Subtração: " . "<b/>" . $n1 - $n2 . "</b>";
}
if ($_POST['operacoes'] == "*") {
  echo "Resultado da Multiplicação: " . "<b/>" . $n1 * $n2 . "</b>";
}
if ($_POST['operacoes'] == "/") {
  echo "Resultado da Divisão: " . "<b/>" . $n1 / $n2 . "</b>";
}
echo "<hr>";
