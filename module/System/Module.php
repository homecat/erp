<?php
/**
 * Created by PhpStorm.
 * User: jk
 * Date: 2018/1/17
 * Time: 16:14
 */
namespace System;

class Module

{
    public function getConfig()
    {
        return array();
        echo 'getconfig';
        return include __DIR__ . '/../config/module.config.php';
    }

}