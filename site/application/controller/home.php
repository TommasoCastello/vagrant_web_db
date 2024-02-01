<?php


class Home
{

    public function index()
    {
      require_once 'application/models/AttivitaMapper.php';

      $todoMapper = new AttivitaMapper();
      $todoArray = $todoMapper->fetchAll();

      require "application/views/home.php";
    }

}
