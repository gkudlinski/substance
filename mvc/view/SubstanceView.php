<?php
namespace mvc\view;


class SubstanceView
{
    public function formAdd()
    {
        echo'
        <p>Dodaj</p>
        <form method="post">
       Nazwa:<input type="text" name="name" /><br />
        Kod:<input type="text" name="code" /><br />
        Jednostka: <input type="text" name="unit" /><br />
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
        Skrót:<input type="text" name="shortcut" /><br />
        <input type="submit" value="Wyślij" />
        </form>
        ';
    }
}