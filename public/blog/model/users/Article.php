<?php
class Article {
    function __construct($code,$title,$text,$img,$view,$like,$dislike,$comment,$date)
    {
        $this->code=$code;
        $this->title=$title;
        $this->text=$text;
        $this->img=$img;
        $this->view=$view;
        $this->like=$like;
        $this->dislike=$dislike;
        $this->date=$date;
        $this->comment=$comment;
    }
}
?>