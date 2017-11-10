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
        <script src="https://www.gstatic.com/firebasejs/4.6.1/firebase.js"></script>

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

            .minicursos{
                font-size: 70px;
            }
            .icofont-file-excel{color: #28a745}
            .icofont-file-word{color: #004085}
            .icofont-camera{color: #004085}
            .icofont-tools-alt-2{color: #d39e00}
            .icofont-social-opencart{color: #cc0000}
            .icofont-file-image{color: #004085}
            .icofont-ui-cart{color: #00638c}

            .confirmacao{
                display: none;
            }
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
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-3 col-xl-3 bg-success">
                                <p class="lead">19:00 hs</p>
                                <p class="lead">Momento Cultural</p>
                            </div>
                            <div class="col-12 col-sm-3 col-xl-3 bg-primary">
                                <p class="lead">19:20 hs</p>
                                <p class="lead">Cerimonial de Abertura do Seminário</p>
                            </div>
                        </div>
                        <br/>
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-3 col-xl-3 bg-success">
                                <p class="lead">20:00 hs</p>
                                <p class="lead">Mesa-redonda</p>
                            </div>
                            <div class="col-12 col-sm-3 col-xl-3 bg-primary">
                                <p class="lead">22:00 hs</p>
                                <p class="lead">Agradecimentos finais</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-3 col-xl-3 bg-success">
                                <p class="lead">19:00</p>
                                <p class="lead">Momento Cultural</p>
                            </div>
                            <div class="col-12 col-sm-3 col-xl-3 bg-primary">
                                <p class="lead">19:20</p>
                                <p class="lead">Abertura da Feira de Ideias e Workshop</p>
                            </div>
                        </div>
                        <br/>
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-3 col-xl-3 bg-success">
                                <p class="lead">20:50</p>
                                <p class="lead">Banners, Papers, minicursos EAD</p>
                            </div>
                            <div class="col-12 col-sm-3 col-xl-3 bg-primary">
                                <p class="lead">22:15</p>
                                <p class="lead">Mesa Redonda</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-3 col-xl-3 bg-success">
                                <p class="lead">19:00</p>
                                <p class="lead">Momento Cultural</p>
                            </div>
                            <div class="col-12 col-sm-3 col-xl-3 bg-primary">
                                <p class="lead">19:00</p>
                                <p class="lead">Torneio Robocode</p>
                            </div>
                        </div>
                        <br/>
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-3 col-xl-3 bg-success">
                                <p class="lead">19:00</p>
                                <p class="lead">Workshop de desenvolvimento</p>
                            </div>
                            <div class="col-12 col-sm-3 col-xl-3 bg-primary">
                                <p class="lead">19:00</p>
                                <p class="lead">Minicursos</p>
                            </div>
                            <div class="col-12 col-sm-3 col-xl-3 bg-info">
                                <p class="lead">22:00</p>
                                <p class="lead">Agradecimentos finais</p>
                            </div>
                        </div>
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
                <br/>
                <br/>
                <br/>
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
                    <form id="newsletter" style="text-align: justify; color: #fff">
                        <p class="lead">Cadastre-se para receber novidades!</p>
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>                        
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
                        </div>
                        <p class="lead col-12 bg-success white-text confirmacao" style="text-align: center; border-radius: 5px;">Enviado com sucesso!!!</p>
                        <button type="submit" class="btn col-12 btn-primary">Enviar</button>
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
            <br>
            <p class="lead" style="color: #fff; font-size: 30px"><b>#SitesUnievangelica</b></p>
            <br/>
            <br/>
            <br/>
        </div>
        <br/>
        <p class="lead" style="text-align: center; font-size: 15px"><b>Copyright &copy; 2017 Engenharia de Computação. Todos os Direitos Reservados</b></p>

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
                        <br/>
                        <p class="lead" style="text-align: justify">Cadastre a equipe no formulário abaixo para participar da competição.</p>
                        <br/>
                        <p class="lead"><b style="color: red">*</b> Campos obrigatórios</p>
                        <div class="container">
                            <form id="formRobocode">
                                <div class="form-group col-12">
                                    <label class="control-label">Nome da Equipe<b style="color: red">*</b>:</label>
                                    <input class="form-control" type="text" id="groupname" placeholder="Nome"/>
                                </div>
                                <div class="form-group col-12">
                                    <label class="control-label">Membro 1<b style="color: red">*</b>:</label>
                                    <input class="form-control" type="text" id="member1" placeholder="Membro 1" required/>
                                </div>
                                <div class="form-group col-12">
                                    <label class="control-label">Membro 2 (opcional):</label>
                                    <input class="form-control" type="text" id="member2" placeholder="Membro 2"/>
                                </div>
                                <div class="form-group col-12">
                                    <label class="control-label">Membro 3 (opcional):</label>
                                    <input class="form-control" type="text" id="member3" placeholder="Membro 3"/>
                                </div>
                                <div class="form-group col-10">
                                    <label class="control-label">Email para contato<b style="color: red">*</b>:</label>
                                    <input class="form-control" type="email" id="emailEquipe" placeholder="E-mail"/>
                                </div>
                                <div class="form-check col-12">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                        Aceito os termos do <a href="" target="blank" style="color: #285AEB">Edital</a>
                                    </label>
                                </div>
                                <button type="submit" class="btn col-12 btn-primary">Enviar</button>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
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
            <div class="modal-dialog modal-lg" role="document">
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
                        <br/>
                        <p class="lead" style="text-align: center"><b>Minicursos EAD<br/>Clique no ícone do curso para se inscrever</b></p>
                        <br/>
                        <div class="row justify-content-center" style="text-align: center">
                            <div class="col-12 col-sm-4 col-xl-3">
                                <a href="http://ead.unievangelica.edu.br/excel/inscricao/index.php?idCurso=35&idEdicao=109" target="blank" style="text-decoration: none"><i class="icofont icofont-file-excel minicursos"></i></a>
                                <p class="lead"><b>Excel</b></p>
                            </div>
                            <div class="col-12 col-sm-4 col-xl-3">
                                <a href="http://ead.unievangelica.edu.br/word/inscricao/index.php?idCurso=35&idEdicao=110" target="blank" style="text-decoration: none"><i class="icofont icofont-file-word minicursos"></i></a>
                                <p class="lead"><b>Word</b></p>
                            </div>
                            <div class="col-12 col-sm-4 col-xl-3">
                                <a href="http://ead.unievangelica.edu.br/manutencaocomputadores/inscricao/index.php?idCurso=35&idEdicao=111" target="blank" style="text-decoration: none"><i class="icofont icofont-tools-alt-2 minicursos"></i></a>
                                <p class="lead"><b>Manutenção de Computadores</b></p>
                            </div>
                        </div>
                        <br/>
                        <div class="row justify-content-center" style="text-align: center">
                            <div class="col-12 col-sm-3 col-xl-3">
                                <a href="http://ead.unievangelica.edu.br/ecommerce/inscricao/index.php?idCurso=35&idEdicao=113" target="blank" style="text-decoration: none"><i class="icofont icofont-ui-cart minicursos"></i></a>
                                <p class="lead"><b>E-commerce</b></p>
                            </div>
                            <div class="col-12 col-sm-3 col-xl-3">
                                <a href="http://ead.unievangelica.edu.br/edicaoimagensfilmadora/inscricao/index.php?idCurso=35&idEdicao=114" target="blank" style="text-decoration: none"><i class="icofont icofont-file-image minicursos"></i></a>
                                <p class="lead"><b>Edição de Imagens - Filmora</b></p>
                            </div>
                            <div class="col-12 col-sm-3 col-xl-3">
                                <a href="http://ead.unievangelica.edu.br/marketingdigital/inscricao/index.php?idCurso=35&idEdicao=115" target="blank" style="text-decoration: none"><i class="icofont icofont-social-opencart minicursos"></i></a>
                                <p class="lead"><b>Marketing Digital</b></p>
                            </div>
                            <div class="col-12 col-sm-3 col-xl-3">
                                <a href="http://ead.unievangelica.edu.br/photoshop/inscricao/index.php?idCurso=35&idEdicao=116" target="blank" style="text-decoration: none"><i class="icofont icofont-camera minicursos"></i></a>
                                <p class="lead"><b>Photoshop</b></p>
                            </div>
                        </div>
                        <br/>
                        <p class="lead">OBS: <b style="color: red">As Inscrições estarão abertas até dia 26/11/2017</b></p>
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
                        </div>
                        <br/>
                        <p class="lead" style="text-align: justify"><b>O jogo Investidor “DA HORA” tem como objetivo envolver os alunos do curso
                                de Engenharia de Computação nas atividades desenvolvidas nos Seminários
                                Interdisciplinares de Tecnologia e Sociedade - SITES. É utilizada como estratégia
                                motivacional cujo desígnio é fortalecer a percepção dos alunos quanto aos projetos que
                                são desenvolvidos ao longo das disciplinas de Projeto Interdisciplinar.</b></p>
                        <p class="lead"><b>Edital do Jogo da Hora: <a href="files/XVII_SITES_Edital_Jogo_Da_Hora.pdf" target="blank" style="color: red;text-decoration: none">Edital</a></b></p>
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
                        <br/>
                        <p class="lead"><a href="files/edital-robocode.pdf" target="blank" style="color: red; text-decoration: none">Clique aqui</a> para visualizar o regulamento da competição.</p>
                        <p class="lead">OBS.: Clique em inscrição robocode para cadastrar sua equipe.</p>
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
        <script src="controller/app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.6.1/firebase.js"></script>
        <script src="controller/robocode/robocode.js"></script>        
    </body>
</html>

