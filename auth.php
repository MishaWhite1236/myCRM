<?php
session_start();
error_reporting(0);
if ($_SESSION['user']) {
    header('Location: /index.php');
}

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>MyCRM</title>
    <link rel="stylesheet" href="./css/auth.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,regular,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
</head>
<video autoplay muted loop id="myVideo">
  <source src="./source/space.mp4" type="video/mp4">
</video>
<section>
    <div class="container-xxl">
        <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <h4 class="title1">Welcome to MyCRM</h4>
        </div>
        </div>
    </div>
</section>
<body>
<div class="container-xxl">
        <div class="row">
        <div class="col-5"></div>
        <div class="col-4">
            <h1 class="auth">Авторизация</h1>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-5"></div>
        <div class="col-4">
        <form class="form" action="./engine/signin.php" method="post" id="form">
                        <div class="auth__form">
                            <input class="login" type="login" name="login" placeholder="Логин">
                        </div>

                        <div class="auth__form auth__form--pass">
                            <input class="password"  type="password" name="password" placeholder="Пароль">
                        </div>

                        <div class="btn1">
                            <input autofocus  class="btn" type="submit" value="Войти">
                        </div>
                    </form>
        </div>
        </div>
        </div>
</body>
</html>


