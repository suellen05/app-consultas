<?php
session_start();
if (!isset($_SESSION['usuario'])){
    header('Location:../index.php?mensagem=login');
    
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APP Consultas</title>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <main class="container">
        <header>
            <h1>APP Consultas</h1>
            <hr>
        </header>
        <div>
            <nav>
               
                <a class="btn btn-danger" href="../medicos/medicos-listar.php"><img src="../img/medico.png">Cadastro de médicos</a>
                <a class="btn btn-danger" href="../pacientes/pacientes-listar.php"><img src="../img/paciente.png">Cadastro de pacientes</a>
                <a class="btn btn-danger" href="../agenda/agenda-listar.php"><img src="../img/agenda.png">Agendamento de consultas</a>
                
                
            </nav> 
        </div>
        