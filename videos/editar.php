<?php
    $id = $_GET['id'];

    $sql = "select *from videos where id = '$id'; ";

    include '../includes/conexao.php';

    $resultado = $conexao->query($sql);

    $item = mysqli_fetch_object($resultado);

    mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../includes/head.php'; ?>
</head>

<body>
    <h1 class="bgPrincipal text-white text-center">Sistema para cadastros</h1><br>

    <div class="container">
        <div class="row">
            <?php include '../includes/menu.php'; ?>
            <div class="col-9 bgSecundaria dados">

                <h4>Lista de videos</h4>
                <form action="edit.php" method="post">
                    <input type="hidden" name="campoId" value="<?php echo $id; ?>">
                    <div class="mb-3">
                        <label for="idTitulo" class="form-label">Título:</label>
                        <input type="text" class="form-control" id="idTitulo" value="<?php echo $item->titulo; ?>"
                            name="campoTitulo" required>
                    </div>
                    <div class="mb-3">
                        <label for="idAutor" class="form-label">Autor:</label>
                        <input type="text" class="form-control" id="idAutor" value="<?php echo $item->autor; ?>"
                            name="campoAutor" required>
                    </div>
                    <div class="mb-3">
                        <label for="idData" class="form-label">Informe a data do vídeo:</label>
                        <input type="date" class="form-control" id="idData" value="<?php echo $item->data; ?>" name="campoData" required>
                    </div>
                    <div class="mb-3">
                        <label for="idLink" class="form-label">Video:</label>
                        <input type="text" class="form-control" id="idLink" value="<?php echo $item->video; ?>" name="campoLink"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="idDuracao" class="form-label">Duração do vídeo:</label>
                        <input type="time" class="form-control" id="idDuracao" value="<?php echo $item->duracao; ?>"
                            name="campoDuracao" required>
                    </div>
                    <div class="mb-3">
                        <label for="idDescricao" class="form-label">Descrição do vídeo:</label>
                        <input type="textarea" class="form-control" id="idDescricao" value="<?php echo $item->descricao; ?>" name="campoDescricao">
                    </div>
                    <button type="submit" class="btn btn-success mb-3">Gravar</button>
                    <a href="./" class="btn btn-secondary mb-3">Voltar</a>
                </form>
            </div>
        </div>

    </div>

    <?php include '../includes/js.php'; ?>
</body>