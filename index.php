<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Mp3 em PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">    
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="container">
    <?php
        include_once 'helpers.php';

        if (isset($_GET['page'])){
            if (file_exists("pages/{$_GET['page']}.php")){
                include_once "pages/{$_GET['page']}.php";
            } else {
                include_once 'pages/error404.php';
            } 
        } else {
            include_once 'pages/albums.php';
        }
    ?>
   </div>
</body>
</html>

<?php
