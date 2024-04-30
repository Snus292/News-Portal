<!DOCTYPE html>
<html>
    <head>
        <title> dalispa</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggoyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
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
</nav>

<section class="about-section">
        <div class="container">
            <h1>About Us</h1>
            <p>Welcome to our beauty salon! We are dedicated to providing high-quality beauty services...</p>
            <p>Our team of experienced professionals is passionate about making you look and feel your best...</p>
            <p>Whether you're looking for a haircut, a manicure, or a relaxing massage, we've got you covered...</p>
            <p>Visit us today and experience the difference!</p>
        </div>
    </section>

   

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

