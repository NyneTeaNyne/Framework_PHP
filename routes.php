<?php
return [
    '/contact'=>['App\Controller\Contact', 'index'],
    '/contact/action'=>['App\Controller\Action', 'index'],
    '/contact/list'=>['App\Controller\ActionList', 'index'],
    '/contact/{id}'=>['App\Controller\ActionGet', 'index'], // classe de validation
    '/param1/{param1}/param2/{param2}/{param3}'=>['App\Controller\MultiParameters', 'index']
];