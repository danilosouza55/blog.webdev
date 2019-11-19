<?php

$pagina = "home";
$titulo = "Página Inicial";
$descricao = "Página Blog Danilo Souza";

$c = $s = $p = $h = "";
if (isset($_SERVER['REQUEST_URI']) && !empty($_SERVER['REQUEST_URI'])) {
    $param = trim($_SERVER['REQUEST_URI']);
    $param = explode("/", $param);

    if (!empty($param[1])) {
        $pagina = $param[1];
        if ($pagina == "sobre") {
            $titulo = "Sobre Danilo Souzs";
            $descricao = "Saiba mais sobre Danilo Souzs";
            $s = "active";
        } else if ($pagina == "contato") {
            $titulo = "Entre em Contato";
            $descricao = "Fale conosco - Telefone (44) 99831-0394";
            $c = "active";
        } else if ($pagina == "portfolio") {
            $titulo = " Nosso Portfólio";
            $descricao = "Conheça todos os clientes de Danilo Souzs";
            $p = "active";
        } else {
            $h = "active";
        }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Blog Danilo - <?= $titulo; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&display=swap" rel="stylesheet">

    <link rel="icon" href="images/icone.png">
    <link rel="icon" href="images/icone-32x32.png" sizes="32x32">
    <link rel="icon" href="images/icone-72x72.png" sizes="72x72">
    <link rel="icon" href="images/icone-96x96.png" sizes="96x96">
    <link rel="icon" href="images/icone-114x114.png" sizes="114x114">
    <link rel="icon" href="images/icone-128x128.png" sizes="128x128">

    <link rel="apple-touch-icon" href="images/icone.png">
    <link rel="apple-touch-icon" href="images/icone-114x114.png" sizes="114x114">
    <link rel="apple-touch-icon" href="images/icone-128x128.png" sizes="128x128">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="loader"></div>
<div class="btn-acessivel">
    <p>
        <a href="javascript:menu()" title="Acessibilidade ALT A" class="text-center">
            <i class="fas fa-wheelchair fa-3x"></i>
            Acessibilidade<br>(ALT A)
        </a>
    </p>
</div>
<div class="menu-acessivel">
    <p class="text-center"><strong>Menu acessível:</strong><br>
        <a href="javascript:contraste()" title="Com contraste" class="btn btn-info">Com contrate ( ALT O )</a>
        <a href="javascript:normal()" title="Sem contraste" class="btn btn-info">Sem contraste ( ALT N )</a>
        <a href="javascript:aumentar()" title="Aumentar tamanho da fonte" class="btn btn-info">A+ (ALT +)</a>
        <a href="javascript:diminuir()" title="Diminuir tamanho da fonte" class="btn btn-info">A- (ALT -)</a>
        <a href="javascript:conteudo()" title="Ir para o conteúdo" class="btn btn-info">Ir para o conteúdo ( ALT C )</a>
        <a href="javascript:menu()" title="Fechar ALT F" class="btn btn-danger">Fechar ( ALT F )</a>
    </p>
</div>

<nav class="navbar fixed-top navbar-expand-lg navbar-light">

    <div class="clearfix"></div>

    <a class="navbar-brand" href="home">
        <img src="images/logo.png" alt="Blog Danilo" title="Blog Danilo" srcset="images/logo-menor.png 0.5x">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item <?= $h; ?>">
                <a class="nav-link" href="home">Home</a>
            </li>
            <li class="nav-item <?= $s; ?>">
                <a class="nav-link" href="sobre">Sobre</a>
            </li>
            <li class="nav-item <?= $p; ?>">
                <a class="nav-link" href="portfolio">Portfólio</a>
            </li>
            <li class="nav-item <?= $c; ?>">
                <a class="nav-link" href="contato">Contato</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.instagram.com" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://pt-br.facebook.com/danilo.araujo.16568" target="_blank">
                    <i class="fab fa-facebook"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://twitter.com/danylo_new" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contato">
                    <i class="fas fa-envelope"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>

<main>

    <?php


    $pagina = "paginas/" . $pagina . ".php";

    if (file_exists($pagina))
        require $pagina;
    else
        require "erro.php";

    ?>


</main>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <a href="home" title="Blog Danilo">
                    <img src="images/logob.png" alt="Blog Danilo" title="Blog Danilo">
                </a>
            </div>
            <div class="col-12 col-md-8">
                <p>
                    <a href="home" title="Home">Home</a>
                    <a href="sobre" title="Sobre">Sobre</a>
                    <a href="contato" title="Contato">Contato</a>
                </p>
            </div>
        </div>
        <hr>
        <div class="row bottom">
            <div class="col-12 col-md-6">
                <p><?= date("Y"); ?> - Danilo Souza - Todos os direitos reservados</p>
            </div>
            <div class="col-12 col-md-6">
                <p>
                    <a class="nav-link" href="http://www.instagram.com" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="nav-link" href="https://pt-br.facebook.com/danilo.araujo.16568" target="_blank">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a class="nav-link" href="https://twitter.com/danylo_new" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="nav-link" href="contato">
                        <i class="fas fa-envelope"></i>
                    </a>
                </p>
            </div>
        </div>
    </div>
</footer>


<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.inputmask.min.js"></script>
<script type="text/javascript" src="js/bindings/inputmask.binding.js"></script>

<script type="text/javascript">

    function menu() {
        $(".menu-acessivel").toggle();
    }

    function aumentar() {
        fonte = parseInt($("p").css("fontSize")) + 2;
        $("p").css("fontSize", fonte);
    }

    function diminuir() {
        fonte = parseInt($("p").css("fontSize")) - 2;
        $("p").css("fontSize", fonte);
    }


    function conteudo() {
        $('html,body').animate({
            scrollTop: $(".conteudo").offset().top
        }, 500);
    }

    function contraste() {
        $("body").addClass("body");
    }

    function normal() {
        $("body").removeClass("body");
        $("p").css("fontSize", 14);
    }

    $(document).ready(function () {
        $(".loader").fadeOut("slow");
    })

    $(document).keypress(function (e) {

        tecla = e.which;
        console.log(tecla);
        //alt +
        if (tecla == 43) {
            aumentar()
        }
        //alt -
        else if (tecla == 45) {
            diminuir()
        }
        //alt 0
        else if (tecla == 48) {
            normal()
        }
        //seguir conteudo - alt c
        else if (tecla == 8354) {
            conteudo()
        }
        //contraste - alt o
        else if (tecla == 248) {
            contraste();
        }
        //contraste normal - alt n
        else if (tecla == 331) {
            normal();
        }
        //menu - alt a
        else if (tecla == 230) {
            menu();
        }
    })

</script>
</body>
</html>
