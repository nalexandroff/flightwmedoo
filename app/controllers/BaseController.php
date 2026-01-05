<?php

namespace app\controllers;

use flight\Engine;

class BaseController
{
    protected $app;

    public function __construct() {
        $this->app = \Flight::app();
    }

    public function test()
    {
        echo 'Бейз контролера се зарежда';
    }

    /**
     * Рендериране с layout (хедър + футър)
     */
    protected function render(string $template, array $data = []): void
    {
        // Генерирай съдържанието на страницата
        $content = $this->app->view()->fetch($template, $data);

        // Рендерирай layout с включено съдържание и върни като string
        $html = $this->app->view()->fetch('layout', array_merge($data, ['content' => $content]));

        $this->app->response()->write($html);
    }

    /**
     * Рендериране без layout (само съдържанието)
     */
    protected function load(string $template, array $data = []): void
    {
        $html = $this->app->view()->fetch($template, $data);
        $this->app->response()->write($html);
    }
}