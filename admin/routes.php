<?php
class routes
{
    private $controllers = [
        'products' => ['index', 'update', 'updatePost', 'create', 'createPost', 'delete'],
        'categories' => ['index', 'update', 'updatePost', 'create', 'createPost', 'delete'],
        'users' => ['index', 'update', 'updatePost', 'create', 'createPost', 'delete'],
        'login' => ['index', 'login', 'logout'],
        'news' => ['index', 'update', 'updatePost', 'create', 'createPost', 'delete'],
        'orders' => ['index', 'delivery', 'detail', 'export'],
    ];
    public function checkRoute($controller, $action)
    {
        if (
            !array_key_exists($controller, $this->controllers) ||
            !in_array($action, $this->controllers[$controller])
        ) {
            $this->processRoute('products', 'error');
        } else {
            $this->processRoute($controller, $action);
        }
    }
    public function processRoute($controller, $action)
    {
        include_once('controllers/' . $controller . 'Controller.php');
        $class = $controller . 'Controller';
        $controller = new $class;
        $controller->$action();
    }
}
