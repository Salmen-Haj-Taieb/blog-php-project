<!doctype html>
<html lang="en">
  <html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.2.0-web/css/all.css">
  </head>
<body style="background:#F5F5F5;">
  <?php
  include("../vue/componentsMainPage/navBar.php");
  ?>
  <div style="height: 20px;"></div>
  <div class="container d-grid gap-3">
  <div class="row">
    <div class="col-8 p-2 bg-light border">
      <?php
      include("../vue/componentsMainPage/main.php");
      ?>
    </div>
    <div class="col-4 p-2 bg-light border">
     <?php include("../vue/componentsMainPage/rightSide.php"); ?>
    </div>
  </div>
</div>
<div style="height: 20px;"></div>
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>

  </html>
    