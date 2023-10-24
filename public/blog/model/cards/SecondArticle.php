
<?php
class SecondArticle
{
    public function __construct($article)
    {
        echo "<div class='card mb-3 shadow-sm p-0 mb-0 bg-body rounded'>
        <div class='row'>
        <div class='col-md-4 d-flex align-items-stretch'><img src='$article->img' class='img-fluid card-img rounded-start' alt='...'></div>
        <div class='col-md-8'>
        <h5 class='card-title'>$article->title</h5>
        <p class='card-text'>$article->text</p>
        <p class='card-text'><small class='text-muted'>Last updated $article->date</small></p>
        <div class='container'>
                    <div class='row'>
          <div class='col'>
          <a href=?code=$article->code class='btn btn-primary stretched-link'>Read More</a>
          </div>
          <div class='col'>
          <div class='d-flex flex-row-reverse'>
  <div class='p-1'><i class='fa-solid fa-thumbs-up'></i> $article->like</div>
  <div class='p-1'>$article->dislike <i class='fa-solid fa-thumbs-down'></i></div>
  <div class='p-1'><i class='fa-solid fa-comment'></i> $article->comment</div>
  <div class='p-1'><i class='fa-solid fa-eye'></i> $article->view</div>
          </div>
          </div>
          </div>       
</div>
        </div>
        </div>
        </div>";
    }
}
//style='width: 800px;'
/*
<div class='card container mb-3 shadow-sm p-0 mb-0 bg-body rounded' style='max-height:200' >
  <div class='row g-0'>
    <div class='col-md-4'>
      <img src='$article->img' class='img-fluid card-img rounded-start' alt='...'>
    </div>
    <div class='col-md-8'>
      <div class='card-body'>
        <h5 class='card-title'>$article->title</h5>
        <p class='card-text'>$article->text</p>
        <p class='card-text'><small class='text-muted'>$article->date</small></p>
      <div class=' text-center'>
      <div class='container'>
      <div class='row'>
<div class='col'>
<a href=?code=$article->code class='btn btn-primary stretched-link'>Read More</a>
</div>
<div class='col'>
<div class='d-flex flex-row-reverse'>
<div class='p-2'>like $article->like</div>
<div class='p-2'>dislike $article->dislike</div>
<div class='p-2'>comment $article->comment</div>
<div class='p-2'>view $article->view</div>
</div>
</div>
</div>       
</div>
</div>
      </div>
    </div>
  </div>
</div>
*/
?>

