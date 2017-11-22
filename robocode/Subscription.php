<?php

require_once "MemberModel.php";
require_once "TeamModel.php";
require_once "phpmailer/class.phpmailer.php";
require_once "phpmailer/class.smtp.php";

class Subscription
{
    public function __construct()
    {
        $jsonData = file_get_contents('php://input');

        if (strlen($jsonData) > 0 && $this->isValidJSON($jsonData)){
           
           try{ 
                $subsData = json_decode($jsonData);

                $member1 = new MemberModel();
                $member2 = new MemberModel();
                if($member1->loadByEmail($subsData->member1Email)){
                    $teamModel = new TeamModel();
                    $teamModel->setId($member1->getTeamId());
                    $member1->deleteFromTeam();
                    $teamModel->delete();
                }else if($member2->loadByEmail($subsData->member2Email)){
                    $teamModel = new TeamModel();
                    $teamModel->setId($member2->getTeamId());
                    $member2->deleteFromTeam();
                    $teamModel->delete();
                }

                $this->register($subsData);

                $this->sendMail($subsData);

                echo "success";
           }catch(\Exception $ex){
               echo "Inscrição não realizada. Tente novamente mais tarde.";
               exit();
           }

        }else{
            echo "Erro ao realizar a inscrição.";
            exit();
        }
    }

    private function sendMail($subsData){
        $mail = new PHPMailer(true);
        $mail->IsSMTP();

        $mail->Host = 'mail.com.br';//Servidor SMTP
        $mail->SMTPAuth = true;//Usa a autenticação SMTP
        $mail->SMTPSecure = 'ssl';
        $mail->SMTPDebug = false;
        $mail->SMTPKeepAlive = true;
        $mail->Port = 465;//Porta de conexão SMTP
        $mail->Username = 'contato@';//Usario do seervidor
        $mail->Password = '123';
        $mail->CharSet = 'UTF-8';
        //Define o remetente
        $mail->SetFrom('contato@', 'SITES - ROBOCODE');
        //$mail->AddReplyTo('recrutadorsysrecruit@gmail.com', $nome);
        $mail->Subject = 'Confirmação de Inscrição - ROBOCODE';
          
        $body = "<h1><strong> 1&ordm; TORNEIO ROBOCODE DA UNIEVANG&Eacute;LICA - SITES</strong></h1></br>";
        $body .= "Sua inscri&ccedil;&atilde;o foi confirmada para o 1	&ordm; Torneio ROBOCODE da Unievang&eacute;lica.</br></br>";
        $body .= "<strong>Equipe:</strong> ".$subsData->teamName."</br>";
        $body .= "<strong>Membros:</strong> ". $subsData->member1Name . " e " . $subsData->member2Name ."</br></br>";

        //Define o detinatário
        $mail->AddAddress($subsData->member1Email, 'SITES');
        $mail->MsgHTML($body);
        $mail->Send();

        $mail->AddAddress($subsData->member2Email, 'SITES');
        $mail->MsgHTML($body);
        $mail->Send();
            
    }

    private function register($jsonData)
    {
        $teamModel = new TeamModel();
        $teamModel->name = $jsonData->teamName;
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


  
