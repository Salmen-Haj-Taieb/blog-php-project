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
    <h1 class="text-center mt-3">Become an author</h1>
    <div class="container card mt-4 p-3 wb-5 border border-dark shadow-lg p-3 mb-5 bg-body rounded" style="width: 25rem;">
        <div class="form container">
            <form action="demandAuthor" method="post">
                <div class="form-row row">
                    <div class="col">
                        First name <input class="form-control" type="text" name="firstName" required>
                    </div>
                    <div class="col">
                        Last name <input class="form-control" type="text" name="lastName" required>
                    </div>
                </div>
                User name <input class="form-control" type="text" name="userName"><br>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" aria-describedby="emailHelp" name="email" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Your picture </label>
                    <input type="file" class="form-control" name="img" requierd>
                </div><br>
                <div class="form-group">
                    <label for="exampleInputPassword1">Your Description</label>
                    <input type="text-area" class="form-control" name="profession" required>
                </div><br>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="pwd" required>
                </div><br>
                <hr>
                <div class="d-flex flex-row justify-content-around">
                    <div><input type="submit" class="btn btn-success" name="demandAuthor" value="Send Demand"></div>
                    <div>
                        <a href="Index.jsp">Go Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>