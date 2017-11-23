<html>
<head>
    <meta http-equiv="refresh" content=5;url="http://www.sitesunievangelica.com.br/">
</head>
<body>
    <?php
        if($result_canc == 'cancel'){
            echo '<h2>Cancelamento de Inscri&ccedil;&atilde;o Realizado com sucesso!</h2>';
        }else if($result_canc == 'notfound'){
            echo '<h2>Token de cancelamento n&atilde;o encontrado.</h2>';
        }
    ?>
    Voc&ecirc; ser&aacute; redirecionado em instantes.
</body>
</html>