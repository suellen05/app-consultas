<?php

$data = $_POST['data'];
$hora = $_POST['hora'];
$id_medico = $_POST['id_medico'];
$sala = $_POST['sala'];
$id_paciente = $_POST['id_paciente'];


include "../includes/conexao.php";
$sqlInserir = "INSERT INTO tb_agendas (data, hora, id_medico, sala, id_paciente
) 
VALUES(
    '{$data}' ,
    '{$hora}' ,
    '{$id_medico}' , 
    '{$sala}',
    '{$id_paciente}'
    );";

$resultado = mysqli_query($conexao, $sqlInserir);

if($resultado){
    echo "Paciente inserido com sucesso!<br>";
    echo "<a href='agenda-listar.php' >VOLTAR</a>";
}else{
    echo "Algum erro aconteceu";
}

?> 