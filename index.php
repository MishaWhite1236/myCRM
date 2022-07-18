<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: https://reincubate.com/ru/support/how-to/mount-iphone-files/');
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>MyCRM</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,regular,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
</head>
<section>
    <div class="row">
        <div class="col-4"><div class="nav"><h4>MyCRM by GridenFlex</h4></div></div>
        <div class="col-4"></div>
        <div class="col-4"><button class="button"><span>Выйти</span></button></div>
    </div>
</section>
