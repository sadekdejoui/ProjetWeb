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

    public function countStudents() {
        $sql = "SELECT COUNT(*) AS student_count FROM utilisateur WHERE tyype = 'Etudiant'"; // Count students
        $db = config::getConnexion();
    
        try {
            $query = $db->query($sql); // Execute the query
            $result = $query->fetch(PDO::FETCH_ASSOC); // Fetch the result as an associative array
            return $result['student_count']; // Return the count of students
        } 
        catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    

    public function countStudents2() {
        $sql = "SELECT COUNT(*) AS student_count FROM utilisateur WHERE tyype = 'Professeur'"; // Count students
        $db = config::getConnexion();
    
        try {
            $query = $db->query($sql); // Execute the query
            $result = $query->fetch(PDO::FETCH_ASSOC); // Fetch the result as an associative array
            return $result['student_count']; // Return the count of students
        } 
        catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function countStudents3() {
        $sql = "SELECT COUNT(*) AS student_count FROM utilisateur WHERE tyype = 'Etudiant'"; // Count students
        $db = config::getConnexion();
    
        try {
            $query = $db->query($sql); // Execute the query
            $result = $query->fetch(PDO::FETCH_ASSOC); // Fetch the result as an associative array
            return $result['student_count']; // Return the count of students
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

    public function listUsersPaginated($page, $perPage, $search = '', $sort = 'nom', $order = 'asc') {
        $offset = ($page - 1) * $perPage;
    
        // Sanitize input to avoid SQL injection
        $validColumns = ['id', 'nom', 'prenom', 'email', 'date_mise', 'tyype'];
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

    public function updateUserIds($id){
        $sql = "UPDATE utilisateur 
                SET id = id - 1 
                WHERE id > :id";

        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->bindValue(':id', $id, PDO::PARAM_INT);
            $query->execute();
            return $query->rowCount(); // Return the number of rows updated
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }








































    public function logUploadActivity($userId, $action) {
        $sql = "INSERT INTO user_activity (user_id, action, timestamp, status) VALUES (:user_id, :action, NOW(), 'active')";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'user_id' => $userId,
                'action' => $action
            ]);
            return true; // Successfully logged activity
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function getUserActivityCountsByUser($userId, $startDate, $endDate) {
        $db = config::getConnexion();
        $sql = "SELECT action, COUNT(*) as count
                FROM user_activity
                WHERE user_id = :userId AND timestamp BETWEEN :startDate AND :endDate
                GROUP BY action";
        
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'userId' => $userId,
                'startDate' => $startDate,
                'endDate' => $endDate
            ]);
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function getUserActivityDetailsByUser($userId) {
        $db = config::getConnexion();
        $sql = "SELECT status 
            FROM user_activity
            WHERE user_id = :userId
            ORDER BY timestamp ASC LIMIT 1";
        
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'userId' => $userId
            ]);
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function deactivateInactiveUsers() {
        $db = config::getConnexion();
        $sql = "UPDATE user_activity ua
                JOIN (
                    SELECT user_id, MAX(timestamp) AS last_login
                    FROM user_activity
                    WHERE action = 'Logged in'
                    GROUP BY user_id
                ) AS last_activity
                ON ua.user_id = last_activity.user_id
                SET ua.status = 'desactiver'
                WHERE last_activity.last_login < NOW() - INTERVAL 2 MONTH";
    
        try {
            $query = $db->prepare($sql);
            $query->execute();
            return $query->rowCount() . " users deactivated."; // Return number of users deactivated
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function updateActionsToActiveIfLastActive() {
        $db = config::getConnexion();
    
        // Select users whose last action is 'active'
        $sql = "SELECT user_id
                FROM user_activity ua
                WHERE ua.action = 'active'
                AND ua.timestamp = (SELECT MAX(timestamp) 
                                     FROM user_activity 
                                     WHERE user_id = ua.user_id)";
        
        try {
            $query = $db->prepare($sql);
            $query->execute();
            
            $users = $query->fetchAll(PDO::FETCH_ASSOC);
            
            // Update all actions for these users to 'active'
            foreach ($users as $user) {
                $updateSql = "UPDATE user_activity
                              SET action = 'active'
                              WHERE user_id = :user_id";
                $updateQuery = $db->prepare($updateSql);
                $updateQuery->execute(['user_id' => $user['user_id']]);
            }
    
            return count($users) . " users' actions have been updated to 'active'.";
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }


    

    public function getUserActivityCount($startDate, $endDate) {
        $db = config::getConnexion();
        $sql = "SELECT action, COUNT(*) as count
                FROM user_activity
                WHERE timestamp BETWEEN :startDate AND :endDate
                GROUP BY action";
        
        try {
            $query = $db->prepare($sql);
            $query->execute([        
                'startDate' => $startDate,
                'endDate' => $endDate
            ]);
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    
    
    
    
    
    
    
    
    

   
    
}









