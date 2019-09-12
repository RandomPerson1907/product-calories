<?php


namespace Parser\Models;


use Parser\AbstractClasses\Entity;

/**
 * Class Category
 * @package Models
 */
class Category extends Entity
{
    /**
     * @var String $name
     */
    protected $name;

    /**
     * @var String $link
     */
    protected $link;

    protected $fillable = ["name"];

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return String
     */
    public function getLink(): String
    {
        return $this->link;
    }

    /**
     * @param String $link
     * @return Category
     */
    public function setLink(String $link)
    {
        $this->link = $link;
        return $this;
    }
}