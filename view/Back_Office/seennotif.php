<?php
require '../../config.php';
include_once '../../Controller/NotificationC.php';
session_start();
$notif=new NotificationC();
$notif->SeenNotif($_GET['id']);
header("location:REC_FORMBackOffice.php");
exit;