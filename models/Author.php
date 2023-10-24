<?php
class Author{
    private $_code;
    private $_firstName;
    private $_lastName;
    private $_userName;
    private $_profession;
    private $_email;
    private $_img;
    private $_followerNum;
    private $_articleNum;
    private $_pwd;

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
    public function setFirstName($firstName){
       if(is_string($firstName)){
        $this->_firstName=$firstName;
       }
    }
    public function setLastName($lastName){
       if(is_string($lastName)){
        $this->_lastName=$lastName;
       }
    }
    public function setUserName($userName){
       if(is_string($userName)){
        $this->_userName=$userName;
       }
    }
    public function setProfession($profession){
        if(is_string($profession)){
            $this->_profession=$profession;
           }
    }
     public function setEmail($email){
        if(is_string($email)){
            $this->_email=$email;
           }
    }
     public function setImg($img){
        if(is_string($img)){
            $this->_img=$img;
           }
    }
    public function setFollowerNum($followerNum){
        $followerNum = (int) $followerNum;
        if($followerNum >= 0){
         $this->_followerNum=$followerNum;
        }
    }
    public function setArticleNum($articleNum){
        $articleNum = (int) $articleNum;
        if($articleNum >= 0){
         $this->_articleNum=$articleNum;
        }
    } 
    public function setPwd($pwd){
        if(is_string($pwd)){
            $this->_pwd=$pwd;
           }
    } 

    //getters
    public function getCode(){
        return $this->_code;
    }
    public function getFirstName(){
        return $this->_firstName;
    }
    public function getLastName(){
        return $this->_lastName;
    }
    public function getProfession(){
        return $this->_profession;
    }
    public function getEmail(){
        return $this->_email;
    }
    public function getImg(){
        return $this->_img;
    }
    public function getUserName(){
        return $this->_userName;
    }
    public function getArticleNum(){
        return $this->_articleNum;
    }
    public function getFollowerNum(){
        return $this->_followerNum;
    }
    public function getPwd(){
        return $this->_pwd;
    }
} 
?>