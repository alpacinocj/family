<?php

namespace Family\Helper;


use Family\Core\Config;
use Family\Core\Singleton;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Template
{
    use Singleton;

    public $template;

    public function __construct()
    {
        $templateConfig = Config::get('template');
        $loader = new FilesystemLoader($templateConfig['path']);
        $this->template = new Environment($loader, array(
            'cache' => $templateConfig['cache'],
        ));
    }
}