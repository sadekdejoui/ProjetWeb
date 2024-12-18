<?php
class module
{
    private  $id_module ;
    private  $title;
    private  $description;
    private  $duration ;
    private  $id;
    private  $category;
    public function __construct($title, $description, $duration,$id,$category)
    {
        $this->title = $title;
        $this->description = $description;
        $this->duration = $duration;
        $this->idcourse = $id;
        $this->category= $category;
    }

    public function getID_MODULE()
    {
        return $this->id_module;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
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

    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration($duration)
    {
        $this->duration = $duration;
        return $this;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }
}
?>
