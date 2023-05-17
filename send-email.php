<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Aqui você pode adicionar a lógica para enviar o email

  // Exemplo básico de exibição dos dados enviados
  echo "Nome: " . $name . "<br>";
  echo "Email: " . $email . "<br>";
  echo "Mensagem: " . $message . "<br>";
}
?>
