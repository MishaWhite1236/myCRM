<?php
session_start();
require_once 'connect.php';
//var_dump($_FILES['avatar']);
$name = $_POST['name'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$comment = $_POST['comment'];
$promo = $_POST['promo'];
$soc = $_POST['soc'];
$brif = $_POST['brif'];

$check_email = mysqli_query($connect, "SELECT * FROM `lead` WHERE `email` = '$email'");
if (mysqli_num_rows($check_email) > 0) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Такая почта уже существует!",
        "fields" => ['email']
    ];

    echo var_dump($response);
    die();
}
$error_fields = [];

if ($name === '') {
    $error_fields[] = 'name';
}

if ($telephone === '') {
    $error_fields[] = 'telephone';
}


if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error_fields[] = 'email';
}


if (!empty($error_fields)) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Проверьте правильность полей",
        "fields" => $error_fields
    ];

    echo var_dump($response);

    die();
}



    // $path = 'uploads/' . time() . $_FILES['avatar']['name'];
    // if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
    //     $response = [
    //         "status" => false,
    //         "type" => 2,
    //         "message" => "Ошибка при загрузке аватарки",
    //     ];
    //     echo var_dump($response);
    // }

    mysqli_query($connect, "INSERT INTO `lead` (`id`, `name`, `telephone`, `comment`, `email`, `promo`, `brif`, `soc`) VALUES (NULL, '$name', '$telephone', '$comment', '$email', '$promo', '$brif', '$soc')");
    mail('markyurkulskiy@gmail.com', 'Заполнена новая форма!', 'Кто-то заполнил форму, проверь CRM!', 'gridenflex@gmail.com'); 
    mail('blackhole2013@icloud.com', 'Заполнена новая форма!', 'Кто-то заполнил форму, проверь CRM!', 'gridenflex@gmail.com'); 
    $response = [
        "status" => true,
        "message" => "Данные отправлены!",
    ];
    $new_url = '/';
    header('Location: '.$new_url);
    exit();

?>
