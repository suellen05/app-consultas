<?php include "../includes/cabecalho.php" ; ?>

<form name="formulario-inserir-pacientes" method="post" action="pacientes-inserir.php">
    <div class="row">

        <p class="col-8">
            <label class="form-label">Nome:</label><input name="nome" class="form-control">
        </p>
        <p class="col-4">
            <label class="form-label">Telefone:</label><input name="telefone" class="form-control">
        </p>
    </div>
    <div class="row">
        <p class="col-4">
            <label class="form-label">data Nascimento:</label><input name="data_nascimento" type="date" class="form-control">
       

        <div class="row">
        <p class="col-6">
        <label>Convênio:</label>
            <input name="convenio" type ="checkbox" value="sim">
        </p>


            <label class="form-label">Diagnostico:</label><textarea name="diagnostico"></textarea>
        </p>



        
      
    </div>
    <p>
        <button type="subtmit" class="btn btn-danger">Salvar</button>
    </p>
</form>
<?php include "../includes/rodape.php" ; ?>

