<?php

class AuthorManager extends Model
{
    //crée la fonction qui va recuperer
    //tout les articles dans la bdd

    public function __construct()
    {

    }

    public function getAuthorById($id)
    {
        return $this->getAuthorByCode('authors', 'Author',$id);
    }
    public function createAuthorDemand(){
        return $this->addAuthorDemand('authordemands');
    }

    public function signIn(){
        return $this->signInOne();
    }
    public function getAuthors(){
        return $this->getAuthorsList('authors','Author');
    }
    public function getDemands(){
        return $this->getdemandsList('authorDemands','Author');
    }
    public function getAdmins(){
        return $this->getAdminsList('admins','Author');
    }
    public function acceptOne(){
        return $this->acceptDemand();
    }
    public function deleteOne(){
        return $this->deleteAuthor();
    }


}
