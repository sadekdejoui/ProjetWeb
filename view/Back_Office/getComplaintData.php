<?php
require_once '../../config.php';
$db = config::getConnexion();

$sql = "SELECT type_reclamation, COUNT(*) as count FROM formulaire GROUP BY type_reclamation";
$query = $db->prepare($sql);
$query->execute();
$data = $query->fetchAll(PDO::FETCH_ASSOC);

$response = ['labels' => [], 'counts' => []];
foreach ($data as $row) {
    $response['labels'][] = $row['type_reclamation'];
    $response['counts'][] = $row['count'];
}

echo json_encode($response);
?>
