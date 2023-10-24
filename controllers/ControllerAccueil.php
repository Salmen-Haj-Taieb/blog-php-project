<?php
session_start();
require_once "views/View.php";
class ControllerAccueil
{

    private $_articleManager;
    private $_authorManager;
    private $_view;

    public function __construct()
    {
        if (isset($url) && count($url) > 1) {
            throw new \Exception("Page introuvable", 1);

        }else if(isset($_GET['code'])){
            $this->createSinglePost();
        }else if (isset($_GET['mot'])){
            $this->createSearched();
        }else if(isset($_GET['category'])){
            $this->createCategory();
        }else if(isset($_GET['authorCode'])){
            //echo "authorCode = ".$_GET['authorCode'];
            $this->createAuthorPosts();
        }else if(isset($_POST['signIn'])){
            //echo "userName = ".$_POST['userName']."<br>";
            //echo "password = ".$_POST['pwd'];
            $this->signIn();
        }else if(isset($_GET['signOut'])){
            $this->signOut();
        }else if(isset($_GET['manage'])){
            $this->createAuthorList();
        }else if(isset($_GET['upgrade'])){
            $this->upgradeAuthor();
        }else if(isset($_GET['accept'])){
            $this->acceptDemand();
        }else if(isset($_GET['delete'])){
            $this->deleteAuthor();
        }
        else {
            $this->articles();
        }
    }

    private function articles()
    {
        $this->_articleManager = new ArticleManager();
        $this->_authorManager= new AuthorManager();
        $articles = $this->_articleManager->getRestArticles();
        $recentArticle = $this->_articleManager->getRecentArticle();
        $mostReadedArticles = $this->_articleManager->getMostReadedArticles();
        $mostLikedArticle = $this->_articleManager->getMostLikedArticles();
        $author=$this->_authorManager->getAuthorById($recentArticle->getAuthorCode());
        $this->_view = new View("Accueil");
        $this->_view->generate(
            array(
                'recentArticle' => $recentArticle,
                'restArticles' => $articles,
                'mostReadedArticls' => $mostReadedArticles,
                'mostLikedArticle' => $mostLikedArticle,
                'author'=>$author,
            )
        );

    }

    private function createSinglePost(){
        $this->_articleManager = new ArticleManager();
        $this->_authorManager = new AuthorManager();
        $article = $this->_articleManager->getArticleById("{$_GET['code']}");
        $mostReadedArticles = $this->_articleManager->getMostReadedArticles();
        $mostLikedArticles = $this->_articleManager->getMostLikedArticles();
        $author=$this->_authorManager->getAuthorById($article->getAuthorCode());
        $this->_view = new View("SinglePost");
        $this->_view->generatePost(
                array(
                    'article' => $article,
                    'mostReadedArticles' => $mostReadedArticles,
                    'mostLikedArticles' => $mostLikedArticles,
                    'author' => $author,
                )
        );
    }

    private function createSearched(){
        $this->_articleManager = new ArticleManager();
        $this->_authorManager = new AuthorManager();
        $articles=$this->_articleManager->getArticleBySearch();
        $mostReadedArticles = $this->_articleManager->getMostReadedArticles();
        $author=$this->_authorManager->getAuthorById($articles[0]->getAuthorCode());
        $this->_view = new View("SearchPost");
        $this->_view->generateSearchPost(
                array(
                    'articles' => $articles,
                    'mostReadedArticles' => $mostReadedArticles,
                    'author' => $author,
                )
        );
    }
    private function createCategory(){
        $this->_articleManager = new ArticleManager();
        $this->_authorManager = new AuthorManager();
        $articles=$this->_articleManager->getArticleByCategory();
        $mostReadedArticles = $this->_articleManager->getMostReadedArticles();
        $author=$this->_authorManager->getAuthorById($articles[0]->getAuthorCode());
        $this->_view = new View("CategoryPost");
        $this->_view->generateSearchPost(
                array(
                    'articles' => $articles,
                    'mostReadedArticles' => $mostReadedArticles,
                    'author' => $author,
                )
        );
    }
    private function createAuthorPosts(){
        $this->_articleManager = new ArticleManager();
        $this->_authorManager = new AuthorManager();
        $articles=$this->_articleManager->getAuthorArticles();
        $mostReadedArticles = $this->_articleManager->getMostReadedArticles();
        $author=$this->_authorManager->getAuthorById($_GET['authorCode']);
        $this->_view = new View("AuthorPosts");
        $this->_view->generateAuthorPosts(
                array(
                    'articles' => $articles,
                    'mostReadedArticles' => $mostReadedArticles,
                    'author' => $author,
                )
        );
    }
    private function signIn(){
        $this->_authorManager = new AuthorManager();
        $this->_authorManager->signIn();
        $this->articles();
        
    }
    private function signOut(){
        session_destroy();
        //session_destroy();
        header("location:accueil");
        header("location:accueil");
        
    }
    private function createAuthorList(){
        $this->_authorManager = new AuthorManager();
        $authors=$this->_authorManager->getAuthors();
        $admins=$this->_authorManager->getAdmins();
        $demands=$this->_authorManager->getDemands();
        $this->_view = new View("Manage");
        $this->_view->generateAuthorsList(
            array(
                'authors' => $authors,
                'demands' => $demands,
                'admins' => $admins,
            )
    );
    }
    private function upgradeAuthor(){
        $this->_authorManager = new AuthorManager();
        $this->_authorManager->upgradeOne();
        $this->createAuthorList();
    }
    private function acceptDemand(){
        $this->_authorManager = new AuthorManager();
        $this->_authorManager->acceptOne();
        $this->createAuthorList();
    }
    private function deleteAuthor(){
        $this->_authorManager = new AuthorManager();
        $this->_authorManager->deleteOne();
        $this->createAuthorList();
    }
}
