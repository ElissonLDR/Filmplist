<?php

$bd = new SQLite3("filmes.db");

$sql = "DROP TABLE IF EXISTS filmes";

if ($bd -> exec($sql)) 
    echo "\ntabela filmes apagada\n"; 

$sql = "CREATE TABLE filmes ( 
    id INTEGER PRIMARY KEY AUTOINCREMENT, 
    titulo VARCHAR(200)NOT NULL, 
    poster VARCHAR (200), 
    sinopse TEXT, 
    nota DECIMAL(2.1)
    )
";

if ($bd -> exec($sql)) 
    echo "\ntabela filmes criada\n"; 
else
    echo "\nerro ao criar tabela filmes\n";

    
$sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUES (
    0,
    'Vingadores',
    'https://www.themoviedb.org/t/p/w300/u49fzmIJHkb1H4oGFTXtBGgaUS1.jpg',
    'Loki, o irmão de Thor, ganha acesso ao poder ilimitado do cubo cósmico ao roubá-lo de dentro das instalações da S.H.I.E.L.D. Nick Fury, o diretor desta agência internacional que mantém a paz, logo reúne os únicos super-heróis que serão capazes de defender a Terra de ameaças sem precedentes. Homem de Ferro, Capitão América, Hulk, Thor, Viúva Negra e Gavião Arqueiro formam o time dos sonhos de Fury, mas eles precisam aprender a colocar os egos de lado e agir como um grupo em prol da humanidade.',
    9.7
    )";

if ($bd -> exec($sql)) 
echo "\nfilmes inseridos com sucesso\n"; 
else
echo "\nerro ao inserir filmes\n";

$sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUES (
    1,
    'Homem-Aranha: Sem Volta Para Casa',
    'https://www.themoviedb.org/t/p/w300/fVzXp3NwovUlLe7fvoRynCmBPNc.jpg',
    'Peter Parker é desmascarado e não consegue mais separar sua vida normal dos grandes riscos de ser um super-herói. Quando ele pede ajuda ao Doutor Estranho, os riscos se tornam ainda mais perigosos, e o forçam a descobrir o que realmente significa ser o Homem-Aranha.',
    8.7
    )";

if ($bd -> exec($sql)) 
echo "\nfilmes inseridos com sucesso\n"; 
else
echo "\nerro ao inserir filmes\n";

?>

