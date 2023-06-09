<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\Rendering;
use Phpcourse\Myproject\Classes\Traits\DebugTrait;


class AboutController implements ControllerMethodName
{
    use DebugTrait;
    public function index() : void{
        self::debugConsole('Controller');
        $data = ['title' => 'About', 'content' => 'main_pages/about'];
        new Rendering($data);
    }
}
