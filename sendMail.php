<?php

    require("class.phpmailer.php");

    if(!isset($_POST["email"]) || !isset($_POST["nome"])){
        echo "Dados invalidados";
        header( "refresh:5; url=index.php" );
        die();
    }

    $nome = $_POST["nome"];
    $email = $_POST["email"];
       
    $mail = new PHPMailer(true);
    $mail->IsSMTP();
    try{
        $mail->Host = 'smtp.gmail.com';//Servidor SMTP
        $mail->SMTPAuth = true;//Usa a autenticação SMTP
        $mail->SMTPSecure = 'ssl';
        $mail->SMTPDebug = 2;
        $mail->SMTPKeepAlive = true;
        $mail->Port = 465;//Porta de conexão SMTP
        $mail->Username = 'recrutadorsysrecruit@gmail.com';//Usario do seervidor
        $mail->Password = 'Adm*5509';
        //Define o remetente
        $mail->SetFrom('recrutadorsysrecruit@gmail.com', 'SITES');
        //$mail->AddReplyTo('recrutadorsysrecruit@gmail.com', $nome);;
        $mail->Subject = 'CONFIRMAÇÂO SITES';
        //Define o detinatário
        $mail->AddAddress($email, 'SITES');
        $mail->MsgHTML('Nome: '.$nome.'<br/><br/>'.'E-Mail: '.$email.'<br/>');
        $mail->Send();
        echo "Enviado com sucesso";
        header( "refresh:5; url=index.php" );
    } catch(phpmailerException $e){
        echo $e->errorMessage();
        //header( "refresh:5; url=index.php" );
    }
