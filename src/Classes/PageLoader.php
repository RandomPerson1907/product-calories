<?php


namespace App\Classes;


use Sunra\PhpSimple\HtmlDomParser;

class PageLoader implements \App\Interfaces\PageLoader
{
    private $page;
    private $loadResult;

    public function getPage()
    {
        return $this->page;
    }

    public function getLoadResult()
    {
        return $this->loadResult;
    }

    public function load($url)
    {
        try {
            $this->page = $this->page = HtmlDomParser::file_get_html($url, false, null, 0);
            $this->loadResult = true;
        } catch (\Exception $e) {
            $this->page = false;
            $this->loadResult = false;
        }
    }
}