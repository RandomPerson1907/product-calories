<?php


namespace Parser\Interfaces;


interface ProductsParser
{
    public function getProducts(String $link);
    public function getLink();
    public function getName();
    public function getAttributes();
}