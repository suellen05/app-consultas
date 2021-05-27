<?php
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$data_nascimento = $_POST['data_nascimento'];
if(isset($_POST['convenio'])){
    $convenio = $_POST['convenio'];
}else{
    $convenio = 'não';
}

$diagnostico = $_POST['diagnostico'];


include "../includes/conexao.php";
$sqlInserir = "INSERT INTO tb_pacientes(nome, telefone, data_nascimento, convenio, diagnostico
) 
VALUES(
    '{$nome}' ,
    '{$telefone}' ,
    '{$data_nascimento}' , 
    '{$convenio}',
    '{$diagnostico}'
    );";

$resultado = mysqli_query($conexao, $sqlInserir);

if($resultado){
    echo "Paciente inserido com sucesso!<br>";
    echo "<a href='pacientes-listar.php' >VOLTAR</a>";
}else{
    echo "Algum erro aconteceu";
}

?> 