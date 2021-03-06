<?php include "cabecalho.php" ?>

<?php

session_start();

require "./util/Mensagem.php";
require "./repository/FilmesRepositoryPDO.php";

$filmesRepository = new FilmesRepositoryPDO();
$filmes = $filmesRepository->ListarTodos();

?>

<body>
    <nav class="nav-extended teal darken-4">

        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li class="active"><a href="/">Galeria</a></li>
                <li><a href="/novo">Cadastrar</a></li>
            </ul>
        </div>

        <div class="nav-header center">
            <h1>FILMPLIST</h1>
        </div>

        <div class="nav-content">
            <ul class="tabs tabs-transparent teal darken-3">
                <li class="tab"><a class="active" href="#test1">Todos</a></li>
                <li class="tab"><a href="#test2">Assistidos</a></li>
                <li class="tab"><a href="#test3">Favoritos</a></li>
            </ul>
        </div>
    </nav>
<div class="container">
    
    <div class="row">

        <?php foreach($filmes as $filme) : ?>
            
            <div class="col s12 m6 l3">
                <div class="card hoverable ">
                    <div class="card-image">
                        <img src="<?= $filme->poster?>">
                        <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                    </div>
                    <div class="card-content">
                        <p class="valign-wrapper"><i class="material-icons amber-text">star</i> <?= $filme->nota?></p>
                        <span class="card-title"><?= $filme->titulo?></span>
                        <p><?= $filme->sinopse?></p>
                    </div>
                </div>
            </div>
            
        <?php endforeach ?>

    </div>
    
</div>

<?php Mensagem::mostrar(); ?>

</body>


</html>