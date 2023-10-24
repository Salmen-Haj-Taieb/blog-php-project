<?php
$serverName = "localhost";
$userName = "root";
$password = "";

/*try {
    $connPDO = new PDO("mysql:host=$serverName", $userName, $password);
    $connPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE blogdb";
    $connPDO->exec($sql);
    echo "<br>";
    echo "Database magasin created successfully";
    } catch (PDOException $e) {
    echo "<br>";
    echo $sql . "<br>" . $e->getMessage();
    }
$connPDO = null;*/

try {
    $connPDO = new PDO("mysql:host=$serverName;dbname=blogdb", $userName, $password);
    $connPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /*$sql="CREATE TABLE authors (
        code INT(11) UNSIGNED AUTO_INCREMENT ,
        firstName VARCHAR(30) NOT NULL,
        lastName VARCHAR(30) NOT NULL,
        userName VARCHAR(30) NOT NULL,
        profession VARCHAR(255) NOT NULL,
        email VARCHAR(30) NOT NULL,
        img VARCHAR(30) NOT NULL,
        followerNum INT(11) DEFAULT 0,
        articleNum INT(11) DEFAULT 0,
        PRIMARY KEY (code)
);";
$connPDO->exec($sql);
echo "<br> authors created";*/
    /*$sql="CREATE TABLE articles (
        code INT(11) UNSIGNED AUTO_INCREMENT,
        title VARCHAR(255) NOT NULL,
        content LONGTEXT NOT NULL,
        img VARCHAR(30) NOT NULL,
        commentNum INT(11) DEFAULT 0,
        likeNum INT(11) DEFAULT 0,
        dislikeNum INT(11) DEFAULT 0,
        viewNum INT(11) DEFAULT 0,
        artileDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (code)
);";
    $connPDO->exec($sql);*/
    /*$sql="ALTER TABLE articles
    ADD FOREIGN KEY (authorCode) REFERENCES authors(code);";*/
    /*$sql="ALTER TABLE articles
    ADD COLUMN authorCode INT(11) UNSIGNED;";*/
    /*$sql="ALTER TABLE articles
    MODIFY COLUMN authorCode INT(11) UNSIGNED NOT NULL;";
    $connPDO->exec($sql);
echo "<br>FOREGIN KEY authorCode DATATYPE MODIFIED";  */
   /*$sql="CREATE TABLE readers (
    code INT(11) UNSIGNED AUTO_INCREMENT ,
    firstName VARCHAR(30) NOT NULL,
    lastName VARCHAR(30) NOT NULL,
    userName VARCHAR(30) NOT NULL,
    education VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    pwd VARCHAR(30) NOT NULL,
    img VARCHAR(30) NOT NULL,
    PRIMARY KEY (code)
);";*/
/*$sql="ALTER TABLE authors 
      ADD COLUMN pwd VARCHAR(255) NOT NULL  ";
$connPDO->exec($sql);
echo "<br>table readers created successflly !";*/
/*$sql="CREATE TABLE comments (
    code INT(11) UNSIGNED AUTO_INCREMENT,
    readerCode INT(11) UNSIGNED NOT NULL,
    content LONGTEXT NOT NULL,
    likeNum INT(11) DEFAULT 0,
    dislikeNum INT(11) DEFAULT 0,
    commentDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (code)
);";*/

$sql="ALTER TABLE comments
ADD FOREIGN KEY (readerCode) REFERENCES readers(code);";
$connPDO->exec($sql);
echo "<br>foreign key created successflly !";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$connPDO = null;
?>