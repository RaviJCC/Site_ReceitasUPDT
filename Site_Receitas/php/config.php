<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'dados_formulario';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName, 3307);

    //if ($conexao->connect_error) {
        //echo "ERRO: " . $conexao->connect_error;
    //} else {
        //echo "SUCESSO";
    //}
?>