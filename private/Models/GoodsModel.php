<?php
namespace Best\Shop\Models;

use Web\Engine\DB;

class GoodsModel
{
    private $db;
    private $table_name;
    const ERROR = 'error';
    const GOODS_ADDED = 'goods added';

    function __construct()
    {
        $this->db = DB::getInstance();
        $this->table_name = 'catalog';
    }

    function addGoods($params)
    {
        $sql = "INSERT INTO $this->table_name (category, title, image, description, price, quantity) 
VALUES (:category, :title, :image, :description, :price, :quantity)";
        if (!$this->db->insertIntoTable($sql, $params)) {
            return self::ERROR;
        }
        return self::GOODS_ADDED;
    }

    public function getGoods($category) {
        $sql = "SELECT * FROM $this->table_name WHERE date >=:date ORDER BY date";
        $shows = $this->db->selectByParamFetchAll($sql, ['date' => $current_date]);
        if (isset($count)) {
            return array_slice($shows, 0, $count);
        }
        return $shows;
    }
} 