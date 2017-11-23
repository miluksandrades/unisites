<?php

require_once "MemberModel.php";
require_once "TeamModel.php";
require_once "phpmailer/class.phpmailer.php";
require_once "phpmailer/class.smtp.php";

class UnSubscription
{
    private $mail;

    public function __construct(){
        $this->configEmail();
        $this->handle();
    }

    private function configEmail(){
        $this->mail = new PHPMailer(true);
        $this->mail->IsSMTP();

        $this->mail->Host = 'mail.com.br';//Servidor SMTP
        $this->mail->SMTPAuth = true;//Usa a autenticação SMTP
        $this->mail->SMTPSecure = 'ssl';
        $this->mail->SMTPDebug = false;
        $this->mail->SMTPKeepAlive = true;
        $this->mail->Port = 465;//Porta de conexão SMTP
        $this->mail->Username = 'contato.com.br';//Usario do seervidor
        $this->mail->Password = '123';
        $this->mail->CharSet = 'UTF-8';
        //Define o remetente
        $this->mail->SetFrom('contato.com.br', 'SITES - ROBOCODE');
    }

    private function handle(){
        $result_canc = "notfound";
        
        if(isset($_GET['token_cancel'])){
            $token_cancel_email = trim(htmlentities($_GET['token_cancel']));
            $team = new TeamModel();
            if($team->loadByTokenCancel($token_cancel_email)){
                
                $memberM = new MemberModel();
                $members  = $memberM->loadMembersByTeam($team->getId());

                if($members){
                    $nameMembers = "";
                    foreach($members as $row){
                        $this->mail->AddAddress($row['email'], 'SITES');
                        $nameMembers .= $row['name'].', ';
                    }
                    $nameMembers = substr($nameMembers, 0, -2);

                    $team->cancel();
                    $this->avisoCancel($team->name, $nameMembers);

                    //Novo time
                    $newTeam = new TeamModel();
                    if($newTeam->loadByTokenCancelWait($token_cancel_email)){
                        $memberM2 = new MemberModel();
                        $members2 = $memberM2->loadMembersByTeam($newTeam->getId());

                        $this->configEmail();

                        if($members2){
                            $nameMembers2 = "";
                            foreach($members2 as $row){
                                $this->mail->AddAddress($row['email'], 'SITES');
                                $nameMembers2 .= $row['name'].', ';
                            }
                            $nameMembers2 = substr($nameMembers2, 0, -2);

                            $newTeam->activate();
                            $this->avisoInscricao($newTeam->name, $nameMembers2);
                        }
                    }
                    $result_canc = 'cancel';
                }
            }
        }
        require_once('unsubscription_message.php');
    }


    private function avisoInscricao($teamName, $membersName){
        $this->mail->Subject = 'Confirmação de Inscrição - ROBOCODE';
          
        $body = "<h1><strong> 1&ordm; TORNEIO ROBOCODE DA UNIEVANG&Eacute;LICA - SITES</strong></h1></br>";
        $body .= "Sua inscri&ccedil;&atilde;o foi confirmada para o 1&ordm; Torneio ROBOCODE da Unievang&eacute;lica.</br></br>";
        $body .= "<strong>Equipe:</strong> ".$teamName."</br>";
        $body .= "<strong>Membros:</strong> ". $membersName ."</br></br>";

        $this->mail->MsgHTML($body);
        $this->mail->Send();  
    }

    private function avisoCancel($teamName, $membersName){

        $this->mail->Subject = 'Cancelamento de Inscrição - ROBOCODE';
          
        $body = "<h1><strong> 1&ordm; TORNEIO ROBOCODE DA UNIEVANG&Eacute;LICA - SITES</strong></h1></br>";
        $body .= "Sua inscrição foi cancelada devido a realiza&ccedil;&atilde;o de uma nova inscri&ccedil;&atilde;o de um membro do time.</br></br>";
        $body .= "<strong>Equipe:</strong> ".$teamName."</br>";
        $body .= "<strong>Membros:</strong> ". $membersName ."</br></br>";
        
        $this->mail->MsgHTML($body);
        $this->mail->Send();  
    }

}

new UnSubscription();