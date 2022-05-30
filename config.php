<?php

    $dbHost = 'LocalHost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'contato_freegames';
    $port = '3307';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName,$port);

    //if($conexao->connect_errno)
    //{
    //    echo "Erro";
    //}
    //else
    //{
    //    echo "Conexão efetuada com sucesso";
    //}

?>