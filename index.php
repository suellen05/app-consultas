<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="formulario-login" action="login.php" method="post">
    <label>Usuario:</label>
    <input name="usuario">
    <label>Senha</label>
    <input type="password" name="senha">
    <button type="submit">Acessar</button>
    <?php
    if(isset($_GET['mensagem'])){
        if($_GET['mensagem'] =='errado'){
            echo "usuario ou senha invalido";
        }else if($_GET['mensagem']=='login'){
            echo "Realize login para entrar";
        }
        }
    
    ?>
    </form>
</body>
</html>
