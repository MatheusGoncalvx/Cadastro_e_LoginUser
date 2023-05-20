<?php

if(isset($_POST['cadastrar'])){

  include_once('config.php');

  $nome = $_POST['Nome'];
  $senha = $_POST['Senha'];
  $telefone = $_POST['Telefone'];
  $datadocontato = $_POST['Datadocontato'];

  $result = mysqli_query($conexao, "INSERT INTO usuario (nome, senha, telefone, data_contato)
  VALUES ('$nome', '$senha', '$telefone', '$datadocontato')");
  
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
     integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
     integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
     <title>Cadastre-se</title>
</head>
<style>
  body{
    background-image: linear-gradient(45deg, blue, black, white);
            padding: 65px;
            
  }
</style>
<body>
    <div class="container text-center">
        <div class="row">
          <div class="col-1">
            &nbsp;
          </div>
          <div class="col bg-primary">
            <nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark">
                <div class="container-fluid">
                  <a class="navbar-brand">SISTEMA WEB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
             aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
           </button>
         </div>
       </nav>
    </div>
        <div class="col-1">
            &nbsp;
          </div>
        </div>
            <div class="row">
              <div class="col-1">
                &nbsp;
              </div>
              <div class="col bg-white"><br>
                <h3 class="text-start fs-5">Crie uma conta</h3>
                <p>
                  <form action="" method="POST">
                <div class="mb-3 text-start" align="left">
                    <label for="exampleInputEmail1" class="form-label">Nome:</label>
                    <input class="form-control" name="Nome" placeholder="Insira seu nome"  id="nome" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 text-start" align="left">
                    <label for="exampleInputEmail1" class="form-label">Senha:</label>
                    <input type="password" class="form-control" name="Senha" placeholder="Crie uma senha"  aria-describedby="emailHelp" id="senha">
                </div>
                 <div class="mb-3 text-start" align="left">
                    <label for="exampleInputEmail1" class="form-label">Telefone:</label>
                    <input class="form-control" name="Telefone" placeholder="(xx)xxxxx-xxxx" aria-describedby="emailHelp" name="telefone" id="telefone">
                </div>
        <div class="mb-3 text-start" align="left">
            <label for="exampleInputEmail1" class="form-label">Data de Registro:</label>
            <input type="date" class="form-control" aria-describedby="emailHelp" name="Datadocontato" id="datadocontato">
        </div>
        <div class="mb-3 text-start">
            <button type="submit" class="btn btn-primary" name="cadastrar" id="submit">Cadastrar</button>
            <a href="login.php" class="btn btn-primary">Voltar</a>
        </div>
     </form>
</p>
</div>
<div class="col-1">
    &nbsp;
</div>
</div>    
</body>
</html>