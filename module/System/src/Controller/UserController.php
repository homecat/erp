<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace System\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class UserController extends AbstractActionController
{
    public function indexAction()
    {
        echo 'system index';
        exit;
    }

    public function testAction()
    {
        echo 'system test';
        exit;
    }
}
