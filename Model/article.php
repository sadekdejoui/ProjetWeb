<?php

class Article
{
    private $titre;
    private $contenu;
    private $auteur;

    // Constructeur pour initialiser l'article
    public function __construct($titre, $contenu, $auteur)
    {
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->auteur = $auteur;
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
}
?>
