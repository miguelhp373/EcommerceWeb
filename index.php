<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compre + | O Ecommerce Perfeito Para o Seu Negócio</title>

    <!--Projeto Iniciado em 08/08/2021-->

    <!--Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--Bootstrap v5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!--Icones FontAwesome-->
    <script src="https://kit.fontawesome.com/bb41ae50aa.js" crossorigin="anonymous"></script>

    <!--Styles-->
    <link rel="stylesheet" href="sources/styles/root.css">
    <link rel="stylesheet" href="sources/styles/pages/main.css">

</head>

<body>
    <!--NavBar Desktop-->
    <div class="nav_bar">
        <div class="left_logo">
            <a href="#">
                <h1>Compre +</h1>
            </a>
        </div>
        <div class="right_menu">
            <a href="#">
                <span>
                    Home
                </span>
            </a>
            <a href="pages/Login/index.php?type=buy">
                <span>
                Comprar
                </span>
            </a>
            <a href="pages/Login/index.php?type=sell">
                <span>
                   Vender 
                </span>
            </a>
            <a href="#">
                <span>
                Fale Conosco
                </span>
            </a>
        </div>
    </div>
    <!------------------>

    <!--NavBar Mobile-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light nav_bar_mobile">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!----------------->

    <main>
        <div class="initial_welcome">
            <div class="left_welcome_message">
                <h1>Bem Vindo</h1>
                <p>Compre Mais a plataforma Ecommerce perfeita para compras e vendas de produtos. Onde você compra e vende em apenas alguns cliques.</p>
                <a href="pages/Tipo/index.php">
                    <button>
                        Conhecer
                        &nbsp;
                        <i class="fas fa-arrow-right arrow_icon"></i>
                    </button>
                </a>
            </div>
            <div class="right_image_gif">
                <img src="sources/assets/36605-shopping-cart.gif" alt="">
            </div>
        </div>
    </main>
</body>

</html>