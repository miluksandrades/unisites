<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>XVII Seminário Interdisciplinar de Tecnologia e Sociedade</title>
        <link href="images/Logo circle.png" type="img/png" rel="icon"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/grayscale.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/icofont.css" rel="stylesheet" type="text/css"/>

        <style>
            .icones{font-size: 100px;color: #004085}

            a{color: #fff}

            .icontacts{font-size: 60px;color: #fff;}
            .fa-facebook:hover{color: #3E67B6}
            .fa-instagram:hover{background: -webkit-linear-gradient(45deg, #ffff14, #fd5949, #d6249f, #285AEB);
                                -webkit-background-clip: text;
                                -webkit-text-fill-color: transparent;}
            .fa-youtube-play:hover{color: #cc0000}

            .logo{width: 250px;height: 250px;}
            @media(max-width: 600px){.logo{width: 200px;height: 200px;}}

            .conteudo{margin-top: -100px}
            @media(max-width: 600px){.conteudo{margin-top: -150px}}

            /*media query icon isntagram*/
            .instagram{display: block;}
            .minstagram{display: none;}
            @media(max-width: 600px){.instagram{display: none;}.minstagram{display: block;}}
        </style>
    </head>
    <body>
        <!--Barra de Navagação-->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-faded">
            <a class="navbar-brand" id="botao-teste" href="#entrada">
                <img class="img-responsive" src="images/logo-branca.png"margin-left: style="margin-left:30px;" width="85" height="25"/>                
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="navbar-nav ml-auto" style="padding-right: 100px">
                    <li class="nav-item">
                        <a class="nav-link" href="#entrada">Início <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#atividades">Atividades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#agenda">Programação</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#equipe">Equipe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contato">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" data-toggle="modal" data-target="#modal-robocode" style="margin-top: -3px" class="nav-link"><button class="btn btn-sm btn-primary">Inscrição Robocode</button></a>
                    </li>
                </ul>

            </div>
        </nav>
        <!-- Cabeçalho -->
        <header class="masthead" id="entrada">
            <div class="intro-body">
                <div class="container conteudo">
                    <div class="row">
                        <div class="col-lg-8 mx-auto" id="botao-teste">
                            <img class="img-responsive logo" src="images/logo_sites.png"/> 
                            <h1 class="display-4" style="color: #fff">XVII Seminário Interdisciplinar de Tecnologia e Sociedade</h1>
                            <a href="#atividades" id="about" class="btn btn-circle js-scroll-trigger">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--Atividades-->
        <div class="container-fluid" id="atividades" style="text-align: center">
            <br/>
            <br/>
            <br/>
            <h1 class="display-4">Atividades</h1>
            <br/>
            <br/>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-3 col-xl-2">
                    <a href="#" data-toggle="modal" data-target="#modal-banner"><i class="fa fa-file-text-o icones"></i></a>
                    <h4><i>Banners</i></h4>
                    <p class="lead">Apresentação de <i>Banners</i> - 2º período</p>
                </div>
                <div class="col-12 col-sm-3 col-xl-2">
                    <a href="#" data-toggle="modal" data-target="#modal-paper"><i class="fa fa-file-o icones"></i></a>
                    <h4><i>Papers</i></h4>
                    <p class="lead">Apresentação de <i>Papers</i> - 4º período</p>
                </div>
                <div class="col-12 col-sm-3 col-xl-2">
                    <a href="#" data-toggle="modal" data-target="#modal-mini"><i class="fa fa-book icones"></i></a>
                    <h4>Minicursos</h4>
                    <p class="lead">Minicursos - 5º período</p>
                </div>
                <div class="col-12 col-sm-3 col-xl-2">
                    <a href="#" data-toggle="modal" data-target="#modal-work"><i class="fa fa-television icones"></i></a>
                    <h4><i>Workshops</i></h4>
                    <p class="lead">Workshop de projetos - 7º período</p>
                </div>
            </div>
            <br/>
            <br/>
            <br/>
            <br/>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-3 col-xl-2">
                    <a href="#" data-toggle="modal" data-target="#modal-jogo"><i class="fa fa-trophy icones"></i></a>
                    <h4>Jogo da Hora</h4>
                    <p class="lead">Votação do melhor projeto do SITES</p>
                </div>
                <div class="col-12 col-sm-3 col-xl-2">
                    <a href="#" data-toggle="modal" data-target="#modal-feira"><i class="fa fa-lightbulb-o icones"></i></a>
                    <h4>Feira de Idéias</h4>
                    <p class="lead">Apresentação de Ideias - 6º período</p>
                </div>
                <div class="col-12 col-sm-3 col-xl-2">
                    <a href="#" data-toggle="modal" data-target="#modal-robo"><i class="fa fa-code icones"></i></a>
                    <h4><i>Robocodes</i></h4>
                    <p class="lead">Maratona programação do Curso de Engenharia de Computação</p>
                </div>
            </div>

        </div>
        <br/>
        <br/>
        <br/>
        <!--Programação-->
        <div class="container-fluid" id="agenda" style="text-align: center; color: #fff; background: url('images/computer.png')">
            <br/>
            <br/>
            <br/>
            <h1 class="display-4">Programação</h1>
            <br/>
            <div id="carouselprogramacao" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselprogramacao" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselprogramacao" data-slide-to="1"></li>
                    <li data-target="#carouselprogramacao" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/programacao/1.png" alt="Dia 4/12">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/programacao/2.png" alt="Dia 5/12">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/programacao/3.png" alt="Dia 6/12">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselprogramacao" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselprogramacao" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <br/>
        </div>
        <!--Equipe-->
        <div class="container-fluid" id="equipe" style="text-align: center">
            <br/>
            <br/>
            <br/>
            <h1 class="display-4">Organização</h1>
            <br/>
            <p class="lead" style="font-size: 30px">Realização:</p>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-4 col-xl-3">
                    <img class="img-responsive" src="images/organizacao/bacharel.png" width="170" height="120"/>
                </div>
                <div class="col-12 col-sm-4 col-xl-3">
                    <img class="img-responsive" src="images/organizacao/ftt.png" width="300" height="90"/>
                </div>
                <div class="col-12 col-sm-4 col-xl-3">
                    <img class="img-responsive" src="images/organizacao/unievangelica.png" width="180" height="140"/>
                </div>
            </div>
            <br/>
            <p class="lead" style="font-size: 30px">Patrocinadores:</p>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-4 col-xl-3">
                    <img class="img-responsive" src="images/organizacao/telgo-light.png" width="200" height="90"/>
                </div>
                <div class="col-12 col-sm-4 col-xl-3">
                    <img class="img-responsive" src="images/organizacao/teuto.png" width="200" height="80"/>
                </div>
            </div>
        </div>
        <br/>
        <br/>
        <br/>
        <!--Contatos-->
        <div class="container-fluid" id="contato" style="background: url('images/office-real.png');text-align: center">
            <br/>
            <br/>
            <h1 class="display-4" style="color: #fff">Contato</h1>
            <br/>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-4 col-xl-4">
                    <form style="text-align: justify; color: #fff">
                        <p class="lead">Cadastre-se para receber novidades!</p>
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" placeholder="Nome">                        
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email" placeholder="E-mail">
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
                <div class="col-4 col-sm-2 col-xl-1 icontacts">
                    <a href="https://fb.com/sitesunievangelica" target="blank"><i class="fa fa-facebook"></i></a>
                    <p class="lead">Facebook</p>
                </div>
                <div class="col-4 col-sm-2 col-xl-1 icontacts instagram">
                    <a href="http://instagram.com/sitesunievangelica" target="blank"><i class="fa fa-instagram"></i></a>
                    <p class="lead">Instagram</p>
                </div>
                <div class="col-4 col-sm-2 col-xl-1 icontacts minstagram">
                    <a href="instagram://user?username=sitesunievangelica" target="blank"><i class="fa fa-instagram"></i></a>
                    <p class="lead">Instagram</p>
                </div>
                <div class="col-4 col-sm-2 col-xl-1 icontacts">
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                    <p class="lead">Youtube</p>
                </div>
            </div>
            <p class="lead" style="color: #fff; font-size: 30px"><b>#SitesUnievangelica</b></p>
            <br/>
            <br/>
            <br/>
        </div>
        <br/>
        <p class="lead" style="text-align: center"><b>Copyright &copy; 2017 Engenharia de Computação. Todos os Direitos Reservados</b></p>

        <!--Modal's-->

        <!--Modal inscrição-->
        <div class="modal fade" id="modal-robocode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Robocode</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fa fa-times"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-3 col-xl-3" style="text-align: center">
                                <i class="fa fa-android icones"></i>
                            </div>                            
                        </div>
                        <div class="container">
                            <div class="row">
                                <form>
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Nome Completo</label>
                                        <input class="form-control" type="text" placeholder="Nome"/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Email</label>
                                        <input class="form-control" type="text" placeholder="Nome"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <!--Modal Banner-->
        <div class="modal fade" id="modal-banner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Banners</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-3 col-xl-3" style="text-align: center">
                                <i class="fa fa-file-text-o icones"></i>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-6">
                                <p class="lead">Apresentação de Banners dos projetos do 3º Período</p>
                            </div>                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <!--Modal paper-->
        <div class="modal fade" id="modal-paper" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Papers</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-3 col-xl-3" style="text-align: center">
                                <i class="fa fa-file-o icones"></i>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-6">
                                <p class="lead">Apresentação de Papers dos projetos do 4º Período</p>
                            </div>                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <!--Modal minicursos-->
        <div class="modal fade" id="modal-mini" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Minicursos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-3 col-xl-3" style="text-align: center">
                                <i class="fa fa-book icones"></i>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-6">
                                <p class="lead">Minicursos ministrados pelos alunos do 5º Período</p>
                            </div>                            
                        </div>
                        <p class="lead" style="text-align: center"><b>Minicursos EAD</b></p>
                        <br/>
                        <div class="row justify-content-center" style="text-align: center">
                            <div class="col-12 col-sm-4 col-xl-4">
                                <i class="icofont icofont-file-excel icones"></i>
                                <p class="lead">Excel</p>
                            </div>
                            <div class="col-12 col-sm-4 col-xl-4">
                                <i class="icofont icofont-file-word icones"></i>
                                <p class="lead">Word</p>
                            </div>
                            <div class="col-12 col-sm-4 col-xl-4">
                                <i class="icofont icofont-tools-alt-2 icones"></i>
                                <p class="lead">Manutenção de Computadores</p>
                            </div>
                        </div>
                        <br/>
                        <div class="row justify-content-center" style="text-align: center">
                            <div class="col-12 col-sm-3 col-xl-3">
                                <i class="icofont icofont-ui-cart icones"></i>
                                <p class="lead">E-commerce</p>
                            </div>
                            <div class="col-12 col-sm-3 col-xl-3">
                                <i class="icofont icofont-file-image icones"></i>
                                <p class="lead">Edição de Imagens - Filmora</p>
                            </div>
                            <div class="col-12 col-sm-3 col-xl-3">
                                <i class="icofont icofont-social-opencart icones"></i>
                                <p class="lead">Marketing Digital</p>
                            </div>
                            <div class="col-12 col-sm-3 col-xl-3">
                                <i class="icofont icofont-camera icones"></i>
                                <p class="lead">Photoshop</p>
                            </div>
                        </div>
                        <br/>
                        <p class="lead">OBS: As Inscrições estarão abertas até dia 26/11/2017</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <!--Modal workshops-->
        <div class="modal fade" id="modal-work" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Workshops</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-3 col-xl-3" style="text-align: center">
                                <i class="fa fa-television icones"></i>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-6">
                                <p class="lead">Workshops dos projetos desenvolvidos do 7º Período</p>
                            </div>                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <!--modal jogo da hora-->
        <div class="modal fade" id="modal-jogo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Jogo da Hora</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-3 col-xl-3"  style="text-align: center">
                                <i class="fa fa-trophy icones"></i>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-6">
                                <p class="lead">Votação do projeto com mais contribuição para a sociedade</p>
                            </div>                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <!--Modal feira de ideias-->
        <div class="modal fade" id="modal-feira" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Feira de Ideias</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-3 col-xl-3" style="text-align: center">
                                <i class="fa fa-lightbulb-o icones"></i>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-6">
                                <p class="lead">Apresentação de projetos do 6º Período</p>
                            </div>                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <!--Modal Robocodes-->
        <div class="modal fade" id="modal-robo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Robocodes</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-3 col-xl-3" style="text-align: center">
                                <i class="fa fa-code icones"></i>
                            </div>
                            <div class="col-12 col-sm-7 col-xl-7">
                                <p class="lead">I competição de programação do curso de Engenharia de Computação</p>
                            </div>                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
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
            $(window).scroll(function () {
                if ($(document).scrollTop() > 500) {
                    $('nav').addClass('bg-dark');
                    $('nav').removeClass('bg-faded');
                } else {
                    $('nav').removeClass('bg-dark');
                    $('nav').addClass('bg-faded');
                }
            });
        </script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>

