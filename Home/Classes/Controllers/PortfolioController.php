<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\Rendering;
use Phpcourse\Myproject\Classes\Traits\DebugTrait;


class PortfolioController implements ControllerMethodName
{
    use DebugTrait;
    public function index(): void
    {
        self::debugConsole('Controller');
        $data = ['title' => 'Portfolios', 'content' => 'additional_pages/portfolios'];
        new Rendering($data);
    }
}
