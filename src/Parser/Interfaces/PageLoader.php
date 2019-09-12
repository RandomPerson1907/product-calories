<?php

namespace Parser\Interfaces;

interface PageLoader
{
    public function load($link);
    public function getPage();
}