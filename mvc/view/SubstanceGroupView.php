<?php
namespace mvc\view;


class SubstanceGroupView
{
    public function formAdd()
    {
        echo'
        <p>Dodaj</p>
        <form method="post">
       Nazwa:<input type="text" name="name" /><br />
        Rodzic grupy:<input type="text" name="parent_name" /><br />
        <input type="submit" value="Wyślij" />
        </form>
        ';

    }
    public function formRemove()
    {

    }
    public function formModify()
    {
        echo'
        <p>Modyfikuj</p>
        <form method="post">
        Id:<input type="text" name="id" /><br />
        Nazwa:<input type="text" name="name" /><br />
        Rodzic grupy:<input type="text" name="parent_name" /><br />
        <input type="submit" value="Wyślij" />
        </form>
        ';
    }
}