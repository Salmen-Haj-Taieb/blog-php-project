<?php

class ReaderManager extends Model
{
    //crée la fonction qui va recuperer
    //tout les articles dans la bdd

    public function __construct()
    {

    }

    public function createReader(){
        return $this->addReader('readers');
    }
}