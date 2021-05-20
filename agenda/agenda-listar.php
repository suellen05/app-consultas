<?php include "../includes/cabecalho.php"; ?>

<?php

include "../includes/conexao.php";
$sqlBusca = "SELECT 
tb_agendas.id,
tb_agendas.data,
tb_agendas.hora,
tb_medicos.nome as ' nome_medico',
tb_agendas.sala,
tb_pacientes.nome as 'nome_paciente'
from tb_agendas
inner join tb_pacientes on tb_agendas.id_paciente = tb_pacientes.id 
inner join tb_medicos on tb_agendas.id_medico = tb_medicos.id";

$listaDeAgenda = mysqli_query($conexao , $sqlBusca);
?>

<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>Data</th>
        <th>Hora</th>
        <th>Medico</th>
        <th>Sala</th>
        <th>Paciente</th>
        <th>Ações</th>
    </tr>
    <?php
    while($agenda = mysqli_fetch_assoc($listaDeAgenda)){
        echo "<tr>";
        echo "<td>{$agenda['id']}</td>";
        
        $dataBrasil = date('d/m/Y', strtotime($agenda['data']));
        echo "<td>{$dataBrasil}</td>";
        

        echo "<td>{$agenda['hora']}</td>";
        echo "<td>{$agenda['nome_medico']}</td>"; 
        echo "<td>{$agenda['sala']}</td>";
        echo "<td>{$agenda['nome_paciente']}</td>";
        echo "<td>alterar | excluir </td>";
        echo"</tr>";
    }

    ?>
</table>


<?php include "../includes/rodape.php"; ?>