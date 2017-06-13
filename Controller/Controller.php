<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 13.06.17
 * Time: 15:05
 */

namespace Controller;


class Controller
{
    private $model;

    public function __construct( $model )
    {
        $this->model = $model;
    }

    public function search()
    {
        echo 'Search action';
    }
}