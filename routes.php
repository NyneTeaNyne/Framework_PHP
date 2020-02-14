<?php
return [
    '/contact'=>['App\Controller\Contact', 'index'],
    '/contact/action'=>['App\Controller\Action', 'index'],
    '/contact/list'=>['App\Controller\ActionList', 'index'],
    '/contact/{id}'=>['App\Controller\ActionGet', 'index', "requirements" => ["id" => "+d"]],
    '/param1/{param1}/param2/{param2}/{param3}/test4'=>['App\Controller\MultiParameters', 'index', "requirements" => ["param1" => "+d", "param1" => "+s", "param3" => "+d"]]
];