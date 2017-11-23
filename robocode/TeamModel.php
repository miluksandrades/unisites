<?php

require_once "ConnectionFactory.php";

class TeamModel
{
    private $id;
    public $name;
    public $cancel_token;
    public $wait_activation;
    private $connection;

    public function __construct()
    {
        $this->connection = ConnectionFactory::conectar();
        $this->wait_activation = false;
    }

    public function setId($id)
    {
        if(empty($this->id)){
            $this->id = $id;
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function loadById($id){
        $sql = " SELECT id, name FROM team WHERE id = :id";

        $query = $this->connection->prepare($sql); 
        $query->bindParam(':id', $id);
        $query->execute();

        $result = $query->fetch(\PDO::FETCH_ASSOC);

        if($result){
            $this->id = $result['id'];
            $this->name = $result['name'];
        }
    }

    public function loadByTokenCancel($token)
    {
        $sql = " SELECT id, name FROM team WHERE token_cancel = :token AND cancel IS NULL AND wait_activation = 0";

        $query = $this->connection->prepare($sql); 
        $query->bindParam(':token', $token);
        $query->execute();

        $result = $query->fetch(\PDO::FETCH_ASSOC);

        if($result){
            $this->id = $result['id'];
            $this->name = $result['name'];

            return true;
        }

        return false;
    }

    public function loadByTokenCancelWait($token)
    {
        $sql = " SELECT id, name FROM team WHERE token_cancel = :token AND cancel IS NULL AND wait_activation = 1";

        $query = $this->connection->prepare($sql); 
        $query->bindParam(':token', $token);
        $query->execute();

        $result = $query->fetch(\PDO::FETCH_ASSOC);

        if($result){
            $this->id = $result['id'];
            $this->name = $result['name'];

            return true;
        }

        return false;
    }

    public function save()
    {
        $sql = " INSERT INTO team (name, token_cancel, wait_activation) VALUES (:name, :cancel_token, :wait_activation)";

        $query = $this->connection->prepare($sql); 
        $query->bindParam(':name', $this->name);
        $query->bindParam(':cancel_token', $this->cancel_token);
        $query->bindParam(':wait_activation', $this->wait_activation);
        $query->execute();

        return $this->id = $this->connection->lastInsertId();
    }

    public function updCancelToken(){
        $sql = " UPDATE team SET token_cancel = :token WHERE id = :id";

        $query = $this->connection->prepare($sql); 
        $query->bindParam(':id', $this->id);
        $query->bindParam(':token', $this->cancel_token);
        $query->execute();
    }

    public function cancel()
    {
        $sql = " UPDATE team SET cancel = now() WHERE id = :id";

        $query = $this->connection->prepare($sql); 
        $query->bindParam(':id', $this->id);
        $query->execute();
    }

    public function activate(){
        $sql = " UPDATE team SET wait_activation = 0, cancel = NULL, token_cancel = ' ' WHERE id = :id";

        $query = $this->connection->prepare($sql); 
        $query->bindParam(':id', $this->id);
        $query->execute();
    }
}