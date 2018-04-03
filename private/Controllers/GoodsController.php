<?php
namespace Best\Shop\Controllers;

use Best\Shop\Models\GoodsModel;
use Web\Engine\Controller;

class GoodsController extends Controller
{
    private $model;

    function __construct() {
        $this->model = new GoodsModel();
    }   

    function addgoodsAction()
    {
        session_start();
        if(isset($_POST['goods'])){
            $post = $_POST;
            return $this->generateAjaxRespons($this->model->addGoods(json_decode($post['goods'], true)));
        }
    }
}