<?php
require_once "views/View.php";
class ControllerSignIn
{

    private $_readerManager;
    private $_authorManager;
    private $_view;

    public function __construct($url)
    {
        if (isset($url) && count($url) < 1) {
            throw new \Exception("Page introuvable", 1);

        }else if (isset($_POST['signIn'])){
            $this->signIn();
        } 
        else {
            $this->executeForm();
        }
    }

    private function executeForm()
    {   
        echo "form";
        $this->_articleManager = new ArticleManager();
        $this->_authorManager = new AuthorManager();
        //$article = $this->_articleManager->getArticleById($url[1]);
        $this->_view = new View("SignIn");
        $this->_view->generateSignIn(
            array(
               // 'article' => $article,
            )
        );
    }

    private function signIn(){
        $this->_authorManager = new AuthorManager();
        $this->_authorManager->signIn();
        header("location : accueil");
    }
}
