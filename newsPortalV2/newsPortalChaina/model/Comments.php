<?php
class Comments
{
    public static function insertComment($c, $id)
    {
        $query = "INSERT INTO `comments` (`id`, `services_id`, `text`, `date`) VALUES (NULL, '" . $id . "', '" . $c . "',
        CURRENT_TIMESTAMP)";
        $db = new Database();
        $q = $db->executeRun($query);
        return $q;
    }

    public static function getCommentByServicesID($id)
    {
        $query = "SELECT * FROM comments WHERE services_id=" . (string)$id . " ORDER BY id DESC";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function getCommentsCountByServicesID($id)
    {
        $query = "SELECT count(id) as 'count' FROM comments WHERE services_id=" . (string)$id;
        $db = new Database();
        $c = $db->getOne($query);
        return $c;
    }
}