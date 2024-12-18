<?php
class NotificationC
{
    // Method to list all formulaire (optional, in case you want to display all formulaire later)
    public function showNotifUser()
    {
        $sql = "SELECT * FROM notifications WHERE sent_by=0"; // Inclusion directe de l'ID dans la requête
        $db = config::getConnexion();
        try {
            $notif = $db->query($sql); 
            // Fetch all results as associative arrays
            return $notif->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    public function showNotifUserUnseen()
    {
        $sql = "SELECT * FROM notifications WHERE sent_by=0 AND seen=0"; // Inclusion directe de l'ID dans la requête
        $db = config::getConnexion();
        try {
            $notif = $db->query($sql); 
            // Fetch all results as associative arrays
            return $notif->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    //notification ml admin
    public function showNotifAdmin()
    {
        $sql = "SELECT * FROM notifications WHERE sent_by=1"; // Inclusion directe de l'ID dans la requête
        $db = config::getConnexion();
        try {
            $notif = $db->query($sql); 
            // Fetch all results as associative arrays
            return $notif->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    public function countnotifadmin()
    {
        $sql = "SELECT COUNT(*) AS notif_count FROM notifications WHERE sent_by = 1 AND seen=0"; // Correct SQL syntax
        $db = config::getConnexion();
        try {
            $notif = $db->query($sql);
            // Fetch the single result (as associative array)
            return $notif->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    
    public function showNotifAdminUnseen()
    {
        $sql = "SELECT * FROM notifications WHERE sent_by = 1 AND seen = 0"; // Admin unseen notifications
        $db = config::getConnexion();
        try {
            $notif = $db->query($sql);
            return $notif->fetchAll(PDO::FETCH_ASSOC); // Return unseen notifications as an associative array
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    function addNotification($contenu,$id,$sent_by,$id_comp,$id_res)
    {
        $sql = "INSERT INTO notifications (id_user,contenu,sent_by,id_res,id_comp)
                VALUES (:id_user, :contenu,:sent_by,:id_res,:id_comp)";
        
        $db = config::getConnexion();
        try {
            $query = $db->prepare(query: $sql);
            $query->execute([
                'id_user' => $id,
                'contenu' => $contenu,
                'sent_by' => $sent_by,
                'id_comp'=>$id_comp,
                'id_res'=>$id_res
               
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    function SeenNotif($identifiant)
    {
        $sql = "UPDATE notifications 
                SET seen = '1'
                WHERE id_notif = :identifiant"; // Corrected syntax
        
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





    public function showNotifUserByAdmin($id_user)
{
    $sql = "SELECT * FROM notifications WHERE id_user = :id_user AND sent_by = 1";  // Filtering by admin
    $db = config::getConnexion();
    try {
        $stmt = $db->prepare($sql);
        $stmt->execute(['id_user' => $id_user]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch and return results as an associative array
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
}


}