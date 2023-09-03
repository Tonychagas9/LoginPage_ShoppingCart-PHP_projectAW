# LoginPage_ShoppingCart-PHP_projectAW
*Academic Work* - This project consists in a Loading page (email and password) and shopping cart with PHP (keeping and reading information from database in PHP), This concept it's really relevant in case you want to create an online shop

Academic work, in this project was creating a loading page, and product page, and a shopping cart built with PHP and using a database (MySQL).

In this project it is used;

- POST method,
- if and else conditions,

<?php
          $email = htmlspecialchars($_POST["email"]);
          $pwd = htmlspecialchars($_POST["pwd"]);

                 if($email == "xxxxx@email.com" && $pwd == "password"){
                 //echo "<H2>Hello $email <br> Welcome <\H2>";
                //check your Shopping Cart
                Header("Location:catalogo.php");
         }
         else{
                 //Header("Location:index.php?invalid=&email");
                 echo "<H2>Login incorrect";
                }  
?>

- Array and a "for loop"

<?php
         $itens = array ('product 1', 'product 2', 'product 3', 'product 4');
         $prices = array (9.99, 14.99, 10, 24);
?>

=> for ($i = 0; $i < count($itens); $++) { 
      }

This project is very simple. but it very effectively addresses some of the most used concepts in PHP

Have fun, and enjoy it :)
