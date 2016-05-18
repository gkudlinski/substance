<?php
namespace mvc\model;
include_once 'DatabaseModel.php';

class SubstanceGroupModel extends DatabaseModel
{
    public function formAdd()
    {
        if(isset($_POST['name']) && isset($_POST['parent_name'])){
            $this->db->query('INSERT INTO group (name, parent_name) VALUES ("'.$_POST['name'].'", "'.$_POST['parent_name'].'")');
        }
    }

    public function formRemove()
    {

    }

    public function formModify()
    {
        if(isset($_POST['name']) && isset($_POST['parent_name']) && isset($_POST['id'])) {
            $this->db->query('UPDATE group SET name="' . $_POST['name'] . '", parent_name="' . $_POST['parent_name'] . '" WHERE id="' . $_POST['id'] . '"');
        }
    }
    public function listItems()
    {
        $rows=$this->db->query('Select * from group;');
        while ($row = $rows->fetch_assoc())
        {
            $tmp[] = $row;
        }
        return $tmp;
    }
}