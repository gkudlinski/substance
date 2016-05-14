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
    echo'Please read readme.md file';
}
?>