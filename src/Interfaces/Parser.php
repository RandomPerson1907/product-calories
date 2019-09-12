<?php


namespace App\Interfaces;


interface Parser
{
    public function getElementsByClass($class);
    public function getFirstElementByClass($class);

    public function getElementsByTag($tag);
    public function getFirstElementByTag($tag);
}