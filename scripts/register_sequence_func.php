<?php
    #Verifica se a requisição enviada foi POST e se foi inserido algum arquivo de sequenciamento 
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["sequence_file"])) {
    echo("Requisição e arquivo enviado correatemente");
    }
?>