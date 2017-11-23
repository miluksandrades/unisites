<html>
<head>
    <meta http-equiv="refresh" content=5;url="http://www.sitesunievangelica.com.br/">
</head>
<body>
    <?php
        if($result_canc == 'cancel'){
            echo '<h2>Cancelamento de Inscri&ccedil;&atilde;o Realizado com sucesso!</h2>';
        }else if($result_canc == 'notfound'){
            echo '<h2>Token de cancelamento não encontrado.</h2>';
        }
    ?>
    Você ser&aacute; redirecionado em instantes.
</body>
</html>