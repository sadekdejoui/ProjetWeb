<?php

class Article
{
    private $titre;
    private $contenu;
    private $auteur;
    private $image; // Ajout de la propriété image
    private $nombre_Vues; // Ajout de la propriété nombre de vues


    // Constructeur pour initialiser l'article
    public function __construct($titre, $contenu, $auteur, $image=null, $nombre_vues=0)
    {
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->auteur = $auteur;
        $this->image = $image;
        $this->nombre_Vues = $nombre_Vues; // Initialisation du nombre de vues

        
    }

    // Getters pour accéder aux propriétés
    public function getTitre()
    {
        return $this->titre;
    }

    public function getContenu()
    {
        return $this->contenu;
    }

    public function getAuteur()
    {
        return $this->auteur;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function getNombreDeVues()
    {
        return $this->nombreDeVues; // Getter pour le nombre de vues
    }

    // Méthode pour incrémenter le nombre de vues
    public function incrementerVues()
    {
        $this->nombreDeVues++;
    }
}
?>
