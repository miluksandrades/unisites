<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>XVII Seminário Interdisciplinar de Tecnologia e Sociedade</title>
        <link href="../images/Logo circle.png" type="img/png" rel="icon"/>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../css/grayscale.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/icofont.css" rel="stylesheet" type="text/css"/>
        <script src="https://www.gstatic.com/firebasejs/4.6.1/firebase.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/custom.css">
            
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


        <!-- inscrição-->
        <p class="lead" style="text-align: justify">Cadastre a equipe no formulário abaixo para participar da competição.</p>
                        
                        <p class="lead"><b style="color: red"> <small>* Todos os campos são obrigatórios</small></b></p>
                        <div class="container">
                            <form id="formRobocode">
                                <div class="form-group col-12">
                                    <label class="control-label ">Nome da Equipe</label>
                                    <input class="form-control" type="text" id="team" name="team" placeholder="Nome"required/>
                                </div>
                                 <hr>
                                <div class="form-group col-12">
                                    <label class="control-label">Membro 1</label>
                                </div>
                                <div class="form-inline col-12">
                                        <label class="control-label col-md-1">Nome</label>
                                        <input class="form-control col-md-11" type="text" id="name1" name="name1" placeholder="Nome Membro 1" required/>
                                </div>
                                <div class="form-inline col-12" style="margin-top: .5rem;">
                                    <label class="col-md-1">Email</label>
                                    <input class="form-control col-md-8" type="text" id="email1" name="email1" placeholder="E-mail Membro 1" required/>
                                    <label class="col-md-2">Per&iacute;odo</label>
                                    <input class="form-control col-md-1" type="number" id="period1" name="period1" placeholder="" required/>
                                </div>
                                <hr>
                                <div class="form-group col-12">
                                    <label class="control-label">Membro 2</label>
                                </div>
                                <div class="form-inline col-12">
                                        <label class="control-label col-md-1">Nome</label>
                                        <input class="form-control col-md-11" type="text" id="name2" name="name2" placeholder="Nome Membro 2" required/>
                                </div>
                                <div class="form-inline col-12" style="margin-top: .5rem; margin-bottom: 1rem;">
                                    <label class="col-md-1">Email</label>
                                    <input class="form-control col-md-8" type="text" id="email2" name="email2" placeholder="E-mail Membro 2" required/>
                                    <label class="col-md-2">Per&iacute;odo</label>
                                    <input class="form-control col-md-1" type="number" id="period2" name="period2" placeholder="" required/>
                                </div>
                                <div class="form-check col-12">
                                    <label class="form-check-label">
                                        <input type="checkbox" id="checkedital" name="checkedital" class="form-check-input">
                                        Aceito os termos do <a href="" target="blank" style="color: #285AEB">Edital</a>
                                    </label>
                                    <div id="erroredital" class="erroredital"></div>
                                </div>
                                <button type="submit" class="btn col-12 btn-primary">Enviar</button>
                            </form>
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
                                <a href="http://ead.unievangelica.edu.br/excel/inscricao/index.php?idCurso=35&idEdicao=109" target="_blank" style="text-decoration: none"><i class="icofont icofont-file-excel minicursos"></i></a>
                                <p class="lead"><b>Excel</b></p>
                            </div>
                            <div class="col-12 col-sm-4 col-xl-3">
                                <a href="http://ead.unievangelica.edu.br/word/inscricao/index.php?idCurso=35&idEdicao=110" target="_blank" style="text-decoration: none"><i class="icofont icofont-file-word minicursos"></i></a>
                                <p class="lead"><b>Word</b></p>
                            </div>
                            <div class="col-12 col-sm-4 col-xl-3">
                                <a href="http://ead.unievangelica.edu.br/manutencaocomputadores/inscricao/index.php?idCurso=35&idEdicao=111" target="_blank" style="text-decoration: none"><i class="icofont icofont-tools-alt-2 minicursos"></i></a>
                                <p class="lead"><b>Manutenção de Computadores</b></p>
                            </div>
                        </div>
                        <br/>
                        <div class="row justify-content-center" style="text-align: center">
                            <div class="col-12 col-sm-3 col-xl-3">
                                <a href="http://ead.unievangelica.edu.br/ecommerce/inscricao/index.php?idCurso=35&idEdicao=113" target="_blank" style="text-decoration: none"><i class="icofont icofont-ui-cart minicursos"></i></a>
                                <p class="lead"><b>E-commerce</b></p>
                            </div>
                            <div class="col-12 col-sm-3 col-xl-3">
                                <a href="http://ead.unievangelica.edu.br/edicaoimagensfilmadora/inscricao/index.php?idCurso=35&idEdicao=114" target="_blank" style="text-decoration: none"><i class="icofont icofont-file-image minicursos"></i></a>
                                <p class="lead"><b>Edição de Imagens - Filmora</b></p>
                            </div>
                            <div class="col-12 col-sm-3 col-xl-3">
                                <a href="http://ead.unievangelica.edu.br/marketingdigital/inscricao/index.php?idCurso=35&idEdicao=115" target="_blank" style="text-decoration: none"><i class="icofont icofont-social-opencart minicursos"></i></a>
                                <p class="lead"><b>Marketing Digital</b></p>
                            </div>
                            <div class="col-12 col-sm-3 col-xl-3">
                                <a href="http://ead.unievangelica.edu.br/photoshop/inscricao/index.php?idCurso=35&idEdicao=116" target="_blank" style="text-decoration: none"><i class="icofont icofont-camera minicursos"></i></a>
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
                        <p class="lead"><b>Edital do Jogo da Hora: <a href="files/XVII_SITES_Edital_Jogo_Da_Hora.pdf" target="_blank" style="color: red;text-decoration: none">Edital</a></b></p>
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
                                <p class="lead">I Torneio Robocode do curso de Engenharia de Computação.</p>
                            </div>                            
                        </div>
                        <br/>
                        <p><a href="files/edital-robocode.pdf" target="_blank" style="color: red; text-decoration: none">Clique aqui</a> para visualizar o regulamento da competição.</p>
                        <p class="lead"> <a href="#" data-toggle="modal" data-target="#modal-robocode" style="margin-top: -3px" class="nav-link"><button class="btn btn-sm btn-primary">P&aacute;gina Robocode</button></a></p>
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

