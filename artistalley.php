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
        <form action="submit.php" method="post">
            <div class="input-container"><input type="text" placeholder="Nome completo do artista ou razão social da empresa" id="name" name="name" class="form-input" required></div>
            <div class="input-container"><input type="text" placeholder="CPF ou CNPJ da empresa" id="identification" name="identification" class="form-input" required></div>
            <div class="input-container"><input type="text" placeholder="Telefone celular do artista (com DDD)" id="cellphone" name="cellphone" class="form-input" required></div>
            <div class="input-container"><input type="text" placeholder="E-mail do artista" id="email" name="email" class="form-input" required></div>
            <div class="input-container"><input type="text" placeholder="Instagram do artista" id="instagram" name="instagram" class="form-input" required></div>
            <div id="button-container"><input type="submit" class="button" name="submit" id="submit" value="Enviar"></div>
        </form>
    </section>
</html>