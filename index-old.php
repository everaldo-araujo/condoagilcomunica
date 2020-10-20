<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require './models/usuario.php';
        $usu = new Usuario(1,'Everado','53453453','everaldodearaujo@gmail.com');
        echo $usu->getNome();
        ?>
    </body>
</html>
