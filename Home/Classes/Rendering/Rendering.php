<?php

namespace Phpcourse\Myproject\Classes\Rendering;

use Phpcourse\Myproject\Classes\Traits\DebugTrait;
use Latte\Engine;
class Rendering{
    use DebugTrait;
    public function __construct($data){
        self::debugConsole('Rendering');
        $latte = new Engine;
        $latte->setTempDirectory('tempdir');
        $var = ['data' => $data];
        $latte->render('templates/default/index.latte', $var);
    }
}
