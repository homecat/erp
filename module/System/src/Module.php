<?php
/**
 * Created by PhpStorm.
 * User: jk
 * Date: 2018/1/17
 * Time: 16:14
 */
namespace System;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements ConfigProviderInterface

{
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

}