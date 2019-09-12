<?php


namespace Parser\Models;

use Parser\AbstractClasses\Entity;

/**
 * Class Product
 * @package Models
 */
class Product extends Entity
{
    /**
     * @var String $name
     */
    protected $name;

    /**
     * @var Float $calories
     */
    protected $calories;

    /**
     * @var Float $squirrels
     */
    protected $squirrels;

    /**
     * @var Float $fats
     */
    protected $fats;

    /**
     * @var Float $carbohydrates
     */
    protected $carbohydrates;

    /**
     * @var Float $alimentaryFiber
     */
    protected $alimentaryFiber;

    /**
     * @var Float $water
     */
    protected $water;

    /**
     * Additional attributes for products. For example, vitamins or minerals
     * @var array $additional
     */
    protected $additional;

    protected $fillable = ["name", "calories", "squirrels", "fats", "carbohydrates", "alimentaryFiber", "water", "additional"];

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
}