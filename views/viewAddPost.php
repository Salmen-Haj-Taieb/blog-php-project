<?php
/* title , image article , text , date au niveau creation*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.css">
  </head>
<style>
    body {
        background: gainsboro;
        justify-content: center;
    }
</style>

<body>
    <h1 class="text-center mt-5">Poste Your Article</h1>
    <div class="container card mt-4 p-3 wb-5 border border-dark shadow-lg p-3 mb-5 bg-body rounded" style="width: 25rem;">
        <div class="form container">
            <form action="post" method="post">
                <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text" class="form-control" name="title" required>
                </div><br>
                <div class="form-group">
                    <label for="exampleInputPassword1">Picture</label>
                    <input type="file" class="form-control" name="img" required>
                </div><br>
                <div class="form-group">
                    <label for="exampleInputPassword1">Text</label>
                    <textarea class="form-control" rows="5" cols="33" name="content" value="" required></textarea>
                </div><br>
                <label for="category">Category:</label>

<select name="category" >
  <option name="category" value="energy">energy</option>
  <option name="category" value="global_worming">global worming</option>
  <option name="category" value="enverenment">enverenment</option>
  <option name="category" value="renwable_energy">renwable energy</option>
</select>
                <hr>
                <div class="d-flex flex-row justify-content-around">
                    <div><input type="submit" class="btn btn-success" name="addPost" value="Submit"></div>

                    <div>
                        <a href="Index.jsp">Go Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>

</html>
