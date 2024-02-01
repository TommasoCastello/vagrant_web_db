<?php


class Todo
{

    public function index()
    {
      require "application/views/insert.php";
    }

    public function view($id)
    {
      require_once 'application/models/AttivitaMapper.php';

      $todoMapper = new AttivitaMapper();
      try{
        $todo = $todoMapper->fetchOne($id);
      }catch(Exception){
        header("Location: " . URL);
      }
      require "application/views/detail.php";
    }

    public function delete($id)
    {
      require_once 'application/models/AttivitaMapper.php';

      $todoMapper = new AttivitaMapper();
      try{
        $todoMapper->deleteOne($id);
      }catch(Exception){
        return;
      }
      header("Location: " . URL);
    }


    public function create(){
      require_once 'application/models/AttivitaMapper.php';

      $titolo = $_POST['titolo'];
      $descrizione = $_POST['descrizione'];
      $data = $_POST['data'];

      if(empty($titolo) || empty($descrizione) || empty($data)){
        header("Location: " . URL . "todo");
        return;
      }

      $todoMapper = new AttivitaMapper();
      $todoMapper->create($titolo, $descrizione, $data);
      header("Location: " . URL . "view");
    }
}
