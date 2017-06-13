<?php

require_once( 'Model/Model.php' );
require_once('Controller/Controller.php');
require_once('View/View.php');

use \Model\Model;
use \Controller\Controller;
use \View\View;

$model = new Model();
$controller = new Controller( $model );
$view = new View( $controller, $model );

if(
    isset( $_GET['action'] )
    && ! empty( $_GET['action'] )
) {
    $controller->{ $_GET['action'] }();
}

echo $view->output();