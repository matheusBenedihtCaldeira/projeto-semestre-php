<?php
    #!!!!!!!!IMPORTANTE!!!!!!! LEMBRAR DE ATUALIZAR O PARAMETRO DO ARQUIVO MY.INI DENTRO DA PASTA BIN DO MYSQL. Deixar o parametro max_allowed_packet=64M
    
    #Verifica se a requisição enviada foi POST e se foi inserido algum arquivo de sequenciamento 
    if ($_SERVER["REQUEST_METHOD"] === "POST" && is_uploaded_file($_FILES['sequencing_file']['tmp_name'])) {
        require '../config/database.php';
        #Nome do sequenciamento
        $name = $_POST['name'];
        #Origem do sequenciamento
        $origin = $_POST['origin'];
        #Data de extração do sequenciamento
        $extraction_date = $_POST['extraction_date'];
        #Arquivo do sequenciamento
        $sequencingFile = $_FILES['sequencing_file'];
        #Observações 
        $comments = $_POST['comments'];
        
        try{            
            #Coleta o conteudo do arquivo enviado
            $sequencingFileContent = file_get_contents($sequencingFile["tmp_name"]);
            #Query SQL de INSERT dos dados capturados do formulario
            $sql = "INSERT INTO tb_sequencing(name, origin, extraction_date, sequencing, comments) VALUES ('$name', '$origin', '$extraction_date', '$sequencingFileContent', '$comments');";
            #Executa a query no banco de dados
            $database->query($sql); 
        }catch(Exception $e){
            #Caso ocorra algum erro na execução, exibe a mensagem de erro
            echo("Erro: " . $e->getMessage());
        }finally{
            #Fecha a conexão com o banco de dados
            $database->close();
        }
    }else{
        #Realiza o redirecionamento para o formulario novamente, pois a requisição não foi enviada corretamente
        header("Location: /projeto-php-sequenciamento/pages/registerSequencing.php?error=invalid_request");
        exit;
    }
?>