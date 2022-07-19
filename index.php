<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: https://reincubate.com/ru/support/how-to/mount-iphone-files/');
}
$db = new PDO("mysql:host=localhost;dbname=test6", username: "root", password: "root");

$info = [];
if ($query = $db->query("SELECT * FROM `lead`")) {
    $info = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db->errorInfo());
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
<script src="./js/test.js"></script>
<script src="./js/jquery.js"></script>
<section>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="login">Пользователь: <?= $_SESSION['user']['login'] ?></div>
            </div>
            <div class="col-3">
                <div class="nav">
                    <h4 class="title">MyCRM by GridenFlex</h4>
                </div>
            </div>
            <div class="col-3"></div>
            <div class="col-3">
                <form action="/logout.php" method="POST">
                    <input class="btn btn-white btn-animate" name="myActionName" type="submit" value="Выйти" />
                </form>
            </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h4 class="lead">Лид:</h4>
            </div>
            <div class="col-sm">
                <h4 class="devop">Разработка:</h4>
            </div>
            <div class="col-sm">
                <h4 class="money">Оплата:</h4>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm"> <?php
                                    foreach ($info as $data) : ?>
                    <div class="card" id="draggable-<?php echo $data['id']; ?>" class="example-draggable" draggable="true" ondragstart="onDragStart(event);">
                        <div class="card__group1">
                            <div class="card__item-img">
                                <img class="img" src="./source/ped.png" alt="">
                            </div>
                        </div>
                        <div class="card__group2">
                            <div class="card__item"><?php echo $data['name']; ?></div>
                            <div class="card__item"><?php echo $data['telephone']; ?></div>
                            <div class="card__item"><span><?php echo $data['soc']; ?></span></div>
                            <div class="card__item"><span><?php echo $data['comment']; ?></span></div>
                            <button class="card__item-btn">Позвонить</button>
                            <form action="/engine/delete.php" method="POST">
                                <input type='hidden' name='id' value="<? echo $data["id"] ?>" />
                                <input class="formSubmit" name="myActionName" type="submit" value="Удалить" />
                            </form>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col-sm" ondragover="onDragOver(event);" ondrop="onDrop(event);">
            <div class="devops"></div>
        </div>
            <div class="col-sm" ondragover="onDragOver(event);" ondrop="onDrop(event);">
        <div class="moneys"></div>
        </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-xxl">
                <div class="end"ondragover="onDragOver(event);" ondrop="onDrop(event);">Завершенные</div>
            </div>
        </div>
    </div>
</section>