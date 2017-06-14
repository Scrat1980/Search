<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 13.06.17
 * Time: 15:05
 */


class AjaxController
{
    private $site;
    private $type;
    private $status = 'ok';

    public function index()
    {
        $this->site = isset($_GET['site'])
            ? $_GET['site']
            : null;
        $this->type = isset($_GET['type'])
            ? $_GET['type']
            : null;

        if(!$this->validates()) {
            $this->status = 'Validation failed';
        }

        $model = new AjaxModel();
        $result = $model->processData(
            $this->site,
            $this->type
        );

        echo $this->status;

//        return $result;
    }

    private function validates()
    {
        if($this)

        return [$_GET['site'], $_GET['type']];
    }
}