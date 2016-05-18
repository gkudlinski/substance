<?php
namespace mvc\controller;


class SubstanceGroupController
{
    private $model;
    private $view;

    public function __construct()
    {
        include_once dirname(__FILE__).'/../model/SubstanceGroupModel.php';
        include_once dirname(__FILE__).'/../view/SubstanceGroupView.php';
        $this->model = new \mvc\model\SubstanceGroupModel();
        $this->view = new \mvc\view\SubstanceGroupView();

        if (isset($_GET['action']) && $_GET['action'] == 'add') {
            $this->add();
        }
        elseif (isset($_GET['action']) && $_GET['action'] == 'remove') {
            $this->remove();
        }
        elseif (isset($_GET['action']) && $_GET['action'] == 'modify') {
            $this->modify();
        }
        elseif (isset($_GET['action']) && $_GET['action'] == 'list') {
            $this->listItems();
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
    private function listItems()
    {
        $this->view->listItems($this->model->listItems());
    }
}