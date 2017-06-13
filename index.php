<?php

spl_autoload_register(function ($className){
    require_once ($className . '.php');
});

$page = $_GET['page'];
if(!empty($page)) {
    $data = [
        'main' => [
            'model' => null,
            'view' => null,
            'controller' => null
        ],
        'search' => [
            'model' => 'SearchModel',
            'view' => 'SearchView',
            'controller' => 'SearchController'
        ],
        'results' => [
            'model' => 'ResultsModel',
            'view' => 'ResultsView',
            'controller' => 'ResultsController'
        ],
    ];

    foreach ($data as $key => $components) {
        if($page == $key) {
            $model = $components['model'];
            $view = $components['view'];
            $controller = $components['controller'];
            break;
        }
    }

    if(isset($model)) {
        $m = new $model();
        $c = new $controller($model);
        $v = new $view($model);

        echo $v->output();
    }
}