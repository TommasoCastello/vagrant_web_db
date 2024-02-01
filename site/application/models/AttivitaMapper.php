<?php
require_once 'Attivita.php';
class AttivitaMapper{
    private $pdo;
    public function __construct()
    {
        require_once 'application/models/Database.php';
        $this->pdo = Database::getConnection();
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function fetchAll() : Array{

        $stmt = $this->pdo->prepare("select * from attivita");
        $stmt->execute();

        $todoArray = Array();

        while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
            $tempTodo = new Attivita($row->id,$row->titolo,$row->descrizione,$row->data);
            array_push( $todoArray, $tempTodo);
        }
        return $todoArray;
    }

    public function fetchOne($id) : Attivita{
        $stmt = $this->pdo->prepare("select * from attivita where id = :id limit 1");
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_OBJ);
        $tempTodo = new Attivita($row->id,$row->titolo,$row->descrizione,$row->data);

        return $tempTodo;
    }

    public function deleteOne($id) : Attivita{

        $stmt = $this->pdo->prepare("delete from attivita where id = :id limit 1");
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_OBJ);
        $tempTodo = new Attivita($row->id,$row->titolo,$row->descrizione,$row->data);

        return $tempTodo;
    }

    
    public function create($titolo, $descrizione, $data) {
        
        $stmt = $this->pdo->prepare("INSERT INTO `attivita` (`data`, `titolo`, `descrizione`) VALUES (:giorno ,:titolo , :descrizione );");
        $stmt->bindValue(':giorno', $data);
        $stmt->bindValue(':titolo', $titolo);
        $stmt->bindValue(':descrizione', $descrizione);
        $stmt->execute();
    }
}
