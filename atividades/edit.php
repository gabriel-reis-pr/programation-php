<?php

$id = $_POST['campoId'];
$nome = $_POST["campoNome"];
$inicio = $_POST["campoInicio"];
$termino = $_POST["campoTermino"];
$turno = $_POST["campoTurno"];
$numero = $_POST["campoQuantidade"];
$descricao = $_POST["campoDescricao"];

include '../includes/conexao.php';
$sql = "update atividades set nome = '$nome', inicio = '$inicio', termino = '$termino', turno = '$turno', numero = '$numero', descricao = '$descricao' where id ='$id';";

$conexao->query($sql);

header("location: ../atividades");