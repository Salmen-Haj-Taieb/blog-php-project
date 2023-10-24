<?php
/*
--Auther card--
+auther{
    -photo
    -name
    -profission
    -description
    -facebook
    -linkedIn
    -tweeter
    -email
}

--Most readed articles--
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

--Most readed authers--
+auther{
    -photo
    -name
    -profission
}

--Tags--
+tags
*/
?>

<?php
include("../model/cards/AutherCard.php");
include("../model/users/Auther.php");
?>
<div class="container d-grid gap-3 p-2 mb-0">
<div class="row">
<?php new AutherCard(new Auther(1,"Salmen HAJ TAIEB","https://picsum.photos/100/100","I am a Computer Science Engineering Student at the National Engineering School of Sfax (ENIS).",35,19));
?>
</div>
<div class="row">
<?php include("MostReadedArticles.php") ?>
</div>
</div>