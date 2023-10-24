<?php

class Article{
    private $_code;
    private $_title;
    private $_content;
    private $_img;
    private $_commentNum;
    private $_likeNum;
    private $_dislikeNum;
    private $_viewNum;
    private $_authorCode;
    private $_articleDate;
    private $_category;

    public function __construct(array $data){
        $this->hydrate($data);
    }

    //hydratation
    public function hydrate(array $data){
       foreach ($data as $key => $value){
        $method = 'set'.ucfirst($key);
        if(method_exists($this,$method)){
            $this->$method($value);
        }
       }
    }

    //setters

    public function setCode($code){
       $code = (int) $code;
       if($code > 0){
        $this->_code=$code;
       }
    }
    public function setTitle($title){
       if(is_string($title)){
        $this->_title=$title;
       }
    }
    public function setContent($content){
       if(is_string($content)){
        $this->_content=$content;
       }
    }
    public function setImg($img){
       if(is_string($img)){
        $this->_img=$img;
       }
    }
    public function setCategory($category){
       if(is_string($category)){
        $this->_category=$category;
       }
    }
    public function setCommentNum($commentNum){
        $commentNum = (int) $commentNum;
        if($commentNum >= 0){
         $this->_commentNum=$commentNum;
        }
    }
     public function setLikeNum($likeNum){
        $likeNum = (int) $likeNum;
        if($likeNum >= 0){
         $this->_likeNum=$likeNum;
        }
    }
    public function setDislikeNum($dislikeNum){
        $dislikeNum = (int) $dislikeNum;
        if($dislikeNum >= 0){
         $this->_dislikeNum=$dislikeNum;
        }
    }
    public function setViewNum($viewNum){
        $viewNum = (int) $viewNum;
        if($viewNum >= 0){
         $this->_viewNum=$viewNum;
        }
    } 
    public function setAuthorCode($authorCode){
        $authorCode = (int) $authorCode;
        if($authorCode >= 0){
         $this->_authorCode=$authorCode;
        }
    } 
    public function setArticleDate($articleDate){
         $this->_articleDate=$articleDate;
    } 

    //getters
    public function getCode(){
        return $this->_code;
    }
    public function getTitle(){
        return $this->_title;
    }
    public function getCategory(){
        return $this->_category;
    }
    public function getContent(){
        return $this->_content;
    }
    public function getImg(){
        return $this->_img;
    }
    public function getCommentNum(){
        return $this->_commentNum;
    }
    public function getLikeNum(){
        return $this->_likeNum;
    }
    public function getDislikeNum(){
        return $this->_dislikeNum;
    }
    public function getViewNum(){
        return $this->_viewNum;
    }
    public function getAuthorCode(){
        return $this->_authorCode;
    }
    public function getArticleDate(){
        return $this->_articleDate;
    }
}

?>