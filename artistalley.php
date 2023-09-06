<?php
if(isset($_POST['submit'])){
    $dbHost = 'cefetcon-database-do-user-14618291-0.b.db.ondigitalocean.com';
    $dbUsername = 'doadmin';
    $dbPassword = 'AVNS_fcmKAvG6Tb5BRJXnPut';
    $dbName = 'cefetcon';
    $dbPort = '25060';

    $conexao = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName, $dbPort);

    $name = $_POST['name'];
    $identification = $_POST['identification'];
    $cellphone = $_POST['cellphone'];
    $email = $_POST['email'];
    $instagram = $_POST['instagram'];
    $sql = "INSERT INTO artistalley (name, identification, cellphone, email, instagram) VALUES ('$name', '$identification', '$cellphone', '$email', '$instagram')";
    $result = mysqli_query($conexao, $sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CEFETCON - Artist Alley</title>
    <link href="img/favicon.png" rel="shortcut icon" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="form-style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="background-animation">
</div>
<div class="container">
    <section class="content-container">
        <div class="logo-container">
            <img src="/img/colored-logo-png.svg" alt="">
        </div>
        <div id="form-title">Inscrições artist alley</div>
        <div id="subtitle">Inscrição realizada com sucesso!</div>
    </section>
</html>