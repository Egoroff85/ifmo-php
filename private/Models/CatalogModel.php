<?php
namespace Best\Shop\Models;

use Web\Engine\DB;

class CatalogModel {

    private $db;
    private $table_name;
    function __construct()
    {
        $this->db = DB::getInstance();
        $this->table_name = 'catalog';
    }

    public function getGoods($count=null) {
        $sql = "SELECT * FROM $this->table_name";
        $goods = $this->db->selectAllFromTable($sql);
        if (isset($count)) {
            return array_slice($goods, 0, $count);
        }
        return $goods;
    }

    public function getShowById($id) {
        $sql = "SELECT * FROM $this->table_name WHERE image=:image";
        $show = $this->db->selectByParam($sql, ['image'=>$id]);
        return $show;
    }
}