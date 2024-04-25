<?php
// Вычислить маршрут из адресной строки
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode('/', $host)[$num];

if ($path == '' or $path == 'index' or $path == 'index.php') {
    $response = Controller::startSite();
} elseif ($path == 'all') {
    $response = Controller::allServices();
} elseif ($path == 'category' and isset($_GET['id'])) {
    $response = Controller::servicesByCatID($_GET['id']);
} elseif ($path == 'services' and isset($_GET['id'])) {
    $response = Controller::servicesByID($_GET['id']);
} elseif ($path == 'insertcomment' and isset($_GET['comment'], $_GET['id'])) {
    $response = Controller::insertComment($_GET['comment'], $_GET['id']);
}
//register user

elseif ($path == "registerForm")
{ //form register
    $response =Controller::registerForm();
}
elseif ($path == "registerAnswer")
{
//register user
    $response = Controller::registerUser();
}
elseif ($path == "testError")
{ //form register
    $response =Controller::getInfo();
}
// Error page
else {
    $response = Controller::error404();
}