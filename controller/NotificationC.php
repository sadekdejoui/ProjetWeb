<?php
class NotificationC
{
    // Method to list all formulaire (optional, in case you want to display all formulaire later)
    public function showNotifUser($id)
    {
        $sql = "SELECT * FROM notifications WHERE id_user = $id"; // Inclusion directe de l'ID dans la requête
        $db = config::getConnexion();
        try {
            $notif = $db->query($sql); // Exécution directe et récupération
            return $notif;
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
    function addNotification($contenu,$id,$sent_by)
    {
        $sql = "INSERT INTO notifications (id_user,contenu,sent_by)
                VALUES (:id_user, :contenu,:sent_by)";
        
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'id_user' => $id,
                'contenu' => $contenu,
                'sent_by' => $sent_by
               
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