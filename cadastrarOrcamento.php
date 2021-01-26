<?php

    require_once('database/dbConnect.php');

    $cliente = $_POST['cliente'];
    $endereco = $_POST['endereco'];
    $contato = $_POST['contato'];
    $descricao = $_POST['descricao'];
    $dataContrato = $_POST['data_contrato'];

    $objDb = new db();
    $link = $objDb->conecta_mysql();
    
    //Criando Query de inserção de dados.
    $sqlinsert = " insert into Construcao(cliente, endereco, contato, descricao, data_contrato) 
                                values ('$cliente','$endereco','$contato','$descricao','$dataContrato') ";

    // executar a query
    if(mysqli_query($link, $sqlinsert)){
        echo 'Agendamento Realizado com Suesso!';
        header('Location: '.'index.php');
    }else{
        echo 'Erro ao Agenda';
    }

?>