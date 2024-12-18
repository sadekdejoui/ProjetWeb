
<?php
require '../../config.php';
include_once '../../Controller/NotificationC.php';
session_start();

$notif = new NotificationC();

// Fetch all notifications
$notifications = $notif->showNotifUser();

// Return notifications as JSON
header('Content-Type: application/json');
echo json_encode($notifications);
?>


