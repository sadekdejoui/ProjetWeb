<?php
// Include config file
include 'config.php';

// Fetch events from the database
$sql = "SELECT id_evenement, titre, description, date, heure, emplacement FROM evénements ORDER BY date ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">';
        echo '<div class="card">';
        echo '<img src="..\Front-office\img\default_event.jpg" alt="' . htmlspecialchars($row['titre']) . '" class="card-img-top">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . htmlspecialchars($row['titre']) . '</h5>';
        echo '<p class="card-date">Date: ' . htmlspecialchars($row['date']) . ' ' . htmlspecialchars($row['heure']) . '</p>';
        echo '<p class="card-text">' . htmlspecialchars($row['description']) . '<br>Lieu: ' . htmlspecialchars($row['emplacement']) . '</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo '<p class="text-center">No upcoming events found.</p>';
}

$conn->close();
?>
