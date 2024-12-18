<?php

class Formulaire
{
    private ?int $id = null;  // Unique ID for the complaint
    private ?string $nom = null;  // Name of the complainant
    private ?string $identifiant = null;  // ID (could be student ID or similar)
    private ?string $email = null;  // Email of the complainant
    private ?string $telephone = null;  // Phone number
    private ?string $type_reclamation = null;  // Type of complaint
    private ?string $prof = null;  // Teacher's name (optional, only for complaints about professors)
    private ?string $service = null;  // Course or service concerned (optional)
    private ?string $description = null;  // Detailed description of the complaint
    private ?int $urgent = null;  // Urgent status (1 if urgent, 0 if not)
    private ?array $files = null;  // File paths of the uploaded files

    // Constructor to initialize the properties
    public function __construct($id = null, $nom, $identifiant, $email, $telephone, $type_reclamation, $prof = null, $service = null, $description, $urgent, $files = [])
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->identifiant = $identifiant;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->type_reclamation = $type_reclamation;
        $this->prof = $prof;
        $this->service = $service;
        $this->description = $description;
        $this->urgent = $urgent;
        $this->files = $files;
    }

    // Getter and setter methods for each property

    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }

    public function getTypeReclamation()
    {
        return $this->type_reclamation;
    }

    public function setTypeReclamation($type_reclamation)
    {
        $this->type_reclamation = $type_reclamation;
        return $this;
    }

    public function getProf()
    {
        return $this->prof;
    }

    public function setProf($prof)
    {
        $this->prof = $prof;
        return $this;
    }

    public function getService()
    {
        return $this->service;
    }

    public function setService($service)
    {
        $this->service = $service;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function getUrgent()
    {
        return $this->urgent;
    }

    public function setUrgent($urgent)
    {
        $this->urgent = $urgent;
        return $this;
    }

    public function getFiles()
    {
        return $this->files;
    }

    public function setFiles($files)
    {
        $this->files = $files;
        return $this;
    }
}
?>
