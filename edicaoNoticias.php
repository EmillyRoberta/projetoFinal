<?php
$idP = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT); //captura o id do evento passado pelo href
?>

<script>
    function validaEdicao() {
        if (document.getElementById("titulo").value === "" || document.getElementById("texto").value === "") {
            alert('Pelo menos Titulo e Descrição devem ser alterados');

            return false
        }
    }
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Insta Fake</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="index.php">Página Inicial <span class="sr-only">(Página atual)</span></a>
                <a class="nav-item nav-link" href="cadastroNoticias.php">Postar Notícia</a>
                <a class="nav-item nav-link" href="exibirNoticias.php">Editar Notícia</a>
                <a class="nav-item nav-link" href="editarPerfil.php">Editar Perfil</a>
                <a class="nav-item nav-link" href="listagem.service.php">Listagens</a>
                <a class="nav-item nav-link" href="ranking.php">Ranking</a>
                <a class="nav-item nav-link" href="sobre.php">Sobre</a>
            </div>
        </div>
    </nav>
    </div>

    <div id="container">

        <h1>Editar Noticia</h1>

        <form action='alteraNoticiaBanco.php' method="POST" enctype="multipart/form-data" name='formulario' onsubmit="return validaEdicao(this)">
            <div>
                <label for="nome">Novo Titulo:</label>
                <input type="text" id="titulo" name="titulo" /> <br></br>
            </div>
            <div>
                <label for="descrição">Nova Descrição:</label>
                <input type="text" id="texto" name="texto" /> <br></br>
            </div>

            <div>
                <label for="img">Nova Imagem:</label>
                <input type="file" id="img" name="img" accept="image/*"> <br></br>
            </div>
            <div>
                <input type="hidden" name="idP" value="<?= $idP ?>" /> <br></br>
            </div>

            <div>
                <label><input type="submit" name="botao" value="Enviar" /></label></p>
            </div>
    </div>

</html>