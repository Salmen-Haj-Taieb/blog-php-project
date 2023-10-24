<?php
class ArticleManager extends Model
{
    //crée la fonction qui va recuperer
    //tout les articles dans la bdd

    public function __construct()
    {

    }

    public function getRestArticles()
    {
        return $this->getRest('articles', 'Article');
    }

    public function getRecentArticle()
    {
        return $this->getRecent('articles', 'Article');
    }

    public function getMostReadedArticles()
    {
        return $this->getMostReaded('articles', 'Article');
    }

    public function getMostLikedArticles()
    {
        return $this->getMostLiked('articles', 'Article');
    }

    public function getArticleById($id)
    {     //echo "entred in get article by id";
        return $this->getArticleByCode('articles', 'Article', $id);
    }
    public function createPost(){
        return $this->createArticle('articles');
    }

    public function getArticleBySearch(){
        return $this->getArticleByMot('articles', 'Article');
    }
    public function getArticleByCategory(){
        return $this->getArticleByCtg('articles', 'Article');
    }
    public function getAuthorArticles(){
        return $this->getAuthorPosts('articles', 'Article');
    }
}
