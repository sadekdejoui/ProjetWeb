<?php
require '../../config.php';
include_once '../../Controller/NotificationC.php';
session_start();
$notif=new NotificationC();
$notif->SeenNotif($_GET['id']);
$id_res=$_GET['id_res'];
header("location:ComplaintResponse.php?id_res=". urlencode($id_res));
exit;