<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\Rendering;
use Phpcourse\Myproject\Classes\Traits\DebugTrait;
/*

За зразок візьміть шаблон footer.latte
Переконайтесь, що ви можете перейти на сторінку новин за посиланням /news*/

class NewsController implements ControllerMethodName
{
    use DebugTrait;
    public function index(): void
    {
        self::debugConsole('Controller');
        $news = [['header' => "World record for four-finger pushups with claps", 'text' => "A 21-year-old Chinese college student broke a Guinness World Record when he used only four fingers to do 22 pushups in one minute and clapped his hands in between each pushup.", 'date' => "04/11/2023"],
        ['header' => "World's shortest dog", 'text' => "A Florida woman's pet chihuahua was officially named the world's shortest dog living by Guinness World Records at a height of only 3.59 inches.", 'date' => "04/10/2023"],
        ['header' => "Snake on a plane!", 'text' => "A pilot in South Africa made a hasty emergency landing after discovering a highly venomous cobra hiding under his seat.", 'date' => "04/06/2023"]];
        $data = ['page' => 'news', 'content' => $news];
        $data['news'] = $news;
        new Rendering($data);
    }
}
