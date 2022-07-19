
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Форма обратной связи</title>
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/auth.css">
</head>
<body>
        <!-- Форма регистрации -->
        <div class="auth" >
            <div class="container">
                <div class="auth__container">

                    <div class="auth__login">
                        <div class="auth__title">
                            <h2 class="auth__ttl">
                                Регистрация
                            </h2>
                        </div>
                        <form class="form" action="/engine/create.php" method="post" enctype="multipart/form-data">
                        <div class="auth__form">
                                <input class="auth__inp" type="text" name="name" placeholder="Введите Имя">
                            </div>
                            <div class="auth__form">
                                <input class="auth__inp" type="text" name="soc" placeholder="Соц">
                            </div>

                            <div class="auth__form">
                                <input class="auth__inp"  type="text" name="brif" placeholder="Бриф">
                            </div>

                            <div class="auth__form">
                                <input class="auth__inp" type="email" name="email" placeholder="Введите адрес почты">
                            </div>

                            <!-- <div class="auth__form">  
                                <input class="auth__inp" type="file" name="avatar">
                            </div>   -->

                            <div class="auth__form">
                                <input class="auth__inp" type="text" name="telephone" placeholder="Телефон">
                            </div>

                            <div class="auth__form auth__form--confirm_pass">
                                <input class="auth__inp" type="text" name="promo" placeholder="Откуда вы о нас узнали?">
                            </div>
                            <div class="auth__form auth__form--confirm_pass">
                                <input class="auth__inp" type="text" name="comment" placeholder="Комментарий">
                            </div>

                            <div class="auth__form auth__inp--last">
                                <input class="auth__inp sign__up" type="submit" value="Отправить">
                            </div>
                            

                        </form>
                        <p class="auth__text">
                            Зарегистрированы? - <a class="reg__link" href="../auth/auth.php">Войти!</a>
                        </p>
                    </div>
                </div>
            </div><!--../.CONTAINER-->
        </div><!--../.AUTH-->

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>
   </body>

</html>
