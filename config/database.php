<?php
    #Parametros de conexão do banco de dados
    $server = 'localhost';
    $port = 3306;
    $user = 'root';
    $db_name = 'db_projeto_desenvolvimento_sistemas';
    #$password = '62312898'; 
    
    try{
        #Realiza conexão com banco de dados
        $database = new mysqli($server, $user, $password, $db_name, $port);
        echo("Conectado com sucesso!");
    }catch(Exception $e){
        echo("Erro: " . $e->getMessage());
    }
?>