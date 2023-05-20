<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    
    <title>Tela de login</title>
    <style>
        body{
            font-family: Arial;
            background-image: linear-gradient(45deg, blue, black, white);
        }
        div{
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }
        input{
            padding: 15px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        .botao{
            background-color: blue;
            padding: 10px;
            width: 25%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            box-sizing: border-box;
            margin-top: 10px;
        }
        .botao2{
            background-color: blue;
            text-decoration: none;
            padding: 10px;
            width: 25%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            box-sizing: border-box;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div>
        <form method="post" action="verificarLogin.php">
            <h1>Bem-Vindo</h1>
            <input type="text" name="login" placeholder="Nome">
            <input type="password" name="senha" placeholder="Senha">
            <button class="botao" type="submit" name="submit" value="acessar">Acessar</button>
            <a href="formulario.php" class="botao2">Cadastre-se</a>
        </form>
    </div>
</body>

</html>