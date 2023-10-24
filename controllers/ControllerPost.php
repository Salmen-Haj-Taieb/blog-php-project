<?php
require_once "views/View.php";
class ControllerPost
{

    private $_articleManager;
    private $_authorManager;
    private $_view;

    public function __construct($url)
    {
        if (isset($url) && count($url) < 1) {
            throw new \Exception("Page introuvable", 1);

        } else if(isset($_POST["status"])) {
            if($_POST["status"]=="new"){
                $this->create();
            }
        }else if (isset($_GET['code'])){
            //var_dump($_GET);
            //echo "<br>code = ".$_GET."<br>";
            var_dump($url);
            $this->create();
        }else if(isset($_POST['addPost'])){
            echo "<br>add post<br>";
            $this->addPost();
        }else if(isset($_GET['category'])){
            
        }

    }

    private function create()
    {
        $this->_articleManager = new ArticleManager();
        $this->_authorManager = new AuthorManager();
        $article = $this->_articleManager->getArticleById("{$_GET['code']}");
        $this->_view = new View("SinglePost");
        $this->_view->generatePost(
                array(
                    'article' => $article
                )
        );
    }

    private function addPost(){
        $this->_articleManager = new ArticleManager();
        $this->_articleManager->createPost();
        
        header('Location: accueil');
    }
}
