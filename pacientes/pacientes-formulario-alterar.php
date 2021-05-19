<?php include "../includes/cabecalho.php" ; 

include"../includes/conexao.php";


$id_paciente = $_GET ['id'];

$sqlBusca = "SELECT * FROM tb_pacientes WHERE id = {$id_paciente}";
$listaDePacientes = mysqli_query($conexao , $sqlBusca);

$nome = $telefone = $convenio = $data_nascimento = $diagnostico = "";

while($paciente = mysqli_fetch_assoc($listaDePacientes)){
    $nome = $paciente['nome'];
    $telefone = $paciente['telefone'];
    $convenio = $paciente['convenio'];
    $diagnostico = $paciente['diagnostico'];
    $data_nascimento = $paciente['data_nascimento'];

    }
    ?>


<form name="formulario-pacientes" method="post" action="pacientes-alterar.php">
<input name="id_paciente" type="hidden" value="<?php echo $id_paciente ; ?>">
    
    <p>

    <div class="row">

        <p class="col-8">
            <label class="form-label">Nome:</label><input name="nome" value=<?php echo $nome; ?> class="form-control">
        </p>
        <p class="col-4">
            <label class="form-label">Telefone:</label><input name="telefone" value=<?php echo $telefone; ?> class="form-control">
        </p>
    </div>
    <div class="row">
        <p class="col-4">
            <label class="form-label">data Nascimento:</label><input name="data_nascimento" value=<?php echo $data_nascimento; ?>  type="date" class="form-control">
       

        <div class="row">
        <p class="col-6">
        <label>Convênio:</label>
        <?php
        $marcado = "";
        if($convenio =="sim"){
            $marcado = "checked";

        }
        ?>

            <input name="convenio" type ="checkbox" value="sim" <?php echo $marcado ; ?>>
            
        </p>
        <p>


            <label class="form-label">Diagnostico:</label><textarea name="diagnostico"><?php echo $diagnostico ; ?></textarea>
        </p>

        
      
    </div>
    <p>
        <button type="subtmit" class="btn btn-danger">Salvar</button>
    </p>
    
</form>


<?php include "../includes/rodape.php" ; ?>

