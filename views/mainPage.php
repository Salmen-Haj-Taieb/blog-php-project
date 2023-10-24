<?php
//session_start(); 
?>
<!doctype html>
<html lang="en">
  <html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.css">
  </head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark default">
  <div class="container-fluid">
    <a class="navbar-brand" href="accueil">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-brands fa-facebook"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-envelope"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-brands fa-linkedin"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu">
            <li><button class="dropdown-item" onclick="showCategory('energy')">energy</button></li>
            <li><button class="dropdown-item" onclick="showCategory('global_worming')">global worming</button></li>
            <li><button class="dropdown-item" onclick="showCategory('environment')">environment</button></li>
            <li><button class="dropdown-item" onclick="showCategory('renewable_energy')">renewable energy</button></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <?php if(isset($_SESSION['user'])) : ?>
            <button onclick="signOut()" class="btn btn-outline-danger" >Sing out</button>
          <?php else: ?>
            <a class="btn btn-outline-success"  href="signIn">Sing in</a>
          <?php endif ?>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input onkeyup="searchArticles(this.value)" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

  <?= $content ?>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
<script>
  function showSinglePost(code) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("articlesList").innerHTML = xmlhttp.responseText;
      }
    };
  xmlhttp.open("GET", "accueil&code="+code , true);
  xmlhttp.send();
}
  function searchArticles(mot){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("articlesList").innerHTML = xmlhttp.responseText;
      }
    };
  xmlhttp.open("GET", "accueil&mot="+mot , true);
  xmlhttp.send();
  }
  function showCategory(category){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("articlesList").innerHTML = xmlhttp.responseText;
      }
    };
  xmlhttp.open("GET", "accueil&category="+category , true);
  xmlhttp.send();
  }
  function showAuthorPost(code){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("articlesList").innerHTML = xmlhttp.responseText;
      }
    };
  xmlhttp.open("GET", "accueil&authorCode="+code , true);
  xmlhttp.send();
  }
  function signOut(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("articlesList").innerHTML = xmlhttp.responseText;
      }
    };
  xmlhttp.open("GET", "accueil&signOut="+1 , true);
  xmlhttp.send();
  }
  function showManage(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("articlesList").innerHTML = xmlhttp.responseText;
      }
    };
  xmlhttp.open("GET", "accueil&manage="+1 , true);
  xmlhttp.send();
  }
  function upgradeAuthor($code){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("articlesList").innerHTML = xmlhttp.responseText;
      }
    };
  xmlhttp.open("GET", "accueil&upgrade="+$code , true);
  xmlhttp.send();
  }
  function acceptDemand($code){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("articlesList").innerHTML = xmlhttp.responseText;
      }
    };
  xmlhttp.open("GET", "accueil&accept="+$code , true);
  xmlhttp.send();
  }
  function deleteAuthor($code){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("articlesList").innerHTML = xmlhttp.responseText;
      }
    };
  xmlhttp.open("GET", "accueil&delete="+$code , true);
  xmlhttp.send();
  }
</script>
</body>
<footer>
<?php
?>
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-white text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 link-secondary">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fa-brands fa-square-twitter"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fa-solid fa-envelope"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3 text-secondary"></i>HighTech
                        </h6>
                        <p>
                        here you can post your article or read and feel free  to react on ours postes
                        </p>
                    </div>
                    <!-- Grid column -->



                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Categories
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Energy</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Global Warming</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">environment</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">renewable energy</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3 text-secondary"></i> Sfax , Tunisia</p>
                        <p>
                            <i class="fas fa-envelope me-3 text-secondary"></i>
                            info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->
    </footer>
    <!-- Footer -->
  </html>