<?php
/**
 * Created by PhpStorm.
 * User: mst
 * Date: 15.01.2017
 * Time: 16:31
 */



spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$app = new app\App();

$app->start();