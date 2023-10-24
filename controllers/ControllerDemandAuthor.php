<?php
require_once "views/View.php";
class ControllerDemandAuthor
{

    private $_view;

    public function __construct($url)
    {
        if (isset($url) && count($url) < 1) {
            throw new \Exception("Page introuvable", 1);
        } else if(isset($_POST['demandAuthor']) && isset($_POST['userName']) && isset($_POST['pwd']) && $_POST['profession']) {
            $this->addAuthorDemand();
        } else {
            $this->executeForm();
        }
    }

    private function executeForm()
    {
        $this->_view = new View("DemandAuthor");
        $this->_view->generateDemandAuthor(
            array(
            )
        );

    }

    private function addAuthorDemand()
    {
        $this->_articleManager = new ArticleManager();
        $this->_authorManager = new AuthorManager();
        $this->_authorManager->createAuthorDemand();
        
        header('Location: accueil');

    }
}
