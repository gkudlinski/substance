<?php
if (isset($_GET['page']) && $_GET['page'] == 'substance') {
    include_once 'mvc/controller/SubstanceController.php';
   new mvc\controller\SubstanceController();
}
else if (isset($_GET['page']) && $_GET['page'] == 'substanceGroup') {
    include_once 'mvc/controller/SubstanceGroupController.php';
    new mvc\controller\SubstanceGroupController();
}
else if (isset($_GET['page']) && $_GET['page'] == 'unit') {
    include_once 'mvc/controller/UnitController.php';
    new mvc\controller\UnitController();
}
else{
    echo'Please read readme.md file<br />';
    echo'<a href="index.php?page=substance&action=add">Dodaj substancje</a><br />
    <a href="index.php?page=substance&action=modify">Edytuj substancje</a><br />
    <a href="index.php?page=substanceGroup&action=add">Dodaj grupe substancji</a><br />
    <a href="index.php?page=substanceGroup&action=modify">Edytuj grupe substancji</a><br />
    <a href="index.php?page=unit&action=add">Dodaj jednostkę</a><br />
    <a href="index.php?page=unit&action=modify">Edytuj jednostkę</a><br />';

    echo'
    <a href="index.php?page=substance&action=list">Lista substancji</a><br />
    <a href="index.php?page=substanceGroup&action=list">Lista grup substancji</a><br />
    <a href="index.php?page=unit&action=list">Lista jednostek</a><br />
    ';
}
?>