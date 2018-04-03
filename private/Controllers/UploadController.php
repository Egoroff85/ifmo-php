<?php
namespace Best\Shop\Controllers;

use Best\Shop\Models\UploadModel;
use Web\Engine\Controller;

class UploadController extends Controller
{
    private $template = 'template_view.php';
    private $model;

    function __construct() {
        $this->model = new UploadModel();
    }

    function avatarAction()
    {
        if(!empty($_FILES['file']['name'])){
            return $this->generateAjaxRespons($this->model->uploadAvatar($_FILES));
        } else {
            echo "File not found";
        } 
    }

    function goodsimageAction()
    {
        if(!empty($_FILES['file']['name'])){
            return $this->generateAjaxRespons($this->model->uploadGoodsImage($_FILES));
        } else {
            echo "File not found";
        } 
    }
}