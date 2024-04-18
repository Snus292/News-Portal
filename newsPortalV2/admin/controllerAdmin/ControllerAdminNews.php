<?php
class ControllerAdminNews
{
    // list News
    public static function servicesList()
    {
        $arr = ModelAdminNews::getNewsList();
        include_once 'viewAdmin/servicesList.php';
    }

    // add
    public static function servicesAddForm()
    {
        $arr = ModelAdminCategory::getCategoryList();
        include_once('viewAdmin/servicesAddForm.php');
    }

    public static function servicesAddResult()
    {
        $test = ModelAdminNews::getNewsAdd();
        include_once('viewAdmin/servicesAddForm.php');
    }

    // edit
    public static function servicesEditForm($id)
    {
        $arr = ModelAdminCategory::getCategoryList();
        $detail = ModelAdminNews::getNewsDetail($id);
        include_once('viewAdmin/servicesEditForm.php');
    }

    public static function servicesEditResult($id)
    {
        $test = ModelAdminNews::getNewsEdit($id);
        include_once('viewAdmin/servicesEditForm.php');
    }

    // delete
    public static function servicesDeleteForm($id)
    {
        $arr = ModelAdminCategory::getCategoryList();
        $detail = ModelAdminNews::getNewsDetail($id);
        include_once('viewAdmin/servicesDeleteForm.php');
    }

    public static function servicesDeleteResult($id)
    {
        $test = ModelAdminNews::getNewsDelete($id);
        include_once('viewAdmin/servicesDeleteForm.php');
    }
}  // class
