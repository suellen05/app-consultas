<?php include "../includes/cabecalho.php"; ?>

<?php

include "../includes/conexao.php";
$sqlBusca = "SELECT * FROM tb_agendas";

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
        echo "<td>{$agenda['id_medico']}</td>"; 
        echo "<td>{$agenda['sala']}</td>";
        echo "<td>{$agenda['id_paciente']}</td>";
        echo "<td>alterar | excluir </td>";
        echo"</tr>";
    }

    ?>
</table>


<?php include "../includes/rodape.php"; ?>