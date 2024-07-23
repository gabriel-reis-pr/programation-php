<?php
    $id = $_GET['id'];

    $sql = "select *from produtos where id = '$id'; ";

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

                <h4>Lista de Produtos</h4>
                <form action="edit.php" method="post">
                    <input type="hidden" name="campoId" value="<?php echo $id; ?>">
                    <div class="mb-3">
                        <label for="idNome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="idNome" value="<?php echo $item->nome; ?>" name="campoNome" required>
                    </div>
                    <div class="mb-3">
                        <label for="idCategoria" class="form-label">Categoria do produto:</label>
                        <input type="text" class="form-control" id="idCategoria" value="<?php echo $item->categoria; ?>" name="campoCategoria" required>
                    </div>
                    <div class="mb-3">
                        <label for="idPreco" class="form-label">Preco:</label>
                        <input type="text" class="form-control" id="idPreco" value="<?php echo $item->preco; ?>" name="campoPreco" required>
                    </div>
                    <button type="submit" class="btn btn-success mb-3">Gravar</button>
                    <a href="./" class="btn btn-secondary mb-3">Voltar</a>
                </form>
            </div>
        </div>

    </div>

    <?php include '../includes/js.php'; ?>
</body>