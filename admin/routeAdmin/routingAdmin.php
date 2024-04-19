<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode('/', $host)[$num];

if ($path == '' or $path == 'index.php') {
    // Главная страница -
    $response = ControllerAdmin::formLoginSite();
}
// ---- ВХОД ----
elseif ($path == 'login') {
    // Форма входа
    $response = ControllerAdmin::loginAction();
} elseif ($path == 'logout') {
    // Выход
    $response = ControllerAdmin::logoutAction();
}
// listNews
elseif ($path == 'newsAdmin') {
    $response = ControllerAdminNews::servicesList();
}
// add news
elseif ($path == 'newsAdd') {
    $response = ControllerAdminNews::servicesAddForm();
} elseif ($path == 'newsAddResult') {
    $response = ControllerAdminNews::servicesAddResult();
}
// edit news
elseif ($path == 'newsEdit' && isset($_GET['id'])) {
    $response = ControllerAdminNews::servicesEditForm($_GET['id']);
} elseif ($path == 'newsEditResult' && isset($_GET['id'])) {
    $response = ControllerAdminNews::servicesEditResult($_GET['id']);
}
// delete news
elseif ($path == 'newsDel' && isset($_GET['id'])) {
    $response = ControllerAdminNews::servicesDeleteForm($_GET['id']);
} elseif ($path == 'newsDelResult' && isset($_GET['id'])) {
    $response = ControllerAdminNews::servicesDeleteResult($_GET['id']);
}
// Страница не существует
else {
    $response = ControllerAdmin::error404();
}
