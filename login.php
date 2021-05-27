<?php
session_start();
$usuarioSistema = $_POST['usuario'];
$senhaSistema= $_POST['senha'];


echo "{$usuarioSistema} - {$senhaSistema}";

include "includes/conexao.php";

$sqlBusca = "SELECT * FROM tb_usuarios WHERE usuario = '{$usuarioSistema}' and senha = '{$senhaSistema}'";
$resultado = mysqli_query($conexao, $sqlBusca);

if(mysqli_num_rows($resultado) > 0){
    $_SESSION['usuario'] = "sim";
    header('Location:agenda/agenda-listar.php');
}else{
    header('Location: index.php?mensagem=errado');
}

?>