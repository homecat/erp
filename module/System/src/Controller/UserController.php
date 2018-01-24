<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace System\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

class UserController extends AbstractActionController
{
    public function indexAction()
    {
        echo 'system index';
//        $accounts = $this->getModel()->fetchAll();
//        $data     = [];
//        $total    = 0;
//        foreach($accounts as $val){
//            $val->StartDate = date('Y-m-d' , $val->StartDate);
//            $val->Created   = date('Y-m-d' , $val->Created);
//            $data[] = $val;
//            $total ++;
//        }
//        $result =  new JsonModel(['total'=>$total , 'data'=>$data]);
//        return $result;
    }

    public function testAction()
    {
//        if ($this->getRequest()->isXmlHttpRequest()) {
//            $jsonModel = new JsonModel(...);
//
//            /* @todo Render HTML script into `$html` variable, and add to `JsonModel` */
//            return $jsonModel;
//        } else {
//            return new ViewModel(...);
//        }
    }
}
