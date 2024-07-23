<?php
include '../includes/conexao.php';
$sql = "select * from atividades";

$resultado = $conexao->query($sql);
mysqli_close($conexao);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../includes/head.php'; ?>
</head>
<body>
    <h1 class="bgPrincipal text-white text-center">Sistema para cadastros</h1>

    <div class="container">
        <div class="row">
            <?php include '../includes/menu.php'; ?>
            <div class="col-9 bgSecundaria dados">
                <h4>Lista de Atividades</h4>
                <a href="adicionar.php" class="btn btn-success btn-sm mb-2">Adicionar</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Horário</th>
                            <th scope="col">Número</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($item = mysqli_fetch_object($resultado)) { ?>
                            <tr>
                                <th scope="row"><?php echo $item->id; ?></th>
                                <td><?php echo $item->nome; ?></td>
                                <td><?php echo $item->inicio; ?></td>
                                <td><?php echo $item->numero; ?></td>
                                <td>
                                    <a href="editar.php?id=<?php echo $item->id; ?> " class="btn btn-secondary btn-sm">Editar</a>
                                    <a href="javascript:excluir(<?php echo $item->id; ?> );" class="btn btn-danger btn-sm">Excluir</a>
                                </td>
                            </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <?php include '../includes/js.php'; ?>

    <!-- Início -Js para exclusão -->
    <script>
        function excluir(id){
            if(confirm("Certeza absoluta paizão?")){
                window.location.href = "del.php?id=" + id;
            }
        }
    </script>
    <!-- Fim -Js para exclusão -->
</body>