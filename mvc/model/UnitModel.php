<?php
namespace mvc\model;
include_once 'DatabaseModel.php';

class UnitModel extends DatabaseModel
{
    public function formAdd()
    {
        if (isset($_POST['name']) && isset($_POST['shortcut'])) {
            $this->db->query('INSERT INTO unit (name, shrortcut) VALUES ("' . $_POST['name'] . '", "' . $_POST['shortcut'] . '")');
        }
    }

    public function formRemove()
    {

    }

    public function formModify()
    {
        if (isset($_POST['name']) && isset($_POST['shortcut']) && isset($_POST['id'])) {
            $this->db->query('UPDATE unit SET name="' . $_POST['name'] . '", shortcut="' . $_POST['shortcut'] . '" WHERE id="' . $_POST['id'] . '"');
        }
    }

    public function listItems()
    {
    $rows=$this->db->query('Select * from unit;');
        while ($row = $rows->fetch_assoc())
        {
            $tmp[] = $row;
        }
        return $tmp;
    }
}