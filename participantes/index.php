<?php
include '../includes/conexao.php';
$sql = "select * from participantes";

$resultado = $conexao->query($sql);
mysqli_close($conexao);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../includes/head.php'; ?>
</head>

<body>
    <h1 class="bgPrincipal text-white text-center">Sistema de Cadastro</h1> <br>
    <div class="container">
        <div class="row">
            <?php include '../includes/menu.php'; ?>
            <div class="col-9 bgSecundaria dados">
                <h3 class="text-center">Lista de participantes</h3>
                <a href="adicionar.php" class="btn btn-success btn-sm mb-2">Adicionar</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">telefone</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($item = mysqli_fetch_object($resultado)) { ?>
                            <tr>
                                <th scope="row"><?php echo $item->id; ?> </th>
                                <td><?php echo $item->nome; ?> </td>
                                <td><?php echo $item->email; ?> </td>
                                <td><?php if($item->selecionado) {echo "Sim";} else {echo "Não";}; ?> </td>
                                <td>
                                    <a href="editar.php?id=<?php echo $item->id; ?>" class="btn btn-secondary btn-sm">Editar</a>
                                    <a href="javascript:excluir(<?php echo $item->id;?>)" class="btn btn-danger btn-sm">Excluir</a>
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>


    </div>



    <?php include '../includes/js.php'; ?>

    <!-- JS para excluir -->

    <script>
        function excluir(id) {
            if (confirm("Certeza absoluta paizão?")) {
                window.location.href = "del.php?id=" + id;
            }
        }
    </script>
</body>

</html>