<!DOCTYPE html>
<html>
    <head>
        <title> NEWSPORTAL</title>
            <link rel="stylesheet" href="../public/css/bootstrap.min.css">
            <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet"> 
        <meta charset="utf-8">
    </head>
<body>
    <nav class="one">
        <ul class="topmenu">
            <li><a href="#">Kategooriad<i class="fa fa-angle-down"></i></a>
                <ul class="submenu">
                    
                <?php Controller::AllCategory(); ?>
                    
                </ul>
            </li>
            <li><a href="iwww">Info</a></li>
            <li><a href="./">Stardileht</a></li>
            <li><a href="registerForm">Register</a></li>
            <div class="pull-right">
                <li>
                    <form action="search">
                        <input type="text" name="otsi">
                        <input type="submit" value="Otsi">
                    </form>
                </li>
            </div>
        </ul>
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
    <script src="../public/js/bootstrap.min.js"></script>
</body>