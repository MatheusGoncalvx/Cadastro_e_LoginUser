<?php
include_once('config.php');

if(isset($_POST['submit'])){
  $login = $_POST['login'];
  $senha = $_POST['senha'];

  // Consulta ao banco de dados para verificar se o login e a senha estão corretos
  $query = "SELECT * FROM usuario WHERE nome = '$login' AND senha = '$senha'";
  $result = mysqli_query($conexao, $query);
  
  // Verifica se a consulta retornou algum resultado
  if(mysqli_num_rows($result) > 0){
    // Login e senha estão corretos, redireciona para a página home.php e define a variável de sessão
    session_start();
    $_SESSION['autenticado'] = true;
    header('Location: home.php');
    exit();
  } else {
    // Login ou senha incorretos, redireciona de volta para a página de login
    header('Location: login.php');
    exit();
  }
}


?>
