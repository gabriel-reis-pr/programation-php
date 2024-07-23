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

                <h4>Lista de clientes</h4>
                <form action="add.php" method="post">
                    <div class="mb-3">
                        <label for="idNome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="idNome" placeholder="Digite seu nome" name="campoNome" required>
                    </div>
                    <div class="mb-3">
                        <label for="idCategoria" class="form-label">Categoria do produto:</label>
                        <input type="text" class="form-control" id="idCategoria" placeholder="Ex.: Comida japonesa" name="campoCategoria" required>
                    </div>
                    <div class="mb-3">
                        <label for="idPreco" class="form-label">Preco:</label>
                        <input type="text" class="form-control" id="idPreco" placeholder="Ex.: 9.99" name="campoPreco" required>
                    </div>
                    <button type="submit" class="btn btn-success mb-3">Gravar</button>
                    <a href="./" class="btn btn-secondary mb-3">Voltar</a>
                </form>
            </div>
        </div>

    </div>

    <?php include '../includes/js.php'; ?>
</body>