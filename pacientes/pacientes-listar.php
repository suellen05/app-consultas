<?php include "../includes/cabecalho.php"; ?>
<hr>
<p>
    <a href="#" class="btn btn-danger"> <i class="bi-plus-circle"></i>
    Novo paciente</a>
</p>

<?php

include "../includes/conexao.php";
$sqlBusca = "SELECT * FROM tb_pacientes;";
$listaDePacientes = mysqli_query($conexao , $sqlBusca);
?>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Data_nascimento</th>
        <th>Convenio</th>
        <th>Ações</th>
    </tr>
    <?php
    while($paciente = mysqli_fetch_assoc($listaDePacientes)){
        echo "<tr>";
        echo "<td>{$paciente['id']}</td>";
        echo "<td>{$paciente['nome']}</td>";
        echo "<td>{$paciente['telefone']}</td>";

        $dataBrasil = date('d/m/Y', strtotime($paciente['data_nascimento']));
        echo "<td>{$dataBrasil}</td>";

        echo "<td>{$paciente['convenio']}</td>";
        echo "<td><a class='btn-outline-danger' href='pacientes-formulario-alterar.php?id_paciente={$paciente['id']}'>Alterar</a> | ";

        echo "<a class='btn-outline-danger' href='paciente-excluir.php?id_paciente={$paciente['id']}'>Excluir<i class='bi bi-x-lg'></i></a></td>";
        echo "</tr>";
    }
    ?>
</table>


<?php include "../includes/rodape.php"; ?>