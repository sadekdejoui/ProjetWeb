<?php
include(__DIR__ . '/../config.php');//bech torbet mabin ficihier : eli fihom connexion ala base
include(__DIR__ . '/../model/utili.php');//bech torbet mabin ficihier : eli fihom class    


class utilisateur_controller{

    public function listUsers2(){
        $sql = "SELECT * FROM utilisateur"; // Assuming a table named 'utilisateur'
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } 
        catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    public function listUsers($id) {
        $sql = "SELECT * FROM utilisateur WHERE id = :id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute(['id' => $id]);
            $user = $query->fetch(PDO::FETCH_ASSOC);  // Ensure associative array
            if (!$user) {
                return null; // No user found
            }
            return $user;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function showUser($email) {
        $sql = "SELECT * FROM utilisateur WHERE email = :email";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute(['email' => $email]);
            $user = $query->fetch(PDO::FETCH_ASSOC);  // Ensure associative array
            if (!$user) {
                return null; // No user found
            }
            return $user;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function getLastUserId() {
        // RED: SQL query to get the last user ID
        $sql = "SELECT id FROM utilisateur ORDER BY id DESC LIMIT 1";
        
        // RED: Get the database connection
        $db = config::getConnexion();
        
        try {
            // RED: Prepare the query
            $query = $db->prepare($sql);
            
            // RED: Execute the query
            $query->execute();
            
            // RED: Fetch the result as an associative array
            $result = $query->fetch(PDO::FETCH_ASSOC); 
            
            // RED: If no result is found, return 0
            if (!$result) {
                return 0; // No users found, return 0
            }
            
            // RED: Return the last user ID
            return $result['id'];
            
        } catch (Exception $e) {
            // RED: Handle any potential errors by displaying the exception message
            die('Error: ' . $e->getMessage());
        }
    }

    public function checkEmailExists($email) {
        // RED: SQL query to check if the email exists in the database
        $sql = "SELECT COUNT(*) AS count FROM utilisateur WHERE email = :email";
        
        // RED: Get the database connection
        $db = config::getConnexion();
        
        try {
            // RED: Prepare the query
            $query = $db->prepare($sql);
            
            // RED: Execute the query with the email parameter
            $query->execute(['email' => $email]);
            
            // RED: Fetch the count result
            $result = $query->fetch(PDO::FETCH_ASSOC);
            
            // RED: Return true if the count is greater than 0, otherwise false
            return $result['count'] > 0;
            
        } catch (Exception $e) {
            // RED: Handle any potential errors by displaying the exception message
            die('Error: ' . $e->getMessage());
        }
    }    

    public function addUser($user){
        $sql = "INSERT INTO utilisateur (id, prenom, nom, tel, email, psw, tyype, date_nai, date_entre, date_insc, date_mise)
                VALUES (:id, :prenom, :nom, :tel, :email, :psw, :tyype, :date_nai, :date_entre, :date_insc, :date_mise)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'id' => $user->getId(),
                'prenom' => $user->getPrenom(),
                'nom' => $user->getNom(),
                'tel' => $user->getTel(),
                'email' => $user->getEmail(),
                'psw' => $user->getPsw(),
                'tyype' => $user->gettyype(), 
                'date_nai' => $user->getDate_nai()?->format('Y-m-d'),
                'date_entre' => $user->getDate_entre()?->format('Y-m-d'),
                'date_insc' => $user->getDate_insc()?->format('Y-m-d'),
                'date_mise' => $user->getDate_mise()?->format('Y-m-d'),
            ]);
        } 
        catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function updateSelectedFields($user, $email2) {
        // Only update the fields you need
        $sql = "UPDATE utilisateur SET 
                    prenom = :prenom,
                    nom = :nom,  
                    tel = :tel, 
                    psw = :psw, 
                    date_nai = :date_nai, 
                    date_mise = :date_mise
                WHERE email = :email2";
    
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'prenom' => $user->getPrenom(),
                'nom' => $user->getNom(),
                'tel' => $user->getTel(),
                'psw' => $user->getPsw(),
                'date_nai' => $user->getDate_nai()?->format('Y-m-d'),
                'date_mise' => $user->getDate_mise()?->format('Y-m-d'),
                'email2' => $email2 // Add this missing parameter
            ]);
        } 
        catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function updateSelectedFields2($user, $email2) {
        // Only update the fields you need
        $sql = "UPDATE utilisateur SET 
                    prenom = :prenom,
                    nom = :nom,  
                    tel = :tel, 
                    psw = :psw, 
                    date_nai = :date_nai, 
                    date_entre = :date_entre,
                    date_insc = :date_insc,
                    date_mise = :date_mise
                WHERE email = :email2";
    
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'prenom' => $user->getPrenom(),
                'nom' => $user->getNom(),
                'tel' => $user->getTel(),
                'psw' => $user->getPsw(),
                'date_nai' => $user->getDate_nai()?->format('Y-m-d'),
                'date_entre' => $user->getDate_entre()?->format('Y-m-d'),
                'date_insc' => $user->getDate_insc()?->format('Y-m-d'),
                'date_mise' => $user->getDate_mise()?->format('Y-m-d'),
                'email2' => $email2 // Add this missing parameter
            ]);
        } 
        catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    
    public function deleteUtilisateur($id){
        $sql = "DELETE FROM utilisateur WHERE id = :id";

        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->bindValue(':id', $id, PDO::PARAM_INT);
            $query->execute();
            echo "User deleted successfully!";
        } 
        catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }   

    public function updateUserIds($deletedId) {
        // SQL query to update the IDs of all users with an ID greater than the deleted user's ID
        $sql = "UPDATE utilisateur SET id = id - 1 WHERE id > :deletedId";
    
        $db = config::getConnexion(); // Get database connection
        try {
            // Prepare the query
            $query = $db->prepare($sql);
    
            // Bind the deleted user's ID to the query
            $query->bindValue(':deletedId', $deletedId, PDO::PARAM_INT);
    
            // Execute the query to update the IDs
            $query->execute();
            
            echo "User IDs updated successfully!";
        } 
        catch (Exception $e) {
            // Handle any errors
            echo 'Error: ' . $e->getMessage();
        }
    }
    
}









