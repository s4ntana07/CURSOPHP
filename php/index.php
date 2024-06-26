<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../imagem/unnamed.ico" type="image/x-icon">
    <title>Cadastro de Funcionários</title>
    <style>
    .fundo {
        height: 100vh;
        background:linear-gradient(#212529,#1f348f, #1f348f, #1f348f)no-repeat;
    }

    </style>

</head>
<body class="fundo">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
            <img src="imagens/Gazin_1_cca4b227db.webp" width="120px" alt="" class="img-gazin">
                <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                 </button>
            <div class="collapse navbar-collapse mg-div" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="?page=novo">Novo Funcionário</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="?page=listar">Listar Funcionários</a>
                    </li>
                    <li class="left">
                        <a class="nav-link text-light" href="https://s4ntana07.github.io/Projetoshtml/">Site Informações Gazin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
            <?php
                include("config.php");
                switch(@$_REQUEST["page"]){
                    case "novo":
                        include("novo-funcionario.php");
                    break;
                    case "listar":
                        include("listar-funcionario.php");
                    break;
                    case "salvar":
                        include("salvar-funcionario.php");
                    break;
                    case "editar":
                        include("editar-funcionario.php");
                    break;
                    default:
                        print "<h1 class='text-white'>Bem vindo</h1>";
                        print "<br>";
                        print "<h3 class='p'>Olá, esse é um CRUD, utilizando PHP e MySQL, 
                        onde nele é possivel fazer cadastros de funcionários da Gazin, as opções estão acima.</h3>";
                }   
            ?>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>