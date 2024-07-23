<?php

$nome = $_POST["campoNome"];
$inicio = $_POST["campoInicio"];
$termino = $_POST["campoTermino"];
$turno = $_POST["campoTurno"];
$numero = $_POST["campoQuantidade"];
$descricao = $_POST["campoDescricao"];

include '../includes/conexao.php';
$sql = "insert into atividades(nome, inicio, termino, turno, numero, descricao)
        values ('$nome', '$inicio', '$termino', '$turno', '$numero', '$descricao')";

$conexao->query($sql);

header("location: index.php");