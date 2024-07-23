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

                <h4>Lista de Atividades</h4>
                <form action="add.php" method="post">
                    <div class="mb-3">
                        <label for="idNome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="idNome" placeholder="Digite o nome da atividade"
                            name="campoNome" required>
                    </div>
                    <div class="mb-3">
                        <label for="idInicio" class="form-label">Horário de início:</label>
                        <input type="time" class="form-control" id="idInicio" placeholder="Horário de Início"
                            name="campoInicio" required>
                    </div>
                    <div class="mb-3">
                        <label for="idTermino" class="form-label">Horário de término:</label>
                        <input type="time" class="form-control" id="idTermino" placeholder="Horário de Término"
                            name="campoTermino" required>
                    </div>
                    <label for="idTurno" class="form-label">Turno:</label>
                    <div class="input-group mb-3">
                        <select class="custom-select" id="inputGroupSelect02" name="campoTurno">
                            <option selected>Selecione um</option>
                            <option value="Matutino">Matutino</option>
                            <option value="Vespertino">Vespertino</option>
                            <option value="Noturno">Noturno</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="idQuantidade" form-label>Quantidade máxima de pessoas:</label>
                        <input type="number" class="form-control" id="idQuantidade" name="campoQuantidade" required>
                    </div>
                    <div class="mb-3">
                        <label for="idDescricao" class="form-label">Descrição:</label>
                        <input type="textarea" class="form-control" id="idDescricao" placeholder="Digite aqui"
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