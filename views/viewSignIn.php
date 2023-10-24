<?php
/* first name , last name , username , email , password , image */
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
    <h1 class="text-center mt-5">Sign In</h1>
    <div class="container card mt-4 p-3 wb-5 border border-dark shadow-lg p-3 mb-5 bg-body rounded" style="width: 25rem;">
        <div class="form container">
            <form action="accueil" method="post">
                User name <input class="form-control" type="text" name="userName"><br>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="pwd" value="" required>
                </div><br>
                <hr>
                <div class="d-flex flex-row justify-content-around">
                    <div><input type="submit" class="btn btn-success" name="signIn" value="Sign In"></div>
                    <div>
                        <a href="Index.jsp">Go Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
