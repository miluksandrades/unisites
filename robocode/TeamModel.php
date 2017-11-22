<?php

require_once "ConnectionFactory.php";

class TeamModel
{
    private $id;
    public $name;
    private $connection;

    public function __construct()
    {
        $this->connection = ConnectionFactory::conectar();
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

    public function save()
    {
        $sql = " INSERT INTO team (name) VALUES (:name)";

        $query = $this->connection->prepare($sql); 
        $query->bindParam(':name', $this->name);
        $query->execute();

        return $this->id = $this->connection->lastInsertId();
    }

    public function delete()
    {
        $sql = " DELETE FROM team WHERE id = :id";

        $query = $this->connection->prepare($sql); 
        $query->bindParam(':id', $this->id);
        $query->execute();
    }
}