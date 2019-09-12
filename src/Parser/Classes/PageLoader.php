<?php


namespace Parser\Classes;


use Sunra\PhpSimple\HtmlDomParser;

class PageLoader implements \Parser\Interfaces\PageLoader
{
    private $page;

    public function getPage()
    {
        return $this->page;
    }

    public function load($link)
    {
        try {
            $this->page = HtmlDomParser::file_get_html($link, false, null, 0);
        } catch (\Exception $e) {
            throw new \Exception("Couldn`t load page {$link}");
        }
    }
}