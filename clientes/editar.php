<?php
    $id = $_GET['id'];

    $sql = "select *from clientes where id = '$id'; ";

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

                <h4>Lista de clientes</h4>
                <form action="edit.php" method="post">
                    <input type="hidden" name="campoId" value="<?php echo $id; ?>">
                    <div class="mb-3">
                        <label for="idNome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="idNome" value="<?php echo $item->nome; ?>"
                            name="campoNome" required>
                    </div>
                    <div class="mb-3">
                        <label for="idEmail" class="form-label">E-mail:</label>
                        <input type="email" class="form-control" id="idEmail" value="<?php echo $item->email; ?>"
                            name="campoEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="idCpf" class="form-label">Cpf:</label>
                        <input type="text" class="form-control" id="idCpf" value="<?php echo $item->cpf; ?>"
                            name="campoCpf" required>
                    </div>
                    <div class="mb-3">
                        <label for="idData" class="form-label">Data de nascimento:</label>
                        <input type="date" class="form-control" id="idData" value="<?php echo $item->data; ?>"
                            name="campoData" required>
                    </div>
                    <label class="form-label">Selecione o seu sexo:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="0" <?php if(!$item->sexo){echo "checked";}  ?> name="campoSexo" id="idSexom"
                            required>
                        <label class="form-check-label" for="idSexom">
                            Masculino
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="1" <?php if($item->sexo){echo "checked";}  ?> name="campoSexo" id="idSexof" required>
                        <label class="form-check-label" for="idSexof">
                            Feminino
                        </label>
                    </div>
                    <div class="mb-3">
                        <label for="idObs" class="form-label">Escreva suas observações aqui:</label>
                        <textarea class="form-control" id="idObs" name="campoObs"><?php echo $item->obs; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-success mb-3">Gravar</button>
                    <a href="./" class="btn btn-secondary mb-3">Voltar</a>
                </form>
            </div>
        </div>

    </div>

    <?php include '../includes/js.php'; ?>
</body>