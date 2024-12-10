<?php
class Course
{
    private  $idCourse ;
    private  $title;
    private  $category;
    private  $price;
    private  $duration ;
    private  $description;
    private $id_module;

    public function __construct($id, $title, $category, $price, $duration,$description,$id_module)
    {
        $this->idCourse = $id;
        $this->title = $title;
        $this->category = $category;
        $this->price = $price;
        $this->duration = $duration;
        $this->description = $description;
        $this->id_module = $id_module;
    }

    public function getIdCourse()
    {
        return $this->idCourse;
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

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
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
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
    public function getIdModule()
    {
        return $this->id_module;
    }

    public function setIdModule($id_module)
    {
        $this->id_module = $id_module;
    }
}
?>
