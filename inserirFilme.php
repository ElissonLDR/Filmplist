<?php

session_start();
require "./repository/FilmesRepositoryPDO.php";
require "./model/Filmes.php";

$filmesRepository = new FilmesRepositoryPDO();
$filme = new Filme();

$titulo =  $_POST["titulo"];
$sinopse = $_POST["sinopse"];
$nota =    $_POST["nota"];
$poster =  $_POST["poster"];

if ($filmesRepository->salvar($filme))
    $_SESSION["msg"] = "Filme cadastrado com sucesso";
else
    $_SESSION["msg"] = "Erro ao cadastrar o filme";
    
header("location: /");
?>