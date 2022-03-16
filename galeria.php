<?php include "cabecalho.php" ?>

<?php

$bd = new SQLite3("filmes.db");
$sql = "SELECT * FROM filmes";
$filmes = $bd -> query($sql);

$filme1 = [
    "titulo" => "Vingadores",
    "nota" => 9.7,
    "sinopse" => "Loki, o irmão de Thor, ganha acesso ao poder ilimitado do cubo cósmico ao roubá-lo de dentro das instalações da S.H.I.E.L.D. Nick Fury, o diretor desta agência internacional que mantém a paz, logo reúne os únicos super-heróis que serão capazes de defender a Terra de ameaças sem precedentes. Homem de Ferro, Capitão América, Hulk, Thor, Viúva Negra e Gavião Arqueiro formam o time dos sonhos de Fury, mas eles precisam aprender a colocar os egos de lado e agir como um grupo em prol da humanidade.",
    "poster" => "https://www.themoviedb.org/t/p/w300/u49fzmIJHkb1H4oGFTXtBGgaUS1.jpg"
];
$filme2 = [
    "titulo" => "Homem-Aranha: Sem Volta Para Casa",
    "nota" => 8.7,
    "sinopse" => "Peter Parker é desmascarado e não consegue mais separar sua vida normal dos grandes riscos de ser um super-herói. Quando ele pede ajuda ao Doutor Estranho, os riscos se tornam ainda mais perigosos, e o forçam a descobrir o que realmente significa ser o Homem-Aranha.",
    "poster" => "https://www.themoviedb.org/t/p/w300/fVzXp3NwovUlLe7fvoRynCmBPNc.jpg"
];
$filme3 = [
    "titulo" => "Matrix Resurrections",
    "nota" => 6.5,
    "sinopse" => "Em um mundo de duas realidades — a vida cotidiana e o que está por trás dela —, Thomas Anderson terá que escolher seguir o coelho branco mais uma vez. A escolha, embora seja uma ilusão, ainda é a única maneira de entrar ou sair da Matrix, que é mais forte, mais segura e mais perigosa do que nunca.",
    "poster" => "https://www.themoviedb.org/t/p/w300/9DT4WVqZqBEI9Kub18gZ3m1D89m.jpg"
];
$filme4 = [
    "titulo" => "Batman",
    "nota" => 9.2,
    "sinopse" => "Bruce Wayne é um jovem bilionário da cidade de Gotham City, Nova Jersey, que também age secretamente como o vigilante noturno Batman após o assassinato dos seus pais.",
    "poster" => "https://www.themoviedb.org/t/p/original/2cS4LrgSdkoA59GbJccuGo9iaPb.jpg"
];
 
//$filmes = [$filme1, $filme2, $filme3, $filme4];

?>

<body>
    <nav class="nav-extended teal darken-4">

        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li class="active"><a href="galeria.php">Galeria</a></li>
                <li><a href="cadastrar.php">Cadastrar</a></li>
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

    <div class="row">

        <?php while ($filme = $filmes -> fetchArray()) : ?>
            
            <div class="col s3">
                <div class="card hoverable ">
                    <div class="card-image">
                        <img src="<?= $filme["poster"]?>">
                        <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                    </div>
                    <div class="card-content">
                        <p class="valign-wrapper"><i class="material-icons amber-text">star</i> <?= $filme["nota"]?></p>
                        <span class="card-title"><?= $filme["titulo"]?></span>
                        <p><?= $filme["sinopse"]?></p>
                    </div>
                </div>
            </div>
            
        <?php endwhile ?>

    </div>
</body>
</html>