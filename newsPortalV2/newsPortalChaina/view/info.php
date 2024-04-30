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
        <li><a href="#">类别<i class="fa fa-angle-down"></i></a>
            <ul class="submenu">
                <?php 
                    Controller::AllCategory();
                ?>
            </ul>
        </li>
        <li><a href="testError">信息</a></li>
        <li><a href="./">斯塔迪莱特</a></li>
        <li><a href="registerForm">登记</a></li>
        
    </ul>
    <div class="navbar">
        <img src="view/korner.png" width="100%" height="140" alt="Menu Image">
    </div>
</nav>

<section class="about-section">
        <div class="container">
            <h1>关于我们</h1>
            <p>欢迎来到我们的美容院！ 我们致力于提供高品质的美容服务...</p>
            <p>我们经验丰富的专业团队热衷于让您看起来和感觉最好......</p>
            <p>无论您是想要理发、美甲还是放松按摩，我们都能满足您的需求......</p>
            <p>今天就访问我们，体验不同之处！</p>
        </div>
    </section>

   

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

