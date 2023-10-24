<?php
class AutherCard{
    function __construct($auther)
    {
        echo "<div class='card d-grid gap-3 p-2 bg-light border container text-center shadow-sm mb-0 bg-body rounded'>
        <h4>ABOUT AUTHER</h4>
        <div p-2 bg-light border>
        <img src=$auther->img class='img-fluid img-thumbnail' alt='...'>
        </div>
        <h5 class='card-title'>$auther->userName</h5>
        <p class='card-text'>$auther->profession</p>
        <div class='row d-flex justify-content-center'>
        <div class='col'><a href='?code=$auther->code'><i class='fa-brands fa-facebook'></i></a></div>
        <div class='col'><a href='?code=$auther->code'><i class='fa-solid fa-envelope'></i></a></div>
        <div class='col'><a href='?code=$auther->code'><i class='fa-brands fa-linkedin'></i></a></div>
        </div>
        <div class='row card-body'>
          <div class='col p-2 bg-light'><a href='#' class='btn btn-outline-primary position-relative'>Follow<span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary'>$auther->follower <span class='visually-hidden'>unread messages</span></span></a></div>
          <div class='col p-2 bg-light'><a href='#' class='btn btn-primary position-relative'>VIEW ALL POSTS<span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary'>$auther->article <span class='visually-hidden'>unread messages</span></span></a></a></div>
        </div>
      </div>";
    }
}
//style='width: 18rem;'

/*
<div class='card container shadow-sm p-0 mb-5 bg-body rounded' >
        <div class='row'>
        <img src=$auther->img class='card-img-top' style='width:100px;height:100px;border-radius: 100%;' alt='...'>
        </div>
        <div class='row'>
        <div class='col'>
          <h5 class='card-title'>$auther->userName</h5>
          <p class='card-text'>$auther->profession</p>
        </div>
        </div>
        <div class='row'>
        <div class='d-flex justify-content-evenly'>
        <div>
        <form action=''>
        <button type='submit' name='follower' class='btn btn-outline-primary position-relative'>
        follow <span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary'>$auther->follower<span class='visually-hidden'>unread messages</span></span>
        </button>
        </div>
        <div>
        <button type='submit' name='follower' class='btn btn-primary position-relative'>
        My Articles <span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary'>$auther->article<span class='visually-hidden'>unread messages</span></span>
        </button>
        </form>
        </div>
    </div>
</div>
        
</div>
*/
?>