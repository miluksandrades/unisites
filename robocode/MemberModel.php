<?php

require_once "ConnectionFactory.php";

class MemberModel
{
    private $id;
    public $name;
    public $email;
    public $period;
    private $teamId;
    private $connection;

    public function __construct()
    {
        $this->connection = ConnectionFactory::conectar();
    }

    public function getTeamId()
    {
        return $this->teamId;
    }

    public function setTeamId($teamId)
    {
        $this->teamId = $teamId;
    }

    public function loadByEmail($email)
    {
         $sql = "SELECT id, name, email, period, team_id FROM member WHERE email = :email";
         $result = false;

        $query = $this->connection->prepare($sql);
        $query->bindParam(':email', $email);
        $query->execute();

        $result = $query->fetch(\PDO::FETCH_ASSOC);

        if($result){
            $this->id = $result['id'];
            $this->name = $result['name'];
            $this->email = $result['email'];
            $this->period = $result['period'];
            $this->teamId = $result['team_id'];
            return true;
        }

        return false;
    }

    public function save()
    {
        $sql = " INSERT INTO member (name, email, period, team_id) VALUES (:name, :email, :period, :team_id)";

        $query = $this->connection->prepare($sql); 
        $query->bindParam(':name', $this->name);
        $query->bindParam(':email', $this->email);
        $query->bindParam(':period', $this->period);
        $query->bindParam(':team_id', $this->teamId);
        $query->execute();

        return $this->id = $this->connection->lastInsertId();
    }

    public function deleteFromTeam()
    {
        $sql = " DELETE FROM member WHERE team_id = :team_id";
        
        $query = $this->connection->prepare($sql); 
        $query->bindParam(':team_id', $this->teamId);
        $query->execute();
    }
}