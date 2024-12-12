<?php
    require_once 'Menu.php';
?>

<form class="login" action="/login" method='post'>
    <legend>
        <h2>
            Faça seu login
        </h2>
    </legend>
    <br>
        <input class='logininput' type="email" name="email" id="email" placeholder="insira seu email" required>
    <br>
        <input class='logininput' type="password" name="senha" id="senha" placeholder="insira sua senha" required>
    <button class="loginbtm" type="submit">Partiu</button>
</form>
