<?php
require_once "views/View.php";
class ControllerSignUpReader
{

    private $_articleManager;
    private $_authorManager;
    private $_readerManager;
    private $_view;

    public function __construct()
    {
        if (isset($url) && count($url) < 1) {
            throw new \Exception("Page introuvable", 1);

        }else if(isset($_POST['addReader']) && isset($_POST['userName']) && isset($_POST['pwd']) && $_POST['education']) {
            $this->addReader();
        } 
        else {
            $this->executeForm();
        }
    }

    private function executeForm()
    {
        $this->_view = new View("SignUpReader");
        $this->_view->generateSignUpReader(
            array(
            )
        );

    }

    private function addReader()
    {
        $this->_articleManager = new ArticleManager();
        $this->_readerManager = new ReaderManager();
        $this->_readerManager->createReader();
        header('Location: accueil');

    }
}