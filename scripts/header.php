<?php include "variables.php";?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework13</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
    <link  href="css/main.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,700italic,700,900,900italic' rel='stylesheet' type='text/css'>

</head>
<body>
<div class="wrapper">

    <!-- header -->
<header class="h-page">
    <div class="container">
        <div class="row">
            <div class=" col-xs-12">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <form action="" class="search">
                        <input type="search" name="" placeholder="поиск" class="input" />
                        <input type="submit" name="" value="" class="submit" />
                    </form>
                </div>
                <nav class="navbar navbar-default" role="navigation">
                    <ul class="nav navbar-nav left">
                        <?php
                        foreach ($navTitle as $item) {
                        echo "<li><a href=".$item['url'].">".$item['title']."</a>";
//                        if (isset($item['children'])) {
//                            echo "<ul class='dropdown-menu'>";
//                            foreach ($item['children'] as $children) {
//                                echo "<li><a href=".$children['url'].'>'.$children['title']."</a></li>";
//
//                            }
//                            echo "</li>";
//                        }echo "</li>";
                        }
                        ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>