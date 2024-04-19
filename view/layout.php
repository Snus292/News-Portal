<!DOCTYPE html>
<html>

<head>
    <title> dalispa</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
    <meta charset="utf-8">
</head>

<body>
    <nav class="one">
        <ul class="topmenu">
            <li><a href="#">Kategooriad<i class="fa fa-angle-down"></i></a>
                <ul class="submenu">
                    <?php
                    Controller::AllCategory();
                    ?>
                </ul>
            </li>
            <li><a href="testError">Info</a></li>
            <li><a href="./">Stardileht</a></li>
            <li><a href="registerForm">Register</a></li>
        </ul>
        <div class="navbar">
            <img src="view/korner.png" width="100%" height="140" alt="Menu Image">
        </div>
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
        <meta charset="utf-8">
        </head>
    </nav>
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="public/1920x1200-purple.png" height="500px" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="public/1920x1200-unbleached.png" height="500px" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="public/1920x1200-white.png" height="500px" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <div class='divBox'>
        <?php
        if (isset($content)) {
            echo $content;
        } else {
            echo '<h1>Content is gone!</h1>';
        }
        ?>
    </div>
    </section>
    <hr>
    <p style="display:block; text-align:center;">SPTV21 2024 a. &copy;</p>
</body>
    <script> srs="../public/js/bootstrap.min.js" </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>