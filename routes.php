<?php
class routes
{
    private $controllers = [
        'account'=>['register','registerPost','login','loginPost','logout'],
        'cart'=>['create','index','delete','destroy','update','checkout'],
        'checkout'=>['create','index','delete','destroy','update','checkout'],        'contact'=>[],
        'header'=>['index'],
        'contact' => ['index'],
        'home'=>['index'],
        'news'=>['index','detail', ],
        'products'=>['index','categories','detail'],
        'wishlist'=>['index','create','delete'],
        'search'=>['index']
    ];
    public function checkRoute($controller, $action)
    {
        if (
            !array_key_exists($controller, $this->controllers) ||
            !in_array($action, $this->controllers[$controller])
        ) {
            $this->processRoute('home', 'error');
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
