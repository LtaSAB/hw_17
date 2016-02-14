<!DOCTYPE html>
<html lang="ru">
<head>
    <title><?php $title='';?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"  crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="../js/jquery-1.12.0.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <header>
            <button class="hamburger">&#9776;</button>
            <button class="cross">&#735;</button>
            <div class="menu">
                <ul>

                    <?php
                    include_once '/scripts/array.php';
                    foreach($menu as $item){ ?>
                        <li><a href="<?php echo $item['href'];?>"><?php echo $item['title'];?></a></li>
                    <?php }?>
                </ul>
            </div>
        </header>


