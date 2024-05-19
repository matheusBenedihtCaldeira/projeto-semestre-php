<?php
// Verifica se o formulário foi enviado e se um arquivo foi selecionado
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["arquivo"])) {
    $file = $_FILES["arquivo"];

    // Verifica se não houve erros durante o envio do arquivo
    if ($file["error"] === UPLOAD_ERR_OK) {
        // Abre o arquivo e lê o seu conteúdo
        $conteudo = file_get_contents($file["tmp_name"]);
        echo($conteudo);
    } else {
        echo "Erro ao enviar o arquivo.";
    }
} else {
    echo "Por favor, selecione um arquivo para enviar.";
}
?>
