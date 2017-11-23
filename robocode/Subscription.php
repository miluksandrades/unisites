<?php

require_once "MemberModel.php";
require_once "TeamModel.php";
require_once "phpmailer/class.phpmailer.php";
require_once "phpmailer/class.smtp.php";

class Subscription
{   
    private $mail;

    public function __construct(){
        $this->configEmail();
        $this->handle();
    }

    public function handle()
    {
        $jsonData = file_get_contents('php://input');

        if (strlen($jsonData) > 0 && $this->isValidJSON($jsonData)){
           
           try{ 
                $subsData = json_decode($jsonData);
                $existTeam = false;
                $token = md5(microtime());

                $member1 = new MemberModel();
                $member2 = new MemberModel();
                $teamModel = new TeamModel();
                if($member1->loadByEmail($subsData->member1Email)){
                    $teamModel->loadById($member1->getTeamId());
                    $teamModel->cancel_token = $token;
                    $teamModel->updCancelToken();

                    $existTeam = true;
                }else if($member2->loadByEmail($subsData->member2Email)){
                    $teamModel->loadById($member2->getTeamId());
                    $teamModel->cancel_token = $token;
                    $teamModel->updCancelToken();

                    $existTeam = true;
                }

                $this->register($subsData, $existTeam, $token);

                if(!$existTeam){
                    $this->confirmInscription($subsData);
                    echo 'success';
                }else{
                    $memberM = new MemberModel();
                    $members  = $memberM->loadMembersByTeam($teamModel->getId());

                    if($members){
                        $nameMembers = "";
                        foreach($members as $row){
                            $this->mail->AddAddress($row['email'], 'SITES');
                            $nameMembers .= $row['name'].', ';
                        }
                        $nameMembers = substr($nameMembers, 0, -2);

                        $this->confirmCancel($teamModel->name, $nameMembers, $token);
                    }
                    echo 'success,cancel';
                } 
           }catch(\Exception $ex){
               //echo $ex->getMessage();
               echo "Inscrição não realizada. Tente novamente mais tarde.";
               exit();
           }

        }else{
            echo "Erro ao realizar a inscrição.";
            exit();
        }
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

    private function confirmInscription($subsData){
        $this->mail->Subject = 'Confirmação de Inscrição - ROBOCODE';
          
        $body = "<h1><strong> 1&ordm; TORNEIO ROBOCODE DA UNIEVANG&Eacute;LICA - SITES</strong></h1></br>";
        $body .= "Sua inscri&ccedil;&atilde;o foi confirmada para o 1&ordm; Torneio ROBOCODE da Unievang&eacute;lica.</br></br>";
        $body .= "<strong>Equipe:</strong> ".$subsData->teamName."</br>";
        $body .= "<strong>Membros:</strong> ". $subsData->member1Name . " e " . $subsData->member2Name ."</br></br>";

        //Define o detinatário
        $this->mail->AddAddress($subsData->member1Email, 'SITES');
        $this->mail->AddAddress($subsData->member2Email, 'SITES');
        $this->mail->MsgHTML($body);
        $this->mail->Send();
            
    }

    private function confirmCancel($teamName, $membersName, $token){

        $this->mail->Subject = 'Cancelamento de Inscrição - ROBOCODE';
          
        $body = "<h1><strong> 1&ordm; TORNEIO ROBOCODE DA UNIEVANG&Eacute;LICA - SITES</strong></h1></br>";
        $body .= "Recebemos uma solicita&ccedil;&atilde;o para o cancelamento da inscri&ccedil;&atilde;o de sua equipe devido a realiza&ccedil;&atilde;o de uma nova inscri&ccedil;&atilde;o de um membro.</br></br>";
        $body .= "<strong>Equipe:</strong> ".$teamName."</br>";
        $body .= "<strong>Membros:</strong> ". $membersName ."</br></br>";
        $body .= "<a href='http://www.sitesunievangelica.com.br/robocode/UnSubscription.php?token_cancel=".$token."'>Clique aqui</a> para confirmar o cancelamento desta equipe.";
        
        //Define o detinatário
        $this->mail->MsgHTML($body);
        $this->mail->Send();
    }

    private function register($jsonData, $wait_activation, $token)
    {
        $teamModel = new TeamModel();
        $teamModel->name = $jsonData->teamName;
        if($wait_activation){
            $teamModel->cancel_token = $token;
            $teamModel->wait_activation = true;
        }
        $teamModel->save();
        
        $member1 = new MemberModel();
        $member1->name = $jsonData->member1Name;
        $member1->email = $jsonData->member1Email;
        $member1->period = $jsonData->member1Period;
        $member1->setTeamId($teamModel->getId());
        $member1->save();

        $member2 = new MemberModel();
        $member2->name = $jsonData->member2Name;
        $member2->email = $jsonData->member2Email;
        $member2->period = $jsonData->member2Period;
        $member2->setTeamId($teamModel->getId());
        $member2->save();
    }

    private function isValidJSON($str)
    {
        json_decode($str);
        return json_last_error() == JSON_ERROR_NONE;
    }
}

new Subscription();


  
