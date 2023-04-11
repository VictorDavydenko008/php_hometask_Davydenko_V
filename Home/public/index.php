<?php
    session_start();
    $debug = true;

    require_once __DIR__.'/../../vendor/autoload.php';

    use Phpcourse\Myproject\Classes\Controllers\AboutController;
    use Phpcourse\Myproject\Classes\Controllers\LoginController;
    use Phpcourse\Myproject\Classes\Controllers\ContactsController;
    use Phpcourse\Myproject\Classes\Controllers\HomeController;
    use Phpcourse\Myproject\Classes\Controllers\NewsController;
    use Phpcourse\Myproject\Classes\Controllers\PassportController;
    use Phpcourse\Myproject\Classes\Controllers\PortfolioController;
    use Phpcourse\Myproject\Classes\Controllers\RegisterController;
    use Phpcourse\Myproject\Classes\Controllers\StudentsParliamentController;
    use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
    use Phpcourse\Myproject\Classes\Router\Router;
    use Phpcourse\Myproject\Classes\StartApplication;

    $router = new Router();

    $router->addRoute('/', HomeController::class, ControllerMethodName::METHOD_NAME);
    $router->addRoute('/home', HomeController::class, ControllerMethodName::METHOD_NAME);
    $router->addRoute('/about', AboutController::class, ControllerMethodName::METHOD_NAME);
    $router->addRoute('/contacts', ContactsController::class,ControllerMethodName::METHOD_NAME);
    $router->addRoute('/news',NewsController::class, ControllerMethodName::METHOD_NAME);

    $router->addRoute('/sp',StudentsParliamentController::class,ControllerMethodName::METHOD_NAME);
    $router->addRoute('/portfolios',PortfolioController::class,ControllerMethodName::METHOD_NAME);

    $router->addRoute('/passport', PassportController::class, ControllerMethodName::METHOD_NAME);
    $router->addRoute('/login', LoginController::class, ControllerMethodName::METHOD_NAME);
    $router->addRoute('/register', RegisterController::class, ControllerMethodName::METHOD_NAME);

    //$router->addRoute('/admin', AdminController::class, ControllerMethodName::METHOD_NAME);

    $app = StartApplication::getInstance($router,  $_SERVER['REQUEST_URI'] ?? '/');
    $app->run();

    // SINGLETON CHECK
/*    function clientCode($router, $uri)
    {
        $s1 = StartApplication::getInstance($router, $uri);
        $s2 = StartApplication::getInstance($router, $uri);
        if ($s1 === $s2) {
            echo "Singleton works, both variables contain the same instance.";
        } else {
            echo "Singleton failed, variables contain different instances.";
        }
    }
    clientCode($router, $_SERVER['REQUEST_URI'] ?? '/');
*/



