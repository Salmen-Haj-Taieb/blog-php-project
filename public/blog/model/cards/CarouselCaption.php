<?php
class CarouselCaption{
    function __construct($article)
    {
        echo "<div class='carousel-item active' data-bs-interval='10000'>
        <div class='box'>
            <img class='img-fluid' src=$article->img class='img-fluid' alt='...'>
        </div>
      <div class='carousel-caption  d-md-block text-light'>
        <h1>$article->title</h1>
        <div class='d-none d-md-block'>
            <p>$article->text</p>
        </div>
      </div>
    </div>";
    }
}
?>