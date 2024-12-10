<?php
require '../../config.php';
include_once '../../Controller/NotificationC.php';
session_start();
$notif=new NotificationC();
$notif->SeenNotif($_GET['id']);
$idForm=$_GET['id_comp'];
// Redirect to the REC_FORMBackOffice page with the `id_form` parameter
if ($idForm) {
    header("Location: REC_FORMBackOffice.php?id_form=" . urlencode($idForm));
} else {
    // Handle the case where id_form is not found (optional)
    header("Location: REC_FORMBackOffice.php?error=invalid_notification");
}