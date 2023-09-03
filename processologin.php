<?php

$email = htmlspecialchars($_POST["email"]);
$pwd = htmlspecialchars($_POST["pwd"]);

if ($email == "pratica@teste.com" && $pwd == "senha") {

    //echo "<h2> Olá $email, <br> Login efetuado com sucesso!</h2>";

    //entrar no carrinho de compras 
    header("Location: catalogo.php");
}
else{
    //Header("Location: pratica8.php?invalid=&email=$email");
    echo "<h2>Login inválido!</h2>";
}

?>