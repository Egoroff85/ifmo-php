<?php
namespace Best\Shop\Controllers;

use Web\Engine\Controller;

class ContactsController extends Controller
{
    private $template = 'template_view.php';

    function contactsAction()
    {
        $title = 'Контакты';
        $view_filename = 'contacts_view.php';
       
        return $this->generateResponse($view_filename, $this->template,
            [
                'title' => $title,
            ]);
    }

}