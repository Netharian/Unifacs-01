<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />

    <style>
        <?php include 'styles/global.css';
?>
    </style>

    <title>CompraCerta | Home</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-md text-light bg-dark">
            <a class="navbar-brand mr-auto" href="./index">CompraCerta</a>
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" href="./login">Login | Cadastre-se <i class="pl-1 fas fa-user"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./carrinho">Meu Carrinho <i
                            class="pl-1 fas fa-shopping-cart"></i></a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./rastreio">Rastrear Pedido <i class="pl-1 fas fa-search"></i></a>
                </li>
                <form method="post" action="./index" class="busca form-inline">
                    <input class="form-control mr-sm-2" type="search" name="input" placeholder="Busque seu produto"
                        aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>

            </ul>

        </nav>
    </header>