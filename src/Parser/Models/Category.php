<?php


namespace Parser\Models;


use Parser\Interfaces\Entity;
use Parser\Traits\DatabaseTrait;

/**
 * Class Category
 * @package Models
 */
class Category implements Entity
{
    use DatabaseTrait;

    /**
     * @var String $name
     */
    private $name;

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
     * Function for saving category in database
     */
    public function save()
    {
        // TODO: Implement save() method.
    }
}