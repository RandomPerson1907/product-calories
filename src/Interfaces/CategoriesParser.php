<?php


namespace App\Interfaces;


interface CategoriesParser
{
    public function getCategories();
    public function getCategoryLink();
    public function getCategoryName();
}