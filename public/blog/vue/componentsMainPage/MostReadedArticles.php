<?php
include("../model/cards/TherdArticle.php");
//include("../model/users/Article.php");
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
