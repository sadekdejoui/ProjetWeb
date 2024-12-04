<?php
require 'config.php';

try {
    // Establish the database connection
    $pdo = config::getConnexion();
    $query = "SELECT * FROM evénements";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $events = $stmt->fetchAll();
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <style>
        /* Add some basic styling */
        .events-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .event-card {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 16px;
            width: 250px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .event-card h3 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <h1>Upcoming Events</h1>
    <div class="events-container">
        <?php if ($events): ?>
            <?php foreach ($events as $event): ?>
                <div class="event-card">
                    <img src="default.jpg" alt="Event Image">
                    <h3><?php echo htmlspecialchars($event['titre']); ?></h3>
                    <p><strong>Date:</strong> <?php echo htmlspecialchars($event['date']); ?></p>
                    <p><strong>heure:</strong> <?php echo htmlspecialchars($event['heure']); ?></p>
                    <p><strong>Location:</strong> <?php echo htmlspecialchars($event['emplacement']); ?></p>
                    <p><?php echo htmlspecialchars($event['description']); ?></p>
                    <p><strong>capacite:</strong> <?php echo htmlspecialchars($event['capacité_maximale']); ?></p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No events found.</p>
        <?php endif; ?>
    </div>
</body>
</html>
