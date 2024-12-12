<link rel="stylesheet" href="css/style.css">
<?php
    require_once 'Menu.php';
?>
<form class='cadastro' action="/cadastro" method="post">
    <legend>
        <h2>
            Faça seu cadastro
        </h2>
    </legend>
    <input class='cad' name="nome" type="text" placeholder='insira seu nome' required>
    <input class='cad' name="email" type="email" placeholder='insira seu email' required>
    <input class='cad' name="tel" type="tel" placeholder='insira seu telefone (xx)-xxxxx-xxxx' required>
    <input class='cad' name="senha" type="password" placeholder='insira sua senha' required>
    <button class="cadbtm" type="submit">registre-se</button>
</form>