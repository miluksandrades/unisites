<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>XVIª Semana Interdisciplinar de Tecnologia e Sociedade</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/grayscale.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-faded">
            <a class="navbar-brand" id="botao-teste" href="#entrada"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="navbar-nav ml-auto" style="padding-right: 40px">
                    <li class="nav-item">
                        <a class="nav-link" href="#entrada">Início <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Atividades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Agenda</a>
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
                            <img class="img-responsive" src="images/Logo circle.png" width="200" height="200"/> 
                            <p class="display-4" style="color: #000">XVIª Semana Interdisciplinar de Tecnologia e Sociedade</p>
                            <a href="#" class="btn btn-circle js-scroll-trigger">
                                <i class="fa fa-angle-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid">
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
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
            });
        </script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>

