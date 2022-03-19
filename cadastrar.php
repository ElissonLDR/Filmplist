<?php include "cabecalho.php" ?>

<body>
    <nav class="nav-extended teal darken-4">

        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="galeria.php">Galeria</a></li>
                <li><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>

        <div class="nav-header center">
            <h1>FILMPLIST</h1>
        </div>
    </nav>

    <div class="row">
        <form method="POST">
            <div class="col s6 offset-s3">
                <div class="card teal lighten-5">
                    <div class="card-content ">
                        <span class="card-title">Cadastrar Filme</span>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="titulo" type="text" class="validate" name="titulo" required>
                                <label for="titulo">Titulo do filme</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="sinopse" class="materialize-textarea" name="sinopse" ></textarea>
                                <label for="sinopse">Sinopse</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s4">
                                <input id="nota" type="number" step=".1" min="0" max="10" class="validate" name="nota" required>
                                <label for="nota">Nota</label>
                            </div>
                        </div>

                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Capa</span>
                                <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" name="poster" type="text" required>
                            </div>
                        </div>

                    </div>
                    <div class="card-action">
                        <a href="/" class="waves-effect waves-light grey btn">Cancelar</a>
                        <button type="submit" class="waves-effect waves-light teal darken-4 btn">Enviar</button>
                        < </div>
                    </div>
                </div>
        </form>
    </div>
</body>

</html>