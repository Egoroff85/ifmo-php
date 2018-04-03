<?php
namespace Best\Shop\Controllers;

use Best\Shop\Models\AccountModel;
use Web\Engine\Controller;

class AccountController extends Controller
{
    private $template = 'template_view.php';
    private $model;

    function __construct() {
        $this->model = new AccountModel();
    }

    function registrationAction()
    {
        if (isset($_POST['user_data'])) {
            //запись в базу
            $post = $_POST;
            return $this->generateAjaxRespons($this->model->regUser(json_decode($post['user_data'], true)));
        } else {

            $title = 'Регистрация';
            $view_filename = 'register_view.php';
       
            return $this->generateResponse($view_filename, $this->template,
            [
                'title' => $title,
            ]);
        }
       
    }

    function loginAction()
    {
        if (isset($_POST['auth_data'])) {
            $post = $_POST;
            return $this->generateAjaxRespons($this->model->authUser(json_decode($post['auth_data'], true)));
        } else {

            $title = 'Войти';
            $view_filename = 'login_view.php';
     
            return $this->generateResponse($view_filename, $this->template,
            [
                'title' => $title,
            ]);
        }
       
    }

    function accountAction()
    {
    session_start();
    if (!isset($_SESSION['login'])){
        header('Location:/account/login');
    } else {
        if ($_SESSION['login'] === 'admin') {
            $title = 'Аккаунт администратора';
            $view_filename = 'admin_view.php';    
        } else {
            $title = 'Аккаунт пользователя';
            $view_filename = 'account_view.php';             
        }
     
        return $this->generateResponse($view_filename, $this->template,
            [
                'title' => $title,
            ]);
        }
    }

    function useravatarAction()
    {
        session_start();
        if(isset($_POST['user_info'])){
            $post = $_POST;
            $user_data = json_decode($post['user_info'], true);
            $user_data += ['login'=>$_SESSION['login']];
            return $this->generateAjaxRespons($this->model->updateUserAvatar($user_data));
        }
    }

    function logoutAction()
    {
        session_start();
        session_unset();
        session_destroy();
        header('Location:/account/login');
    }

}