<?php
class Services{

        public static function getLast3Services() {
            $query = "SELECT * FROM services ORDER BY id DESC LIMIT 3" ;
            $db = new Database();
            $arr = $db->getAll($query);
            return $arr;
    }
        public static function getAllServices() {
            $query = "SELECT * FROM services ORDER BY id DESC" ;
            $db = new Database();
            $arr = $db->getAll($query);
            return $arr;
        }

         public static function getServicesByCategoryID($id)    {
            $query = "SELECT * FROM services where category_id=".(string)$id." ORDER BY id DESC";
          
            $db = new Database();
            $arr = $db->getAll($query);
            return $arr;
        }

         public static function getServicesByID($id) {
            $query = "SELECT * FROM services where id=".(string)$id;
            $db = new Database();
            $n = $db->getOne($query);
            return $n;
        }

         
}