<?php
namespace mvc\controller;


class UnitController
{
    private $model;
    private $view;

    public function __construct()
    {
        include_once dirname(__FILE__).'/../model/UnitModel.php';
        include_once dirname(__FILE__).'/../view/UnitView.php';
        $this->model = new \mvc\model\UnitModel();
        $this->view = new \mvc\view\UnitView();

        if (isset($_GET['action']) && $_GET['action'] == 'add') {
            $this->add();
        }
        elseif (isset($_GET['action']) && $_GET['action'] == 'remove') {
            $this->remove();
        }
        elseif (isset($_GET['action']) && $_GET['action'] == 'modify') {
            $this->modify();
        }
        else{
            exit('Please read readme.md file');
        }
    }

    private function add()
    {
        $this->model->formAdd();
        $this->view->formAdd();
    }

    private function remove()
    {
        $this->model->formRemove();
        $this->view->formRemove();
    }

    private function modify()
    {
        $this->model->formModify();
        $this->view->formModify();
    }
}