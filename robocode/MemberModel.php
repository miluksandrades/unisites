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
         $sql =  " SELECT mb.id, mb.name, mb.email, mb.period, mb.team_id FROM member mb";
         $sql .= "  INNER JOIN team tm ON tm.id = mb.team_id";
         $sql .= " WHERE mb.email = :email AND tm.cancel IS NULL AND tm.wait_activation = 0";
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

    public function loadMembersByTeam($team_id)
    {
        $sql =  " SELECT mb.id, mb.name, mb.email, mb.period, mb.team_id FROM member mb";
        $sql .= "  INNER JOIN team tm ON tm.id = mb.team_id";
        $sql .= " WHERE mb.team_id = :team_id AND tm.cancel IS NULL";

        $query = $this->connection->prepare($sql);
        $query->bindParam(':team_id', $team_id);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
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
}