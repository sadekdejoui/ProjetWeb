<?php
// Including necessary files
require '../../config.php'; 
require_once '../../model/Formulaire.php';
include_once '../../controller/FormulaireC.php';

// Get the complaint ID from URL or request
$complaintId = $_GET['complaintId'];

// SQL query to fetch the complaint from the database
$sql = "SELECT * FROM complaint WHERE id = :id";
$query = $db->prepare($sql);
$query->execute(['id' => $complaintId]);

$row = $query->fetch(PDO::FETCH_ASSOC);

if ($row) {
    // Check if there is any file data
    $fileContent = $row['file']; // Retrieve the combined file content

    if ($fileContent) {
        // Split the content back into individual files
        $files = explode('::FILE_SEPARATOR::', $fileContent); // Split the files using the separator

        // Directory to store files locally
        $fileDirectory = 'uploads/';
        if (!file_exists($fileDirectory)) {
            mkdir($fileDirectory, 0777, true);  // Create the directory if it doesn't exist
        }

        foreach ($files as $index => $file) {
            // Generate a unique filename
            $fileName = 'file_' . time() . '_' . $index . '.bin';
            file_put_contents($fileDirectory . $fileName, $file);  // Save file locally

            // Optionally, display a download link
            echo "<a href='$fileDirectory$fileName' download>Download File $index</a><br>";
        }
    } else {
        echo "No files attached to this complaint.";
    }
} else {
    echo "Complaint not found!";
}

// Redirect or display a success message after the file processing is done
header("Location: ./thankyou.html");  // Redirect to a thank you page
exit;
?>
