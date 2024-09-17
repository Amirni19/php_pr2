<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .form{
        text-align: center;
        border: 2px solid gold;
        padding: 40px 60px;
    }
    .input input{
        padding: 18px 4px;
        font-size: 30px;
    }
</style>
<body>
    <div class="form">
    <form action="" method="POST">
    <div class="input">
        <label for="name">Введите имя*</label>
        <input type="text" name="name" value="имя">
        </div>
        <div class="input">
        <label for="email">Введите почту*</label>
        <input type="email" name="email" value="почта">
        </div>
        <div class="input">
        <label for="phone">Введите номер телефона*</label>
        <input type="phone" name="phone" value="телефон">
        </div>
        <input type="submit" class="btn" value="Войти">
    </form>
    </div>
</body>
</html>
<?php 
function validateName($valname){
    $name = $_POST['name'];
    $valname = strlen($name) > 1;
    if(strlen($name) < 1){
        echo 'Введите нормальное имя, пожалуйста';
    }
    if(empty($name)){
        echo 'Поле ввода не должен быть пустым';
    }
}

function validateEmail($valname){
    $email = $_POST['email'];
    $valname = strlen($email) > 1;
    if(strlen($email) < 1){
        echo 'Введите почту нормально, пожалуйста';
    }
    if(empty($email)){
        echo 'Поле ввода не должен быть пустым';
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo 'Введите корректную почту(поставьте @)';
    }
}

function validatePhone($valname){
    $phone = $_POST['phone'];
    $valname = strlen($phone) > 1;
    if(strlen($phone) > 11){
        echo 'Введите номер телефона нормально, пожалуйста';
    }
    if(empty($phone)){
        echo 'Поле ввода не должен быть пустым';
    }
}