<?php

class Notification
{
    private ?int $id = null;  // Unique ID for the complaint
    private ?string $contenu = null;  // Name of the complainant
    private ?int $seen = null;
    private ?int $sent_by = null;
    
    public function __construct($contenu,$sent_by)
    {
        $this->contenu = $contenu;
        $this->sent_by = $sent_by;
       
    } 
    
    public function getContenu()
    {
        return $this->contenu;
    }

    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
        return $this;
    }
    public function getseen()
    {
        return $this->seen;
    }

    public function setseen($seen)
    {
        $this->seen = $seen;
        return $this;
    } // ID (could be student ID or similar)
}