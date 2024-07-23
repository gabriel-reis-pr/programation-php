<?php
    $id = $_GET['id'];

    $sql = "select *from atividades where id = '$id'; ";

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

                <h4>Lista de atividades</h4>
                <form action="edit.php" method="post">
                    <input type="hidden" name="campoId" value="<?php echo $id; ?>">
                    <div class="mb-3">
                        <label for="idNome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="idNome" value="<?php echo $item->nome; ?>"
                            name="campoNome" required>
                    </div>
                    <div class="mb-3">
                        <label for="idInicio" class="form-label">Horário de início:</label>
                        <input type="time" class="form-control" id="idInicio" value="<?php echo $item->inicio; ?>"
                            name="campoInicio" required>
                    </div>
                    <div class="mb-3">
                        <label for="idTermino" class="form-label">Horário de término:</label>
                        <input type="time" class="form-control" id="idTermino" value="<?php echo $item->termino; ?>"
                            name="campoTermino" required>
                    </div>
                    <label for="idTurno" class="form-label">Turno:</label>
                    <div class="input-group mb-3">
                        <select class="form-control" id="inputGroupSelect02" name="campoTurno">
                            <option selected>Selecione um</option>
                            <option value="0" <?php if(!$item->turno){
                                echo "selected";
                            } ?> >Matutino</option>
                            <option value="1" <?php if($item->turno ==1){
                                echo "selected";
                            } ?> >Vespertino</option>
                            <option value="2" <?php if($item->turno ==2){
                                echo "selected";
                            } ?> >Noturno</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="idQuantidade" form-label>Quantidade máxima de pessoas:</label>
                        <input type="number" class="form-control" id="idQuantidade" value="<?php echo $item->numero; ?>" name="campoQuantidade" required>
                    </div>
                    <div class="mb-3">
                        <label for="idDescricao" class="form-label">Descrição:</label>
                        <input type="textarea" class="form-control" id="idDescricao" value="<?php echo $item->numero; ?>"
                            name="campoDescricao">
                    </div>
                    <button type="submit" class="btn btn-success mb-3">Gravar</button>
                    <a href="./" class="btn btn-secondary mb-3">Voltar</a>
                </form>
            </div>
        </div>

    </div>

    <?php include '../includes/js.php'; ?>
</body>