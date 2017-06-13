<?php

/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 13.06.17
 * Time: 15:08
 */
//namespace View;

class View
{
    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function output()
    {
        return "<p><a href='/index.php?page=main'>"
            . $this->model->string
            . "</a></p>"
            . "<p><a href='/index.php?page=results'>"
            . $this->model->string
            . "</a></p>"
            . "<p><a href='/index.php?page=search'>"
            . $this->model->string
            . "</a></p>";
    }
}