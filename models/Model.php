<?php
//session_start();
abstract class Model
{
    private static $_bdd;

    //connexion a la bbd

    private static function setBdd()
    {
        self::$_bdd = new PDO('mysql:host=localhost;dbname=blogdb;charset=utf8', 'root', '');

        //on utilise les constantes se PDO pour gérer les erreurs
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    }

    //fonction de connextion par defaut à la bdd
    protected function getBdd()
    {
        if (self::$_bdd == null) {
            self::setBdd();
            return self::$_bdd;
        }
    }

    //creation de la methode
    //de récupération de la list d'elements
    //dans la bdd

    protected function getRest($table, $obj)
    {
        $this->getBdd();
        $var = [];
        $req = self::$_bdd->prepare("SELECT * FROM " . $table . " ORDER BY articleDate DESC");
        $req->execute();

        //on crée la variable data qui
        //va combiner les données
        $i = 0;
        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            //var contenira les données sous form objets
            if ($i != 0) {
                $var[] = new $obj($data);
            } else {
                $i = $i + 1;
            }

        }

        return $var;
        $req->closeCursor();
    }

    protected function getRecent($table, $obj)
    {
        $this->getBdd();
        $var = [];
        $req = self::$_bdd->prepare("SELECT * FROM " . $table . " ORDER BY articleDate DESC LIMIT 1 ");
        $req->execute();

        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            //var contenira les données sous form objets
            $var = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }

    protected function getMostReaded($table, $obj)
    {
        $this->getBdd();
        $var = [];
        $req = self::$_bdd->prepare("SELECT * FROM " . $table . " ORDER BY viewNum DESC LIMIT 3 ");
        $req->execute();

        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            //var contenira les données sous form objets
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }

    protected function getMostLiked($table, $obj)
    {
        $this->getBdd();
        $var = [];
        $req = self::$_bdd->prepare("SELECT * FROM " . $table . " ORDER BY likeNum DESC LIMIT 1 ");
        $req->execute();

        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            //var contenira les données sous form objets
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }

    protected function getAuthorByCode($table, $obj, $code)
    {
        $this->getBdd();
        $var = [];
        $req = self::$_bdd->prepare("SELECT * FROM " . $table . " WHERE code = " . $code);
        $req->execute();

        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            //var contenira les données sous form objets
            $var = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }

    protected function getArticleByCode($table, $obj, $code)
    {
        $this->getBdd();
        $var = [];
        $req = self::$_bdd->prepare("SELECT * FROM " . $table . " WHERE code = " . "'" . $code . "'");
        $req->execute();
        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            //var contenira les données sous form objets
            $var = new $obj($data);
        }
        //var_dump($var);
        return $var;
        $req->closeCursor();
    }

    protected function createArticle($table)
    {
        $this->getBdd();
        $req = self::$_bdd->prepare("INSERT INTO " . $table . "
         (title,content,img,category,authorCode)" .
            "values(?,?,?,?,?)"
        );
        $req->execute(
            array(
                $_POST['title'],
                $_POST['content'],
                $_POST['img'],
                $_POST['category'],
                $_POST['authorCode'],
            )
        );
        $req->closeCursor();
    }

    protected function getArticleByMot($table, $obj)
    {
        $this->getBdd();
        $var = [];
        $req = self::$_bdd->prepare("SELECT * FROM " . $table . " WHERE title LIKE '%{$_GET['mot']}%'");
        $req->execute();

        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            //var contenira les données sous form objets
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }
    protected function getArticleByCtg($table, $obj)
    {
        $this->getBdd();
        $var = [];
        $req = self::$_bdd->prepare("SELECT * FROM " . $table . " WHERE category = '{$_GET['category']}'");
        $req->execute();

        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            //var contenira les données sous form objets
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }
    protected function getAuthorPosts($table, $obj)
    {
        $this->getBdd();
        $var = [];
        $req = self::$_bdd->prepare("SELECT * FROM " . $table . " WHERE authorCode = '{$_GET['authorCode']}'");
        $req->execute();

        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            //var contenira les données sous form objets
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }
    protected function getAuthorsList($table, $obj)
    {
        $this->getBdd();
        $var = [];
        $req = self::$_bdd->prepare("SELECT * FROM " . $table);
        $req->execute();

        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            //var contenira les données sous form objets
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }
    protected function getDemandsList($table, $obj)
    {
        $this->getBdd();
        $var = [];
        $req = self::$_bdd->prepare("SELECT * FROM " . $table);
        $req->execute();

        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            //var contenira les données sous form objets
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }
    protected function getAdminsList($table, $obj)
    {
        $this->getBdd();
        $var = [];
        $req = self::$_bdd->prepare("SELECT * FROM " . $table);
        $req->execute();

        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            //var contenira les données sous form objets
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }

    protected function addAuthorDemand($table)
    {
        try {
            $this->getBdd();
            $req = self::$_bdd->prepare("INSERT INTO " . $table . "
         (firstName,lastName,userName,profession,email,img,pwd)" .
                "values(?,?,?,?,?,?,?)"
            );
            $req->execute(
                array(
                    $_POST['firstName'],
                    $_POST['lastName'],
                    $_POST['userName'],
                    $_POST['profession'],
                    $_POST['email'],
                    $_POST['img'],
                    $_POST['pwd'],
                )
            );
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }
    protected function addArticle($table)
    {
        $this->getBdd();
        echo "<br>add article<br>";
        $req = self::$_bdd->prepare("INSERT INTO " . $table . "
         (title,content,img,category,authorCode)" .
            "values(?,?,?,?,?)"
        );
        $req->execute(
            array(
                $_POST['title'],
                $_POST['content'],
                $_POST['img'],
                $_POST['category'],
                $_SESSION['code'],
            )
        );
        echo "<br>added <br>";
        $req->closeCursor();
    }
    protected function addReader($table)
    {
        $this->getBdd();
        $req = self::$_bdd->prepare("INSERT INTO " . $table . "
         (firstName,lastName,userName,education,email,img,pwd)" .
            "values(?,?,?,?,?,?,?)"
        );
        $req->execute(
            array(
                $_POST['firstName'],
                $_POST['lastName'],
                $_POST['userName'],
                $_POST['education'],
                $_POST['email'],
                $_POST['img'],
                $_POST['pwd'],
            )
        );
        $req->closeCursor();
    }
    protected function acceptDemand()
    {
        $this->getBdd();
        $author = self::getAuthorByCode('authorDemands', 'Author', $_GET['accept']);
        $req = self::$_bdd->prepare("INSERT INTO authors" .
            "(firstName,lastName,userName,profession,email,img,pwd)" .
            "values(?,?,?,?,?,?,?)"
        );
        $req->execute(
            array(
                $author->getFirstName(),
                $author->getLastName(),
                $author->getUserName(),
                $author->getProfession(),
                $author->getEmail(),
                $author->getImg(),
                $author->getPwd(),
            )
        );
        $req = self::$_bdd->prepare("DELETE FROM authorDemands WHERE code = {$_GET['accept']} ");
        $req->execute();
        $req->closeCursor();
    }
    protected function deleteAuthor()
    {
        $this->getBdd();
        $req = self::$_bdd->prepare("DELETE FROM authors WHERE code = {$_GET['delete']} ");
        $req->execute();
        // $req = self::$_bdd->prepare("DELETE FROM articles WHERE authorCode = {$_GET['delete']} ");
        // $req->execute();
        $req->closeCursor();
    }

    protected function signInOne()
    {
        $this->getBdd();

        try {
            $req = "SELECT * FROM readers WHERE userName = " . "'" . $_POST['userName'] . "'" . " AND pwd = " . "'" . $_POST['pwd'] . "'";
            $result = self::$_bdd->query($req);
            $rows = $result->fetchAll(PDO::FETCH_NUM);
            if (empty($rows)) {
                $req = "SELECT * FROM authors WHERE userName = " . "'" . $_POST['userName'] . "'" . " AND pwd = " . "'" . $_POST['pwd'] . "'";
                $result = self::$_bdd->query($req);
                $rows = $result->fetchAll(PDO::FETCH_NUM);
                if (empty($rows)) {
                    $req = "SELECT * FROM admins WHERE userName = " . "'" . $_POST['userName'] . "'" . " AND pwd = " . "'" . $_POST['pwd'] . "'";
                    $result = self::$_bdd->query($req);
                    $rows = $result->fetchAll(PDO::FETCH_NUM);
                    if (empty($rows)) {
                        header("location:signIn&isFound='false'");
                    } else {
                        $_SESSION['user'] = "admin";
                        $_SESSION['userName'] = $_POST['userName'];
                        $_SESSION['code'] = $rows[0][0];
                        //header("location:acceil");
                        //echo "is admin";
                    }
                } else {
                    $_SESSION['user'] = "author";
                    $_SESSION['userName'] = $_POST['userName'];
                    $_SESSION['code'] = $rows[0][0];
                    //header("location:acceil");
                    //echo "is author";
                }
            } else {
                $_SESSION['user'] = "reader";
                $_SESSION['userName'] = $_POST['userName'];
                $_SESSION['code'] = $rows[0][0];
                //header("location:acceil");
                //echo "is reader";
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}
