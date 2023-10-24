<?php
/*
+The latest Article (Class MainArticle) : {
    -title,
    -img,
    -category,
    -date of post,
    -auther:{
      photo,
      name,
      profession,
    }
    -number of likes,
    -number of dislikes,
    -number of comments,
    -share
    -some text from the article (optional),
}

--List of second articles sorted by time post FILO--
--The latest first--
+article (Class SecondArticle) :{
  -title,
  -img,
  -auther{
    photo,
    name,
    profession,
  }
  -some text from the article
}
*/
?>
<?php
include("../model/cards/MainArticle.php");
include("../model/cards/SecondArticle.php");
include("../model/users/Article.php");
?>
<div class="d-grid gap-0 p-2 container">
<?php
new MainArticle(new Article(0,"Salmen HAJ TAIEB","I am a Computer Science Engineering Student at the National Engineering School of Sfax (ENIS). I am currently a Web/Mobile App freelancer. My goal is to get a job in the AI field.","https://picsum.photos/600/300",102,25,5,10,"11-13-2022"));
new SecondArticle(new Article(0,"Salmen HAJ TAIEB","I am a Computer Science Engineering Student at the National Engineering School of Sfax (ENIS).","https://picsum.photos/300/260",102,25,5,10,"11-13-2022"));
new SecondArticle(new Article(0,"Salmen HAJ TAIEB","I am a Computer Science Engineering Student at the National Engineering School of Sfax (ENIS).","https://picsum.photos/300/260",102,25,5,10,"11-13-2022"));
new SecondArticle(new Article(0,"Salmen HAJ TAIEB","I am a Computer Science Engineering Student at the National Engineering School of Sfax (ENIS).","https://picsum.photos/300/260",102,25,5,10,"11-13-2022"));
new SecondArticle(new Article(0,"Salmen HAJ TAIEB","I am a Computer Science Engineering Student at the National Engineering School of Sfax (ENIS).","https://picsum.photos/300/260",102,25,5,10,"11-13-2022"));
?>
</div>