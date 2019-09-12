<?php


namespace Parser\Classes;


use Parser\Models\Category;

class CategoriesParser extends Parser implements \Parser\Interfaces\CategoriesParser
{
    private $categoryBlock;

    public function getCategories(String $link)
    {
        try {
            $pageLoader = new PageLoader();
            $pageLoader->load($link);
            $page = $pageLoader->getPage();

            return $this->processPage($page);
        } catch (\Exception $e) {
            print $e->getMessage();
            return [];
        }
    }

    public function getCategoryName()
    {
        if ($name = $this->categoryBlock->find(CATEGORY_NAME_SELECTOR)) {
            return trim($this->categoryBlock->find(CATEGORY_NAME_SELECTOR)[0]->plaintext);
        } else {
            throw new \Exception("Couldn`t find category name");
        }
    }

    public function getCategoryLink()
    {
        if ($link = $this->categoryBlock->find(CATEGORY_LINK_SELECTOR)) {
            return SITE_TO_PARSE . trim($this->categoryBlock->find(CATEGORY_LINK_SELECTOR)[0]->href);
        } else {
            throw new \Exception("Couldn`t find category link");
        }
    }

    private function processPage($page)
    {
        $categories = [];
        foreach ($page->find(CATEGORY_BLOCK_SELECTOR) as $this->categoryBlock) {
            $category = new Category();
            $category
                ->setName($this->getCategoryName())
                ->setLink($this->getCategoryLink());

            $categories[] = $category;
        }

        return $categories;
    }
}