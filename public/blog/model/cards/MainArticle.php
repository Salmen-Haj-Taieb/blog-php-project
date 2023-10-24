<?php
class MainArticle
{
    public function __construct($article)
    {
        echo "<div class='card mb-3 shadow p-0 mb-0 bg-body rounded'>
        <img src=$article->img class='card-img-top' alt='...'>
        <div class='card-body'>
          <h1 class='card-title'>$article->title</h1>
          <p class='card-text'>$article->text</p>
          <p class='card-text'><small class='text-muted'>Last updated $article->date</small></p>
          </div>
          <div class='container'>
                    <div class='row'>
          <div class='col'>
          <a href=?code=$article->code class='btn btn-primary stretched-link'>Read More</a>
          </div>
          <div class='col'>
          <div class='d-flex flex-row-reverse'>
  <div class='p-2'><i class='fa-solid fa-thumbs-up'></i> $article->like</div>
  <div class='p-2'>$article->dislike <i class='fa-solid fa-thumbs-down'></i></div>
  <div class='p-2'><i class='fa-solid fa-comment'></i> $article->comment</div>
  <div class='p-2'><i class='fa-solid fa-eye'></i> $article->view</div>
          </div>
          </div>
          </div>       
</div>
      </div>";
    }
}
//style='width: 800px;'
