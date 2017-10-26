<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>XVIIª Semana Interdisciplinar de Tecnologia e Sociedade</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/grayscale.min.css" rel="stylesheet" type="text/css"/>
        <style>
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-faded">
            <a class="navbar-brand" id="botao-teste" href="#entrada">
                <img class="img-responsive" src="images/logo-branca.png"margin-left: style="margin-left:30px;" width="95" height="25"/>                
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="navbar-nav ml-auto" style="padding-right: 40px">
                    <li class="nav-item">
                        <a class="nav-link" href="#entrada">Início <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#atividades">Atividades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#agenda">Agenda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Equipe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Contato</a>
                    </li>
                </ul>

            </div>
        </nav>
        <!-- Cabeçalho -->
        <header class="masthead" id="entrada">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto" id="botao-teste">
                            <img class="img-responsive" src="images/Logo circle.png" width="250" height="250"/> 
                            <p class="display-4" style="color: #fff">XVIIª Semana Interdisciplinar de Tecnologia e Sociedade</p>
                            <a href="#atividades" id="about" class="btn btn-circle js-scroll-trigger">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid" id="atividades" style="text-align: center">
            <br/>
            <br/>
            <h1 class="display-4">Atividades</h1>
            <br/>
            <br/>
            <div class="row justify-content-center">
                <div class="col-12 col-xl-3">
                    <i class="fa fa-lightbulb-o" style="font-size: 55px"></i>
                    <p class="lead" style="text-align: justify">É um fato conhecido de todos que um leitor se distrairá com o 
                        conteúdo de texto legível de uma página quando estiver examinando sua diagramação.</p>
                </div>
                <div class="col-12 col-xl-3">
                    <i class="fa fa-pencil" style="font-size: 55px"></i>
                    <p class="lead" style="text-align: justify">É um fato conhecido de todos que um leitor se distrairá com o 
                        conteúdo de texto legível de uma página quando estiver examinando sua diagramação.</p>
                </div>
                <div class="col-12 col-xl-3">
                    <i class="fa fa-code" style="font-size: 55px"></i>
                    <p class="lead" style="text-align: justify">É um fato conhecido de todos que um leitor se distrairá com o 
                        conteúdo de texto legível de uma página quando estiver examinando sua diagramação.</p>
                </div>
            </div>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
        </div>
        <div class="container-fluid" id="agenda" style="text-align: center">
            <br/>
            <br/>
            <h1 class="display-4">Agenda</h1>
            <br/>
            <br/>
        </div>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function () {
                // Add scrollspy to <body>
                $('body').scrollspy({target: ".navbar", offset: 90});

                // Add smooth scrolling on all links inside the navbar
                $("#myNavbar a").on('click', function (event) {
                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") {
                        // Prevent default anchor click behavior
                        event.preventDefault();

                        // Store hash
                        var hash = this.hash;

                        // Using jQuery's animate() method to add smooth page scroll
                        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 800, function () {

                            // Add hash (#) to URL when done scrolling (default click behavior)
                            window.location.hash = hash;
                        });
                    }  // End if
                }); 
                $("#about").on('click', function (event) {
                    if (this.hash !== "") {
                        // Prevent default anchor click behavior
                        event.preventDefault();

                        // Store hash
                        var hash = this.hash;

                        // Using jQuery's animate() method to add smooth page scroll
                        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 800, function () {

                            // Add hash (#) to URL when done scrolling (default click behavior)
                            window.location.hash = hash;
                        });
                    }
                });
               
            });
        </script>
        <script>
            $(window).scroll(function(){
                if($(document).scrollTop() > 500){
                    $('nav').addClass('bg-dark');
                    $('nav').removeClass('bg-faded');
                }
                else{
                    $('nav').removeClass('bg-dark');
                    $('nav').addClass('bg-faded');
                }
            })
        </script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>

