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
                        <input type="text" class="form-control" id="idNome" placeholder="Digite seu nome"
                            name="campoNome" required>
                    </div>
                    <div class="mb-3">
                        <label for="idEmail" class="form-label">E-mail:</label>
                        <input type="email" class="form-control" id="idEmail" placeholder="Digite seu E-mail"
                            name="campoEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="idCpf" class="form-label">Cpf:</label>
                        <input type="text" class="form-control" id="idCpf" placeholder="Ex.:12345678910" name="campoCpf"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="idData" class="form-label">Data de nascimento:</label>
                        <input type="date" class="form-control" id="idData" name="campoData" required>
                    </div>
                    <label class="form-label">Selecione o seu sexo:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="campoSexo" id="idSexom" value="0" required>
                        <label class="form-check-label" for="idSexom">
                            Masculino
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="campoSexo" id="idSexof" value="1" required>
                        <label class="form-check-label" for="idSexof">
                            Feminino
                        </label>
                    </div>
                    <div class="mb-3">
                        <label for="idObs" class="form-label">Escreva suas observações aqui:</label>
                        <input type="textarea" class="form-control" id="idObs" placeholder="Digite aqui"
                            name="campoObs">
                    </div>
                    <button type="submit" class="btn btn-success mb-3">Gravar</button>
                    <a href="./" class="btn btn-secondary mb-3">Voltar</a>
                </form>
            </div>
        </div>

    </div>

    <?php include '../includes/js.php'; ?>
</body>