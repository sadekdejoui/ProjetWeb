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
        $sql = "INSERT INTO utilisateur (id, prenom, nom, tel, email, psw, tyype, date_nai, date_entre, date_insc, date_mise, photo)
                VALUES (:id, :prenom, :nom, :tel, :email, :psw, :tyype, :date_nai, :date_entre, :date_insc, :date_mise, :photo)";
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
                'photo' => $user->getPhoto(),
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
                    date_mise = :date_mise,
                    photo = :photo
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
                'photo' => $user->getPhoto(),
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
                    tyype = :tyype,
                    date_nai = :date_nai, 
                    date_entre = :date_entre,
                    date_insc = :date_insc,
                    date_mise = :date_mise,
                    photo = :photo
                WHERE email = :email2";
    
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'prenom' => $user->getPrenom(),
                'nom' => $user->getNom(),
                'tel' => $user->getTel(),
                'psw' => $user->getPsw(),
                'tyype' => $user->gettyype(),
                'date_nai' => $user->getDate_nai()?->format('Y-m-d'),
                'date_entre' => $user->getDate_entre()?->format('Y-m-d'),
                'date_insc' => $user->getDate_insc()?->format('Y-m-d'),
                'date_mise' => $user->getDate_mise()?->format('Y-m-d'),
                'photo' => $user->getPhoto(),
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

    public function getUserPhotoByEmail($email) {
        // SQL query to fetch the photo field (stored as BLOB) for the user
        $query = "SELECT photo FROM utilisateur WHERE email = :email";  // Table name updated to 'utilisateur'
        
        $db = config::getConnexion(); // Get database connection
    
        try {
            // Prepare the query
            $stmt = $db->prepare($query);
    
            // Bind the email parameter
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    
            // Execute the query
            $stmt->execute();
    
            // Fetch the binary data (photo)
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
            if ($result) {
                // Ensure that we are only returning the binary data of the image
                return $result['photo'];  // Return only the image data as string
            } else {
                return null;  // Return null if no photo is found
            }
        } 
        catch (Exception $e) {
            // Handle any errors
            echo 'Error: ' . $e->getMessage();
            return null;  // Return null in case of an error
        }
    }        
    
    public function deactivateUtilisateur($id){
        $db = config::getConnexion();

        try {
            // Step 1: Get the current minimum deactivated ID
            $sqlMinId = "SELECT MIN(id) AS min_id FROM utilisateur WHERE id >= 99999999";
            $queryMinId = $db->prepare($sqlMinId);
            $queryMinId->execute();
            $result = $queryMinId->fetch();
            
            $nextId = $result['min_id'] ? $result['min_id'] - 1 : 99999999; // Start from 99999999 if no deactivated IDs exist

            // Step 2: Update the user's ID and date_mise
            $sqlUpdate = "UPDATE utilisateur 
                        SET id = :nextId, date_mise = NOW() 
                        WHERE id = :id";
            $queryUpdate = $db->prepare($sqlUpdate);
            $queryUpdate->bindValue(':nextId', $nextId, PDO::PARAM_INT);
            $queryUpdate->bindValue(':id', $id, PDO::PARAM_INT);
            $queryUpdate->execute();

            echo "User account deactivated with ID $nextId, and date_mise updated to the current date!";
        } 
        catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function listUsersPaginated($page, $perPage, $search = '', $sort = 'nom', $order = 'asc') {
        $offset = ($page - 1) * $perPage;
    
        // Sanitize input to avoid SQL injection
        $validColumns = ['nom', 'prenom', 'email', 'date_mise'];
        $sort = in_array($sort, $validColumns) ? $sort : 'nom';
        $order = ($order === 'desc') ? 'desc' : 'asc';
    
        $sql = "SELECT * FROM utilisateur WHERE 1";
    
        if (!empty($search)) {
            $sql .= " AND (nom LIKE :search OR prenom LIKE :search OR email LIKE :search)";
        }
    
        $sql .= " ORDER BY $sort $order LIMIT :offset, :perPage";
    
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
    
            if (!empty($search)) {
                $query->bindValue(':search', '%' . $search . '%', PDO::PARAM_STR);
            }
    
            $query->bindValue(':offset', $offset, PDO::PARAM_INT);
            $query->bindValue(':perPage', $perPage, PDO::PARAM_INT);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    
    

    public function getTotalUsers($search = '') {
        $sql = "SELECT COUNT(*) AS total FROM utilisateur WHERE 1";
    
        if (!empty($search)) {
            $sql .= " AND (nom LIKE :search OR email LIKE :search)";
        }
    
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
    
            if (!empty($search)) {
                $query->bindValue(':search', '%' . $search . '%', PDO::PARAM_STR);
            }
    
            $query->execute();
            $result = $query->fetch(PDO::FETCH_ASSOC);
            return $result['total'];
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    
    
    

    
}









