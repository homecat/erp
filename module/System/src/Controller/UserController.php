<?php
/**
 * Created by PhpStorm.
 * User: jk
 * Date: 2018/1/17
 * Time: 15:49
 */
namespace System\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


class UserController extends AbstractActionController
{
    public function indexAction()
    {
        echo 'index';
        exit;
    }

    public function testAction()
    {
        echo 'application test action';
        exit;
    }

}