<?php
    $server = 'localhost';
    $port = 3306;
    $user = 'root';
    $password = '62312898'; 
    $banco = new mysqli($server, $user, $password, "projeto_php", $port);
    if($banco->connect_errno){
        echo "Erro ao conectar no banco de dados";
    }else{
        echo "Conectado com sucesso!";
    }
?>