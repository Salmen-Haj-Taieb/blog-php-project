<?php
require_once "views/View.php";
class ControllerAddPost
{

    private $_articleManager;
    private $_authorManager;
    private $_view;

    public function __construct($url)
    {
        if (isset($url) && count($url) < 1) {
            throw new \Exception("Page introuvable", 1);

        } else {
            $this->execute();
        }
    }

    private function execute()
    {
        $this->_articleManager = new ArticleManager();
        $this->_authorManager = new AuthorManager();
        //$article = $this->_articleManager->getArticleById($url[1]);
        $this->_view = new View("AddPost");
        $this->_view->generateAddPost(
            array(
               // 'article' => $article,
            )
        );
    }
}
