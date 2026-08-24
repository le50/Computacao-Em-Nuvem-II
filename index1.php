<?php
// Incluir configuração
include('config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulação de Armazenamento em Nuvem</title>
</head>
<body>

<h1>Bem-vindo ao Armazenamento em Nuvem Simples</h1>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    <label for="fileUpload">Escolha um arquivo para upload:</label>
    <input type="file" name="fileUpload" id="fileUpload" required>
    <input type="submit" value="Fazer Upload">
</form>

<br><br>

<h2>Arquivos Disponíveis:</h2>
<ul>
    <?php
    // Listar arquivos no diretório de uploads
    $files = scandir(UPLOAD_DIR);
    foreach ($files as $file) {
        if ($file != "." && $file != "..") {
            echo "<li><a href='view.php?file=" . urlencode($file) . "'>$file</a></li>";
        }
    }
    ?>
</ul>

</body>
</html>
