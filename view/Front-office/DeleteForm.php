<?php
require_once '../../config.php';
require_once '../../model/Formulaire.php';
include_once '../../Controller/FormulaireC.php';
$c=new FormulaireC();
$id=$_GET['id']; 
$c->deleteComplaint($id);
header("Location: ./history.php");
exit;
?>