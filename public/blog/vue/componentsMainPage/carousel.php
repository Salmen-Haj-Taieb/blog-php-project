<?php
include "../model/cards/CarouselCaption.php";
//include("../model/users/Article.php");
?>

<div id="carouselExampleDark" class="carousel carousel-dark slide " data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <?php
include("carouselCaption.php");
// new CarouselCaption(new Article(0, "Salmen HAJ TAIEB", "I am a Computer Science Engineering Student at the National Engineering School of Sfax (ENIS). I am currently a Web/Mobile App freelancer. My goal is to get a job in the AI field.", "https://picsum.photos/1600/400", 102, 25, 5, 10, "11-13-2022"));
// new CarouselCaption(new Article(0, "Salmen HAJ TAIEB", "I am a Computer Science Engineering Student at the National Engineering School of Sfax (ENIS). I am currently a Web/Mobile App freelancer. My goal is to get a job in the AI field.", "https://picsum.photos/1600/399", 102, 25, 5, 10, "11-13-2022"));
// new CarouselCaption(new Article(0, "Salmen HAJ TAIEB", "I am a Computer Science Engineering Student at the National Engineering School of Sfax (ENIS). I am currently a Web/Mobile App freelancer. My goal is to get a job in the AI field.", "https://picsum.photos/1600/401", 102, 25, 5, 10, "11-13-2022"));
?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden text-light">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>