<?php


namespace Parser\Models;

use Parser\Interfaces\Entity;
use Parser\Traits\DatabaseTrait;

/**
 * Class Product
 * @package Models
 */
class Product implements Entity
{
    use DatabaseTrait;

    /**
     * @var String $name
     */
    private $name;

    /**
     * @var Float $calories
     */
    private $calories;

    /**
     * @var Float $squirrels
     */
    private $squirrels;

    /**
     * @var Float $fats
     */
    private $fats;

    /**
     * @var Float $carbohydrates
     */
    private $carbohydrates;

    /**
     * @var Float $alimentaryFiber
     */
    private $alimentaryFiber;

    /**
     * @var Float $water
     */
    private $water;

    /**
     * Additional attributes for products. For example, vitamins or minerals
     * @var array $additional
     */
    private $additional;

    /**
     * @return String
     */
    public function getName(): String
    {
        return $this->name;
    }

    /**
     * @param String $name
     * @return Product
     */
    public function setName(String $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Float
     */
    public function getCalories(): Float
    {
        return $this->calories;
    }

    /**
     * @param Float $calories
     * @return Product
     */
    public function setCalories(Float $calories)
    {
        $this->calories = $calories;
        return $this;
    }

    /**
     * @return Float
     */
    public function getSquirrels(): Float
    {
        return $this->squirrels;
    }

    /**
     * @param Float $squirrels
     * @return Product
     */
    public function setSquirrels(Float $squirrels)
    {
        $this->squirrels = $squirrels;
        return $this;
    }

    /**
     * @return Float
     */
    public function getFats(): Float
    {
        return $this->fats;
    }

    /**
     * @param Float $fats
     * @return Product
     */
    public function setFats(Float $fats)
    {
        $this->fats = $fats;
        return $this;
    }

    /**
     * @return Float
     */
    public function getCarbohydrates(): Float
    {
        return $this->carbohydrates;
    }

    /**
     * @param Float $carbohydrates
     * @return Product
     */
    public function setCarbohydrates(Float $carbohydrates)
    {
        $this->carbohydrates = $carbohydrates;
        return $this;
    }

    /**
     * @return Float
     */
    public function getAlimentaryFiber(): Float
    {
        return $this->alimentaryFiber;
    }

    /**
     * @param Float $alimentaryFiber
     * @return Product
     */
    public function setAlimentaryFiber(Float $alimentaryFiber)
    {
        $this->alimentaryFiber = $alimentaryFiber;
        return $this;
    }

    /**
     * @return Float
     */
    public function getWater(): Float
    {
        return $this->water;
    }

    /**
     * @param Float $water
     * @return Product
     */
    public function setWater(Float $water)
    {
        $this->water = $water;
        return $this;
    }

    /**
     * @return array
     */
    public function getAdditional(): array
    {
        return $this->additional;
    }

    /**
     * @param array $additional
     * @return Product
     */
    public function setAdditional(array $additional)
    {
        $this->additional = $additional;
        return $this;
    }

    /**
     * Function for saving product in database
     */
    public function save()
    {
        // TODO: Implement save() method.
    }
}