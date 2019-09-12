<?php


namespace Parser\Interfaces;


interface CategoriesParser
{
    public function getCategories(String $link);
    public function getCategoryLink();
    public function getCategoryName();
}