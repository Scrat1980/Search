<?php

/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 13.06.17
 * Time: 15:08
 */
namespace View;

class View
{
    private $model;
    private $controller;

    public function __construct( $controller, $model )
    {
        $this->controller = $controller;
        $this->model = $model;
    }

    public function output()
    {
        return "<p><a>"
            . $this->model->string
            . "</a></p>";
    }
}