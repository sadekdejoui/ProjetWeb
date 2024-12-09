<?php
class FormulaireC
{
    // Method to list all formulaire (optional, in case you want to display all formulaire later)
    public function listformulaire()
    {
        $sql = "SELECT * FROM complaint";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    public function listformulaireA()
    {
        $sql = "SELECT * FROM complaint Where status='1'";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    public function listformulaireP()
    {
        $sql = "SELECT * FROM complaint Where status='0'";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    public function showComplaint($id)
    {
        $sql = "SELECT * FROM complaint WHERE ID = $id"; // Inclusion directe de l'ID dans la requête
        $db = config::getConnexion();
        try {
            $complaint = $db->query($sql); // Exécution directe et récupération
            return $complaint;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    public function showComplaintbycomplaint($id)
    {
        $sql = "SELECT * FROM complaint WHERE id_form = :id"; // Using a prepared statement for security
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        
        // Bind the ID value
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        
        try {
            // Execute the prepared statement
            $query->execute();
            
            // Fetch the single complaint (one result)
            $complaint = $query->fetch(PDO::FETCH_ASSOC);
            
            // Return the result
            return $complaint;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    
    
    // Method to delete a complaint (optional, for admin to delete formulaire)
    function deleteComplaint($id)
    {
        $sql = "DELETE FROM complaint WHERE id_form = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
            echo "Complaint deleted successfully!";
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    // Method to add a new complaint (main logic for form submission)
    function addComplaint($nom, $identifiant, $email, $telephone, $type_reclamation, $prof, $service, $description, $urgent)
    {
        $fileContent = null; // Variable to store combined file content
    
        // Check if files are uploaded
        if (isset($_FILES['file']) && !empty($_FILES['file']['name'][0])) {
            $files = [];
    
            // Loop through each uploaded file
            foreach ($_FILES['file']['tmp_name'] as $index => $tmpName) {
                if (is_uploaded_file($tmpName)) {
    
                    // File type validation
                    $fileInfo = pathinfo($_FILES['file']['name'][$index]);
                    $allowedTypes = ['jpg', 'jpeg', 'png', 'pdf'];  // Example allowed types
    
                    // If file type is not allowed, return an error message
                    if (!in_array($fileInfo['extension'], $allowedTypes)) {
                        echo "Invalid file type. Only JPG, JPEG, PNG, and PDF files are allowed.";
                        return; // Stop further processing
                    }
    
                    // If file is valid, get the content
                    $files[] = file_get_contents($tmpName); // Get binary content of each file
                }
            }
    
            // Combine all files into a single blob (or base64 string if needed)
            $fileContent = implode('::FILE_SEPARATOR::', $files); // Separate each file with a marker
        }
    
        // SQL to insert complaint with the files
        $sql = "INSERT INTO complaint (nom, ID, email, telephone, type_reclamation, prof, service, description, urgent, file)
                VALUES (:nom, :identifiant, :email, :telephone, :type_reclamation, :prof, :service, :description, :urgent, :file)";
        
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'nom' => $nom,
                'identifiant' => $identifiant,
                'email' => $email,
                'telephone' => $telephone,
                'type_reclamation' => $type_reclamation,
                'prof' => $prof,
                'service' => $service,
                'description' => $description,
                'urgent' => $urgent,
                'file' => $fileContent, // Store the combined file content
            ]);
            echo "Complaint submitted successfully!";
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    
    
    
    /*function addComplaint($nom, $identifiant, $email, $telephone, $type_reclamation, $prof, $service, $description, $urgent)
    {
        $sql = "INSERT INTO complaint (nom, ID, email, telephone, type_reclamation, prof, service, description, urgent)
                VALUES (:nom, :identifiant, :email, :telephone, :type_reclamation, :prof, :service, :description, :urgent)";
        
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'nom' => $nom,
                'identifiant' => $identifiant,
                'email' => $email,
                'telephone' => $telephone,
                'type_reclamation' => $type_reclamation,
                'prof' => $prof,
                'service' => $service,
                'description' => $description,
                'urgent' => $urgent,
            ]);
            echo "Complaint submitted successfully!";
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }*/

    // Method to show a specific complaint (optional, in case you need to show details of a single complaint)
  



    // Method to show a specific complaint (optional, in case you need to show details of a single complaint)
  


    function updateComplaint($nom, $identifiant, $email, $telephone, $type_reclamation, $prof, $service, $description, $urgent)
{
    $sql = "UPDATE complaint SET 
            nom = :nom,
            email = :email,
            telephone = :telephone,
            type_reclamation = :type_reclamation,
            prof = :prof,
            service = :service,
            description = :description,
            urgent = :urgent
            WHERE id_form = :identifiant";  // Corrected the WHERE clause
    
    $db = config::getConnexion();
    try {
        $query = $db->prepare($sql);
        $query->execute([
            'nom' => $nom,
            'identifiant' => $identifiant,  // kept 'identifiant' as per your original code
            'email' => $email,
            'telephone' => $telephone,
            'type_reclamation' => $type_reclamation,
            'prof' => $prof,
            'service' => $service,
            'description' => $description,
            'urgent' => $urgent,
             // Make sure 'id_form' is properly passed
        ]);
        echo $query->rowCount() . " record updated successfully!";
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

    // Method to update a complaint (optional, in case you want to allow admins to update formulaire)
    public function addchanges($id, $description)
    {
        $sql = "UPDATE complaint SET 
                description = :description
                WHERE id_form = :id_form"; // Use consistent naming
    
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'id_form' => $id, // Consistent naming
                'description' => $description,
            ]);
            echo $query->rowCount() . " record updated successfully!";
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    
    function approveComplaint($identifiant)
    {
        $sql = "UPDATE complaint 
                SET status = '1'
                WHERE id_form = :identifiant"; // Corrected syntax
        
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'identifiant' => $identifiant,
            ]);
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    
    function reponseComplaint($id_rec, $rep)
    {
        $sql = "INSERT INTO response (rep, id_rec) 
                VALUES (:rep, :id_rec)"; // Corrected syntax
        
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'rep' => $rep,
                'id_rec' => $id_rec,
            ]);
            echo $query->rowCount() . " record inserted successfully!";
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }



public function showmessage($id)
    {
        $sql = "SELECT * FROM complaint WHERE ID = $id"; // Inclusion directe de l'ID dans la requête
        $db = config::getConnexion();
        try {
            $message = $db->query($sql); // Exécution directe et récupération
            return $message;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    public function showreponse($id)
    {
        $sql = "SELECT rep FROM response WHERE id_rec = :id"; // Use a placeholder for the ID
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql); // Prepare the query
            $query->execute(['id' => $id]); // Bind the parameter securely
            return $query->fetchAll(PDO::FETCH_ASSOC); // Fetch the results as an associative array
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    public function showResponsebycomplaint($id)
    {
        // Use correct column name for the placeholder
        $sql = "SELECT * FROM response WHERE id_rec = :id"; // Ensure 'id_rec' matches your database schema
        $db = config::getConnexion(); // Ensure correct connection method
        
        try {
            // Prepare the query
            $query = $db->prepare($sql);
            
            // Bind the parameter securely
            $query->bindParam(':id', $id, PDO::PARAM_INT);
            
            // Execute the query
            $query->execute();
            
            // Fetch one result (since we're expecting a single complaint response)
            $result = $query->fetch(PDO::FETCH_ASSOC);
    
            // Check if we have a result
            if ($result) {
                return $result; // Return the complaint response data as an associative array
            } else {
                return null; // No result found
            }
    
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage()); // Handle database errors
        }
    }
    
    /*public function showmessage($id)
    {
    $sql = "SELECT * FROM formulaire WHERE id_form = :id"; // Use prepared statements for security
    $db = config::getConnexion();
    try {
        $query = $db->prepare($sql);
        $query->execute(['id' => $id]);
        return $query->fetch(PDO::FETCH_ASSOC); // Return single complaint details
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
    }

*/
function mime_content_type_from_binary($binaryData) {
    // Optionally, use finfo to determine MIME type
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mimeType = finfo_buffer($finfo, $binaryData);
    finfo_close($finfo);
    return $mimeType;
}
}
?>
