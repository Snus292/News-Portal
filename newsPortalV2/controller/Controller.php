<?php

class Controller
{

    public static function startSite()
    {
        $arr = Services::getLast3Services();
        include_once 'view/start.php';
    }

    public static function allCategory()
    {
        $arr = Category::getAllCategory();
        include_once 'view/category.php';
    }

    public static function allServices()
    {
        $arr = Services::getAllServices();
        include_once 'view/allservices.php';
    }

    public static function servicesByCatID($id)
    {
        $arr = Services::getServicesByCategoryID($id);
        include_once 'view/catservices.php';
    }

    public static function servicesByID($id)
    {
        $n = Services::getServicesByID($id);
        include_once 'view/readservices.php';
    }

    public static function error404()
    {
        include_once 'view/error404.php';
    }

    public static function insertComment($c, $id)
    {
        Comments::insertComment($c, $id);
        header('Location:news?id=' . $id . '#ctable');
    }

    public static function comments($newsid)
    {
        $arr = Comments::getCommentByNewsID($newsid);
        ViewComments::commentsByServices($arr);
    }

    public static function commentsCount($newsid)
    {
        $arr = Comments::getCommentsCountByNewsID($newsid);
        ViewComments::commentsCount($arr);
    }

    public static function commentsCountWithAnchor($newsid)
    {
        $arr = Comments::getCommentsCountByNewsID($newsid);
        ViewComments::commentsCountWithAnchor($arr);
    }

    public static function registerForm()
    {
        include_once('view/formRegister.php');
    }
    public static function registerUser()
    {
        $result = Register::registerUser();
        include_once('view/answerRegister.php');
    }


} 