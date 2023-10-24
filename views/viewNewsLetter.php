<?php $article->getTitle() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.css">
    <title>Document</title>
</head>

<body>
    <h1 class="text-center mt-5">Sign In</h1>

    <div class="container card mt-4 p-3 wb-5 border border-dark shadow-lg p-3 mb-5 bg-body rounded" style="width: 25rem;">
        <div class="form container">
            <form action="AddUser" method="post">

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" aria-describedby="emailHelp" name="email" required>
                </div>
                <div class="form-group">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">energy</a></li>
                            <li><a class="dropdown-item" href="#">global worming</a></li>
                            <li><a class="dropdown-item" href="#">environment</a></li>
                            <li><a class="dropdown-item" href="#">renewable energy</a></li>
                        </ul>
                    </li>
                </div>



                <hr>
                <div class="d-flex flex-row justify-content-around">
                    <div><input type="submit" class="btn btn-success" name="submit" value="Submit"></div>

                    <div>
                        <a href="Index.jsp">Go Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>