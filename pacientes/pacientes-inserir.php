<?php
$nome = $_POST ['nome'];
$telefone = $_POST ['telefone'];
$data_nascimento = $_POST ['data_nascimento'];
$convenio = $_POST ['convenio'];
$diagnostico = $_POST ['diagnostico'];

include "../includes/conexao.php";
$sqlInserir = "INSERT INTO tb_pacientes(nome, telefone, data_nascimento, convenio, diagnostico)
 values(
     '{$nome}',
     '{$telefone}', 
     '{$data_nascimento}',
     '{$convenio}', 
     '{$diagnostico}'
       );";

$resultado = mysqli_query($conexao, $sqlInserir);

if($resultado) {
    echo "Paciente inserido com sucesso! <br>";
    echo "<a href='pacientes-listar.php'>voltar</a>";

}else{
    echo "Algum erro aconteceu";
}
?>