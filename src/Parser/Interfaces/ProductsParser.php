<?php


namespace Parser\Interfaces;


interface ProductsParser
{
    public function getProducts(String $link);
    public function getProductLink();
    public function getProductName();
    public function getProductCalories();
    public function getProductSquirrels();
    public function getProductFats();
    public function getProductCarbohydrates();
    public function getProductAlimentaryFiber();
    public function getProductWater();
    public function getProductAdditionalAttributes();
}