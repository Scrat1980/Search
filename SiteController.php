<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 13.06.17
 * Time: 15:05
 */


class SiteController
{
    public function search()
    {
//        $model = new SearchModel();
        $view = new SearchView();
        $this->render($view);
    }

    public function results()
    {
//        $model = new ResultsModel();
        $view = new ResultsView();
        $this->render($view);
    }

    private function render($view)
    {
        $commonView = new CommonView();
        echo $commonView->output();
        echo $view->output();
    }
}