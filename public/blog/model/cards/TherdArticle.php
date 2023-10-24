<?php
class TherdArticle{
    function __construct($article)
    {
        echo "<div class='card mb-2 shadow-sm p-0 bg-body rounded text-white'>
        <img src=$article->img class='card-img' alt='...'>
        <div class='card-img-overlay'>
          <h5 class='card-title'>$article->title</h5>
          <div class='d-none d-md-block'>
          <p class='card-text'>$article->text</p>
          <p class='card-text'>Last updated $article->date</p>
          </div>
          <a href=?code=$article->code class='stretched-link'></a>
        </div>
      </div>";
    }
}
?>