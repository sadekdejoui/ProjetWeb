<?php
include(__DIR__ . '/../config.php');//bech torbet mabin ficihier : eli fihom connexion ala base
include(__DIR__ . '/../model/utili.php');//bech torbet mabin ficihier : eli fihom class    


class utilisateur_controller{

    public function listUsers($email){
        $sql = "SELECT * FROM utilisateur WHERE email = :email"; // Assuming a table named 'utilisateur'
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } 
        catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

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

    public function addUser($user){
        $sql = "INSERT INTO utilisateur (prenom, nom, tel, email, psw, tyype, date_nai, date_entre, date_insc, date_mise)
                VALUES (:prenom, :nom, :tel, :email, :psw, :tyype, :date_nai, :date_entre, :date_insc, :date_mise)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
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

    public function updateSelectedFields($user,$id){
        $sql = "UPDATE utilisateur SET 
                nom = :nom, 
                prenom = :prenom, 
                tel = :phone, 
                email = :email, 
                psw = :passsword, 
                date_nai = :date_naissance, 
                date_entre = :date_entre, 
                date_insc = :date_insc, 
                date_mise = :date_mise 
                WHERE id = :id";

        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'id' => $user->getId(),
                'nom' => $user->getNom(),
                'prenom' => $user->getPrenom(),
                'phone' => $user->getPhone(),
                'email' => $user->getEmail(),
                'password' => $user->getPassword(),
                'date_naissance' => $user->getDateNaissance()?->format('Y-m-d'),
                'date_entre' => $user->getDateEntre()?->format('Y-m-d'),
                'date_insc' => $user->getDateInsc()?->format('Y-m-d'),
                'date_mise' => $user->getDateMise()?->format('Y-m-d'),
            ]);
            echo "User updated successfully!";
        } 
        catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function updateSelectedFields2($user,$id){
        $sql = "UPDATE utilisateur SET 
                nom = :nom, 
                prenom = :prenom, 
                tel = :phone, 
                email = :email, 
                psw = :passsword, 
                date_nai = :date_naissance, 
                date_mise = :date_mise 
                WHERE id = :id";

        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'id' => $user->getId(),
                'nom' => $user->getNom(),
                'prenom' => $user->getPrenom(),
                'phone' => $user->getPhone(),
                'email' => $user->getEmail(),
                'password' => $user->getPassword(),
                'date_naissance' => $user->getDateNaissance()?->format('Y-m-d'),
                'date_mise' => $user->getDateMise()?->format('Y-m-d'),
            ]);
            echo "User updated successfully!";
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
    
    
}









