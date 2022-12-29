<?php
use ox4D\cli\controllers\EmptyController;
use ox4D\cli\controllers\ResourceController;
use ox4D\cli\migrations\CreateMigration;
use ox4D\cli\models\CreateModel;
use ox4D\cli\migrations\migrate;
use ox4D\cli\requests\CreateRequest;

return [

    'make-dir' => [],
    'make-migration' => [],
    'make-migrate' =>[],
    'make-resource' =>[ResourceController::class,'runCommand'],
    'make-empty' => [EmptyController::class, 'runCommand'],
    'add-command' => []
];