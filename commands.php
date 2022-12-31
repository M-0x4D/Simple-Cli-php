<?php
use ox4D\cli\controllers\EmptyController;
use ox4D\cli\controllers\ResourceController;
use ox4D\cli\migrations\CreateMigration;
use ox4D\cli\models\CreateModel;
use ox4D\cli\migrations\migrate;
use ox4D\cli\requests\CreateRequest;
use ox4D\cli\seeders\CreateSeeder;

return [

    'help' => [Help::class,'runCommand'],
    '-h'=>[Help::class,'runCommand'],
    '-make:migration' => [CreateMigration::class, 'create'],
    '-make:migrate' =>[migrate::class,'create'],
    '-make:resource' =>[ResourceController::class,'runCommand'],
    '-make:empty' => [EmptyController::class, 'runCommand'],
    '-make:seeder' => [CreateSeeder::class, 'runCommand'],
    '-make:model' => [CreateModel::class, 'runCommand'],
    '-make:request' => [CreateRequest::class, 'runCommand'],
    '-add:command' => []
];