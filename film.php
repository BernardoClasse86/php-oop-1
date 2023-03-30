<?php

class Film
{
    public $titolo;
    public $generi;
    public $durata;
    public $anno_di_uscita;
    public $regista;


    function __construct($titolo_film)
    {
        $this->titolo = $titolo_film;
    }

    function getTitlo()
    {
        return $this->titolo;
    }

    function getInfos()
    {
        $film_info = $this->durata . " " . $this->anno_di_uscita;
        return $film_info;
    }
}
