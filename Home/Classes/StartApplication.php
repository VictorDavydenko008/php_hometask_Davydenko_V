<?php

    namespace Phpcourse\Myproject\Classes;

    use Phpcourse\Myproject\Classes\Controllers\NotFoundController;
    use Phpcourse\Myproject\Classes\Router\Router;
    use Phpcourse\Myproject\Classes\Traits\DebugTrait;
    use Monolog\Level;
    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;

    class StartApplication
    {
        use DebugTrait;
        private string $URI;
        // об'єкт класу Router буде записаний в цю змінну
        private object $routerData;
        private static array $instances = [];
        // просто константи
        const CONTROLLER = 1;
        const ACTION = 2;

        public function __construct(readonly Router $router, string $URI)
        {
            self::debugConsole('StartApp');
            $this->URI = $URI;
            $this->routerData = $router;
            self::debugConsole($this->URI);
        }
        public static function getInstance(Router $router, $uri): StartApplication
        {
            $cls = static::class;
            if (!isset(self::$instances[$cls])) {
                self::$instances[$cls] = new static($router, $uri);
            }
            return self::$instances[$cls];
        }

        public function __wakeup()
        {
            throw new \Exception("Cannot unserialize a singleton.");
        }

        public function run(): void {
            self::debugConsole('StartApp');
            $logger = new Logger('info');
            $logger->pushHandler(new StreamHandler('my.log', Level::Debug));

            try{ // спробуємо знайти збіг нашого URI з патерном роутера
                $match = $this->routerData->findRoute($this->URI);
                $controller = $match[self::CONTROLLER];
                $action = $match[self::ACTION];
                (new $controller)->$action();
                $logger->info("Controller is found", [$controller]);
            }catch(\Throwable $e){
                (new NotFoundController)->showErrorPage(
                    $e->getMessage(),
                    $e->getCode(),
                );
                $logger->error("Controller is not found", [$e->getMessage(), $e->getCode(), $this->URI]);
            }
        }
    }
