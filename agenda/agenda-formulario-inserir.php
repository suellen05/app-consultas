<?php include "../includes/cabecalho.php" ; 

include"../includes/conexao.php";
?>


<form name="cadastro-agenda" method="post" action="agenda-inserir.php">
<p>
<br>

           
            <p class="col-4">
            <label>Data</label>
            <input type="date" name="data" class="form-control">
            

           
            <div class="row">
            <p class="col-2">
            <label>Hora:</label>
            <input type="time" name="hora" class="form-control">
        
        
        <div class="row">
        <p class="col-8">
        <label>Médico:</label>
        <select name="id_medico"class="form-control">

        <?php
    $sqlBuscaMedicos = "SELECT * FROM tb_medicos";
    $listaDeMedicos = mysqli_query($conexao , $sqlBuscaMedicos);

while($medico = mysqli_fetch_assoc($listaDeMedicos)){
    echo"<option value='{$medico['id']}'>";
    echo $medico['nome'];
    echo"</option>";

}

?>

</select>
</p>
<div class="row">
<p class="col-4">
<label class="form-label">Sala:</label><input name="sala" style='background-color: blight'class="form-control">
</p>


 <div class="row">
 <p class="col-8">
 <label>Paciente:</label>
 <select name="id_paciente"class="form-control">
           
            <?php
                $sqlBuscaPacientes = "SELECT * FROM tb_pacientes";
                $listaDePacientes = mysqli_query($conexao , $sqlBuscaPacientes);

            while($paciente = mysqli_fetch_assoc($listaDePacientes)){
                echo"<option value='{$paciente['id']}'>";
                echo $paciente['nome'];
                echo"</option>";
}

            ?>
     
 </select>

       </p>

</form>
              
    
    <p>
        <button type="subtmit" class="btn btn-danger">Salvar</button>
    </p>
    
</form>


<?php include "../includes/rodape.php" ; ?>