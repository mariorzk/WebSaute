<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebSaute</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-mask/dist/jquery.mask.min.js"></script>
</head>

<body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #f28119;">
        <div class="container-fluid">
            <a class="navbar-brand" href="?page=home">
                <img src="img/navbar-logo" alt="logo" width="100px;"><b>WebSaute</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <b>Instituição</b>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="?page=instituicao">Nova</a>
                            <a class="dropdown-item" href="#">Listar</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <b>Processo</b>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="?page=processo">Novo</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <b>Professor(a)</b>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="?page=professor">Novo(a)</a>
                            <a class="dropdown-item" href="#">Listar</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <b>Autorização</b>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Nova</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <b>Outros Cadastros</b>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="?page=nivel">Nivel Escolar</a>
                            <a class="dropdown-item" href="?page=dependencia">Dependência</a>
                            <a class="dropdown-item" href="?page=entidade">Entidade</a>
                            <a class="dropdown-item" href="?page=municipio">Município</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- FIM DA NAVBAR-->

    <!-- CONTEÚDO DA PAGINA-->
    <div class="container">
        <div class="row"></div>
            <div class="col mt-5"></div>
                <?php
                include("configs/cfg.php");
                include("configs/page-routers.php");
                ?>
            </div>
        </div>
    </div>

    <!--RODAPÉ "Preciso ajustar o posicionamento"
    <footer>WebSaute - Desenvolvido por <a href="https://instagram.com/mariorzk" target="_blank">Mario Rocha</a> - 2022</footer>
    -->
</body>

    <!--SCRIPTS DA PAGINA-->
<script>
   
</script>
</html>