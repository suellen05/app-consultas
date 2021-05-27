<?php include "../includes/cabecalho.php"; ?>
<form method="post">
  <div class="row">
  
  <hr>
    <div class="col-1">Médico:</div>
    <div class="col-3">
      <select name="id_medico" class="form-select">
        <option value="todos">TODOS</option>
        <?php
          $sqlBuscaMedicos = "SELECT * FROM tb_medicos";
          $listaDeMedicos = mysqli_query($conexao , $sqlBuscaMedicos);

          while($medico = mysqli_fetch_array($listaDeMedicos)){
              echo "<option value='{$medico['id']}'>";
              echo $medico['nome'];
              echo "</option>";
          }
        ?>
    
        </select>        
    </div>
    <br>
    <br>
    <div class="col-7">
          <button class="btn btn-danger"><i class="bi bi-funnel" title="filtrar consultas"></i>BUSCAR</button>
    </div>
  </div>
</form>
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

if(isset($_POST['id_medico'])){
    if($_POST['id_medico'] != 'todos'){ 
      $sqlBusca .= " WHERE id_medico = ". $_POST['id_medico'];
    }
  }
  
$listaDeAgenda = mysqli_query($conexao , $sqlBusca);
?>
<hr>

<p><a href="agenda-formulario-inserir.php">Nova Consulta</a>

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
        echo "<td><a class='btn-outline-danger' href='agenda-formulario-alterar.php?id={$agenda['id']}'>Alterar</a> | ";

        echo "<a class='btn-outline-danger' href='agenda-excluir.php?id={$agenda['id']}'>Excluir<i class='bi bi-x-lg'></i></a></td>";
        echo "</tr>";
    }

    ?>
</table>


<?php include "../includes/rodape.php"; ?>