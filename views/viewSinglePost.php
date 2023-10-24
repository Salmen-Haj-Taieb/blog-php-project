<div style="background: gainsboro;">


<div style="height: 20px;"></div>
  <div class="container d-grid gap-3">
  <div class="row">
    <div class="col-8 p-2 bg-light border">
    <div class='card mb-3 shadow p-0 mb-0 bg-body rounded'>
          <img src='images/<?=$article->getImg()?>' class='card-img-top' alt='<?=$article->getImg()?>'>
          <div class='card-body'>
            <h1 class='card-title'><?=$article->getTitle()?></h1><hr>
            <div class="d-flex justify-content-around">
          <p class='card-text p-2'>Published: <?=$article->getArticleDate()?></p>
          <p class="btn btn-warning" ><?= $article->getCategory() ?></p>
          </div>
            <div class='container'>
            <div class='row'>
              <div class='col'>
              </div>
              <div class='col'>
                <div class='d-flex flex-row-reverse'>
                  <div class='p-2'><i class='fa-solid fa-thumbs-up'></i> <?=$article->getLikeNum()?></div>
                  <div class='p-2'><?=$article->getDislikeNum()?> <i class='fa-solid fa-thumbs-down'></i></div>
                  <div class='p-2'><i class='fa-solid fa-comment'></i> <?=$article->getCommentNum()?></div>
                  <div class='p-2'><i class='fa-solid fa-eye'></i> <?=$article->getViewNum()?></div>
                </div>
              </div>
            </div>
          </div><hr>
            <p class='card-text'><?=$article->getContent()?></p>
          </div>
          <hr>
          <?php if(isset($_SESSION['user'])): ?>
          <div class="form-group p-3">
            <form method="post">
                    <label for="exampleInputPassword1">Comment <i class="fa-solid fa-paper-plane"></i></label>
                    <textarea class="form-control" rows="5" cols="33" name="content" value="" required></textarea>
                    <br>
                    <div><input type="submit" class="btn btn-success" name="submit" value="send"></input></div>
            </form>
          </div>
          <?php else : ?>
            <h4 class="p-5">Sing in or create an accounte to add a commment</h4>
          <?php endif ?>
          <br>
        </div>



    </div>
    <div class="col-4 p-2 bg-light border">

    <div class="container d-grid gap-3 p-2 mb-0">
<div class="row">

<div id="authorCard" class='card d-grid gap-3 p-2 bg-light border container text-center shadow-sm mb-0 bg-body rounded'>
        <h4>ABOUT AUTHER</h4>
        <div p-2 bg-light class="h-25 d-inline-block">
        <img class="img-thumbnail img-fluid" src="images/<?=$author->getImg()?>" alt='...'>
        </div>
        <h5 class='card-title'><?=$author->getUserName()?></h5>
        <p class='card-text'><?=$author->getProfession()?></p>
        <div class='row d-flex justify-content-center'>
        <div class='col'><i class='fa-solid fa-envelope'> <?=$author->getEmail()?></i></div>
        </div>
        <div class='row card-body'>
          <div class='col p-2 bg-light'><a href='#' class='btn btn-outline-primary position-relative'>Follow<span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary'><?=$author->getFollowerNum()?> <span class='visually-hidden'>unread messages</span></span></a></div>
          <div class='col p-2 bg-light'><button onclick='showAuthorPost(<?= $author->getCode() ?>)' class='btn btn-primary position-relative'>VIEW ALL POSTS<span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary'><?= $author->getArticleNum() ?> <span class='visually-hidden'>unread messages</span></span></button></a></div>
        </div>
      </div>


</div>
<div class="row">

<div class="card d-grid gap-3 p-2 bg-light border container text-center shadow-sm mb-2 bg-body rounded">
<h3>MOST READED PAST WEEK</h3>
    <?php foreach ($mostReadedArticles as $article): ?>
      <div style="height: 250px" class='card mb-2 shadow-sm p-1 bg-body rounded text-white'>
        <img src="images/<?= $article->getImg() ?>" class='card-img' alt='...'>
        <div class='card-img-overlay'>
          <h5 class='card-title'><?= $article->getTitle() ?></h5>
          <button onclick="showSinglePost(<?=$article->getCode()?>)" class='btn btn-primary stretched-link'>Read More</button>
         
        </div>
      </div>
    <?php endforeach?>
</div>

</div>
</div>

    </div>
  </div>
</div>
<div style="height: 20px;"></div>
</div>