<?php

    $dbHost = 'file:///C:/Users/ga615/SAC%20eco.html';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario_eco';

        $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

        if($conexao->connect_errno)
        {
            echo "Erro";
        }
        else
        {
            echo "Conexão efetuada";
        }
?>