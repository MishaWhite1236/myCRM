<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'test6');

    if (!$connect) {
        die('Error connect to DataBase');
    }