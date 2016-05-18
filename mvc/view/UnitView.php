<?php
namespace mvc\view;


class UnitView
{
    public function formAdd()
    {
        echo '
        <p>Dodaj</p>
        <form method="post">
        Nazwa: <input type="text" name="name" /><br />
        Skrót:<input type="text" name="shortcut" /><br />
        <input type="submit" value="Wyślij" />
        </form>
        ';

    }

    public function formRemove()
    {

    }

    public function formModify()
    {
        echo '
        <p>Modyfikuj</p>
        <form method="post">
        Id:<input type="text" name="id" /><br />
        Nazwa:<input type="text" name="name" /><br />
        Skrót:<input type="text" name="shortcut" /><br />
        <input type="submit" value="Wyślij" />
        </form>
        ';
    }

    public function listItems($items)
    {
        $i = 0;
        foreach ($items as $item) {
            echo '(Nr' . $i . ') ';
            $i++;
            foreach ($item as $key => $value) {
                echo $key . ' ' . $value;
            }
            echo'<br />';
        }
    }
}