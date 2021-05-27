<?php
include "../includes/conexao.php";

$id_agenda = $_GET['id'];

$sqlExcluir = "DELETE FROM tb_agendas WHERE id = {$id_agenda}";
$resultado = mysqli_query($conexao, $sqlExcluir);

if($resultado){
    echo "Excluído com sucesso <br>";
    echo "<a href='agenda-listar.php'>VOLTAR</a>";
}else{
    echo "Ocorreu algum erro.";
}
?>