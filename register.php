<?php

use MvcCore\Jtl\Support\Debug;
use ox4D\cli\controllers\EmptyController;
use ox4D\cli\controllers\ResourceController;
use ox4D\cli\migrations\CreateMigration;
use ox4D\cli\models\CreateModel;
use ox4D\cli\migrations\migrate;
use ox4D\cli\requests\CreateRequest;

// require_once __DIR__.'/MakeController/EmptyController.php';

function  excute($command, $fileName)
{
    $sysCommands = require_once __DIR__ . '/commands.php';
    foreach ($sysCommands as $sysCommand => $action) {
        if ($sysCommand === $command) {
            $controller = $action[0];
            $method = $action[1];
            $reflection = new ReflectionMethod($controller , $method);
            $res = $reflection->isStatic();
            if ($res) {
                $controller::$method($fileName);
            }else {
                $obj = new $controller();
                $obj->$method($fileName);
            }
        }
    }
}


function is_static($action)
{
    $controller = $action[0];
    $method = $action[1];
    if ($controller::$method) {
        
    }
}
