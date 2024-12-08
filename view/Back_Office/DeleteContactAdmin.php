<?php
require_once '../../config.php';
require_once '../../model/Formulaire.php';
include_once '../../Controller/FormulaireC.php';
$c=new FormulaireC();
$id=$_GET['id']; 
$message = $_GET['message'] ?? '';
$c->deleteComplaint($id);
 // Check if 'message' is set
//$c->reponseComplaint($id, $message);

//header("Location: ./REC_FORMBackOffice.php");
//exit;
?>