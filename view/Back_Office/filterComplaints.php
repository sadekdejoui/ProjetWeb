<?php
require_once '../../config.php'; // Include your database configuration
require_once '../../model/Formulaire.php';

$type = isset($_GET['type_reclamation']) ? $_GET['type_reclamation'] : 'all'; // Get the filter type from the query string
$db = config::getConnexion();

try {
    // Build the SQL query based on the filter
    if ($type === 'all') {
        $sql = "SELECT * FROM formulaire"; // Fetch all complaints
        $query = $db->prepare($sql);
    } elseif ($type === 'urgent') {
        // If 'urgent' filter is clicked, fetch complaints with 'urgent' status
        $sql = "SELECT * FROM formulaire WHERE status = '1'"; // Modify this based on your status for urgent complaints
        $query = $db->prepare($sql);
    } else {
        // For specific complaint types (other than 'all' and 'urgent')
        $sql = "SELECT * FROM formulaire WHERE type_reclamation = :type_reclamation"; // Fetch complaints based on selected type
        $query = $db->prepare($sql);
        $query->bindParam(':type_reclamation', $type, PDO::PARAM_STR); // Bind the parameter if the type is not 'all'
    }

    // Execute the query
    $query->execute();

    // Fetch the complaints
    $complaints = $query->fetchAll(PDO::FETCH_ASSOC);

    // Generate table rows dynamically
    foreach ($complaints as $cc) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($cc['nom']) . '</td>';
        echo '<td>' . htmlspecialchars($cc['email']) . '</td>';
        echo '<td>' . htmlspecialchars($cc['telephone']) . '</td>';
        echo '<td>' . htmlspecialchars($cc['type_reclamation']) . '</td>';
        echo '<td>' . htmlspecialchars($cc['description']) . '</td>';
        if ($cc['status'] == '0') {
            echo '<td><button class="openModal" data-id="' . $cc['id_form'] . '">Review Complaint</button></td>';
        }
        echo '</tr>';
    }
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
