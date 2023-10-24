<?php
//session_start(); 
//session_destroy();
// if(isset($_SESSION['code'])){
//   echo "<br> code = ".$_SESSION['code'];
// }
?>
<div style="background: gainsboro;" id="articlesList">
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="images/logo2.webp"  alt="hello" width="30" height="24" class="d-inline-block align-text-top">
      HighTech
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="btn btn-outline-info" aria-current="page" href="newsLetter">Get news letter</a>
        </li>
      </ul>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <?php if(isset($_SESSION['user']) && ($_SESSION['user']=="author" || $_SESSION['user']=="admin")): ?> 
            <a class="nav-link" href="addPost">Add post</a>
          <?php else : ?>  
          <a class="nav-link" href="demandAuthor">Become an auther</a>
          <?php endif ?>
        </li>
      <li class="nav-item">
          <?php if(isset($_SESSION['user'])) : ?>
            <p class="btn btn-dark"><?= $_SESSION['userName'] ?></p>
          <?php else : ?>
           <a class="nav-link" href="signUpReader">Sing up as a reader</a> 
          <?php endif ?> 
        </li>
        <?php if(isset($_SESSION['user']) && $_SESSION['user']=="admin" ) : ?>
          <li class="nav-item">
            <button class="btn btn-outline-danger" onclick="showManage()" class="nav-link">Manage your blog</button>
          </li>
        <?php endif ?>  
      </ul>
     

    </div>
  </div>
</nav>

<?php if(isset($content)) : ?>
   <?php echo $content ?>
<?php elseif (isset($search)) : ?>   
    <?php echo $search ?>    
<?php elseif (isset($authorPosts)): ?>  
    <?= $authorPosts ?>
<?php elseif (isset($manageAuthors)): ?>  
    <?= $manageAuthors ?>
<?php else : ?>    
<div style="height: 20px;"></div>
  <div class="container d-grid gap-3">
  <div class="row">
    <div class="col-8 p-2 bg-light border">
<?php if(isset($recentArticle)): ?>
    <div class='card mb-3 shadow p-1 mb-0 bg-body rounded'>
        <img src='images/<?= $recentArticle->getImg() ?>' class='card-img-top' alt='<?=$recentArticle->getImg()?>'>
        <div class='card-body'>
          <h1 class='card-title'><?=$recentArticle->getTitle()?></h1>
          <p class='card-text'><?= substr($recentArticle->getContent(),0,200) ?>...</p><hr>
          <div class="d-flex justify-content-around">
          <p class='card-text p-2'>Published: <?=$recentArticle->getArticleDate()?></p>
          <p class="btn btn-warning" ><?= $recentArticle->getCategory() ?></p>
          </div>
          </div>
          <div class='container'>
                    <div class='row'>
          <div class='col'>
          <button onclick="showSinglePost('<?=$recentArticle->getCode()?>')" class='btn btn-primary stretched-link card-img-top'>Read More</button>
          </div>
          <div class='col'>
          <div class='d-flex flex-row-reverse'>
  <div class='p-2'><i class='fa-solid fa-thumbs-up'></i> <?=$recentArticle->getLikeNum()?></div>
  <div class='p-2'><?=$recentArticle->getDislikeNum()?> <i class='fa-solid fa-thumbs-down'></i></div>
  <div class='p-2'><i class='fa-solid fa-comment'></i> <?=$recentArticle->getCommentNum()?></div>
  <div class='p-2'><i class='fa-solid fa-eye'></i> <?=$recentArticle->getViewNum()?></div>
          </div>
          </div>
          </div>
</div>
      </div>
<?php endif ?>
<?php
if (isset($restArticles)) :
foreach ($restArticles as $article):
?>

<div class='card mb-3 shadow-sm p-1 mb-0 bg-body rounded'>
        <div class='row'>
        <div class='col-md-4 d-flex align-items-stretch'><img src='images/<?= $article->getImg() ?>' class='img-fluid card-img rounded-start' alt=<?php echo $article->getImg() ?>></div>
        <div class='col-md-8'>
        <h5 class='card-title'><?php echo $article->getTitle() ?></h5>
        <p class='card-text'><?= substr($article->getContent(),0,100) ?>...</p><hr>
        <div class="d-flex justify-content-around">
          <p class='card-text p-2'>Published: <?=$article->getArticleDate()?></p>
          <p class="btn btn-warning" ><?= $article->getCategory() ?></p>
          </div>
        <div class='container'>
                    <div class='row'>
          <div class='col'>
          <button onclick="showSinglePost(<?=$article->getCode()?>)" class='btn btn-primary stretched-link'>Read More</button>
          </div>
          <div class='col'>
          <div class='d-flex flex-row-reverse'>
  <div class='p-1'><i class='fa-solid fa-thumbs-up'></i> <?php echo $article->getLikeNum() ?></div>
  <div class='p-1'><?php echo $article->getDislikeNum() ?> <i class='fa-solid fa-thumbs-down'></i></div>
  <div class='p-1'><i class='fa-solid fa-comment'></i> <?php echo $article->getCommentNum() ?></div>
  <div class='p-1'><i class='fa-solid fa-eye'></i> <?php echo $article->getViewNum() ?></div>
          </div>
          </div>
          </div>
</div>
        </div>
        </div>
        </div>
<?php endforeach?>
<?php endif ?>
    </div>
    <div class="col-4 p-2 bg-light border">
     
    <div class="container d-grid gap-3 p-2 mb-0">
<div class="row">

<div id="authorCard" class='card d-grid gap-3 p-2 bg-light border container text-center shadow-sm mb-0 bg-body rounded'>
        <h4>ABOUT AUTHER</h4>
        <div p-2 bg-light >
        <img class="img-thumbnail" src="images/<?= $author->getImg() ?>" alt='...'>
        </div>
        <h5 class='card-title'><?= $author->getUserName() ?></h5>
        <p class='card-text'><?= $author->getProfession() ?></p>
        <div class='row d-flex justify-content-center'>
        <div class='col'><i class='fa-solid fa-envelope'></i> <?= $author->getEmail() ?></div>
        <div class='row card-body'>
          <div class='col p-2 bg-light'><a href='#' class='btn btn-outline-primary position-relative'>Follow<span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary'><?= $author->getFollowerNum() ?> <span class='visually-hidden'>unread messages</span></span></a></div>
          <div class='col p-2 bg-light'><button onclick='showAuthorPost(<?= $author->getCode() ?>)' class='btn btn-primary position-relative'>VIEW ALL POSTS<span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary'><?= $author->getArticleNum() ?> <span class='visually-hidden'>unread messages</span></span></button></a></div>
        </div>
      </div>


</div>
<div class="row">

<div class="card d-grid gap-3 p-2 bg-light border container text-center shadow-sm mb-2 bg-body rounded">
<h3>MOST READED PAST WEEK</h3>
    <?php foreach($mostReadedArticls as $article) : ?>
      <div style="height: 250px" class='card mb-2 shadow-sm p-1 bg-body rounded text-white'>
        <img src="images/<?= $article->getImg() ?>" class='card-img' alt='...'>
        <div class='card-img-overlay'>
          <h5 class='card-title'><?= $article->getTitle() ?></h5>
          <button onclick="showSinglePost(<?=$article->getCode()?>)" class='btn btn-primary stretched-link'>Read More</button>
         
        </div>
      </div>
    <?php endforeach ?>
</div>

</div>
</div>

    </div>
  </div>
</div>
<div style="height: 20px;"></div>
</div>
<?php endif ?>