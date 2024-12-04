<?php

class config 
{
    private static $pdo = null;

    // Method to get the database connection
    public static function getConnexion()
    {
        if (!isset(self::$pdo)) {
            try {
                self::$pdo = new PDO(
                    'mysql:host=localhost;dbname=base de données 1', // Database name set to cours_db
                    'root', // Database username
                    '', // Database password
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Enable error reporting
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // Fetch results as associative arrays
                    ]
                );
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage()); // Handle errors if connection fails
            }
        }
        return self::$pdo;
    }
}

// Example usage

?>
