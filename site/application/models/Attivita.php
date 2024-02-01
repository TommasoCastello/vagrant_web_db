<?php

Class Attivita{
    public $id;
    public $titolo;
    public $descrizione;
    public $data;

    /**
     * @param $id
     * @param $name
     * @param $surname
     * @param $age
     * @param $genre
     */
    public function __construct($id, $titolo, $descrizione, $data)
    {
        $this->id = $id;
        $this->titolo = $titolo;
        $this->descrizione = $descrizione;
        $this->data = $data;
    }
}