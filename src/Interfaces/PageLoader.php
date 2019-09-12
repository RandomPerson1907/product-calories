<?php

namespace Interfaces;

interface PageLoader
{
    public function loadPage($url);
    public function getPage();
}