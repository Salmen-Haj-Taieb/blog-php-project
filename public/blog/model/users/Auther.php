<?php
class Auther{
    function __construct($code,$userName,$img,$profession,$follower,$article)
    {
        $this->code=$code;
        $this->userName=$userName;
        $this->img=$img;
        $this->profession=$profession;
        $this->follower=$follower;
        $this->article=$article;
    }
} 
?>