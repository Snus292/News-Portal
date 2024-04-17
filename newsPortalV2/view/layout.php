<!DOCTYPE html>
<html>
    <head>
        <title> dalispa</title>
            <link rel="stylesheet" href="
            https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
            integrity= "sha384-ggoyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
            crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="style.css">
            <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet"> 
        <meta charset="utf-8">
    </head>
<body>
    <nav class="one">
        <ul class = "topmenu">
            <li><a href="#">Kategooriad<i class="fa fa-angle-down"></i></a>
            <ul class ="submenu">
                <?php 
                    Controller::AllCategory();
                ?>
            </ul>
        </li>
        <li><a href = "testError">Info</a></li>
        <li><a href = "./">Stardileht</a></li>
        <li><a href="registerForm">Register</a></li>
            <div class="pull-right">
        </ul>
        <div class="navbar">
    <img src="view/korner.png" width="1903" height="140" alt="Menu Image">
</div>

    </nav>

    <section>
        <div class = 'divBox'>
            <?php
            if(isset($content)){
                echo $content;
            }
            else{
                echo '<h1>Content is gone!</h1>';
            }
            ?>
        </div>
    </section>
    <hr>
    <p style="display:block; text-align:center;">SPTV21 2024 a. &copy</p>
</body>
