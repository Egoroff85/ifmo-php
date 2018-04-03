<?php
namespace Best\Shop\Controllers;

use Best\Shop\Models\CatalogModel;
use Web\Engine\Controller;

class CatalogController extends Controller
{
    private $template = 'template_view.php';
    private $model;
    function __construct()
    {
        $this->model = new CatalogModel();
    }

    public function catalogAction()
    {
        $title = 'Каталог';
        $view_filename = 'catalog_view.php';

        $goods = $this->model->getGoods();
        return $this->generateResponse($view_filename, $this->template,
            [
                'title' => $title,
                'goods' => $goods
            ]);
    }
}