<?php
return [
    '/contact'=>['App\Controller\Contact', 'index'],
    '/contact/action'=>['App\Controller\Action', 'index'],
    '/contact/list'=>['App\Controller\ActionList', 'index'],
    '#contact\/[0-9]*$#'=>['App\Controller\ActionGet', 'index']
];