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
     * @var String $link
     */
    protected $link;

    /**
     * @var String $name
     */
    protected $name;

    /**
     * @var Integer $category_id
     */
    protected $category_id;

    /**
     * Attributes for products. For example, vitamins or minerals
     * @var array $attributes
     */
    protected $attributes;

    protected $fillable = ["name", "category_id", "attributes"];

    /**
     * @return String
     */
    public function getLink(): String
    {
        return $this->link;
    }

    /**
     * @param String $link
     * @return Product
     */
    public function setLink(String $link)
    {
        $this->link = $link;
        return $this;
    }

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
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->category_id;
    }

    /**
     * @param int $category_id
     * @return Product
     */
    public function setCategoryId(int $category_id)
    {
        $this->category_id = $category_id;
        return $this;
    }

    /**
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @param string $attributes
     * @return Product
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
        return $this;
    }
}