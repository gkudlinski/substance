<?php
namespace mvc\model;
include_once 'DatabaseModel.php';

class SubstanceModel extends DatabaseModel
{
    public function formAdd()
    {
        if(isset($_POST['code']) && isset($_POST['name']) && isset($_POST['unit'])){
               $this->db->query('INSERT INTO substance (code, name, unit) VALUES ("'.$_POST['code'].'", "'.$_POST['name'].'", "'.$_POST['unit'].'")');
        }

    }

    public function formRemove()
    {

    }

    public function formModify()
    {
        if(isset($_POST['code']) && isset($_POST['name']) && isset($_POST['unit']) && isset($_POST['id'])) {
            $this->db->query('UPDATE substance SET code="' . $_POST['code'] . '", name="' . $_POST['name'] . '", unit="' . $_POST['unit'] . '" WHERE id="' . $_POST['id'] . '"');
        }
    }
    public function listItems()
    {
        $rows=$this->db->query('Select * from substance;');
        while ($row = $rows->fetch_assoc())
        {
            $tmp[] = $row;
        }
        return $tmp;
    }
}