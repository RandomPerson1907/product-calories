<?php

namespace Parser;

use Parser\Classes\CategoriesParser;
use Parser\Classes\PageLoader;
use Parser\Classes\ProductsParser;
use Parser\Models\Product;

class Application
{
    /**
     * @var string
     */
    private $output = [];

    public function run()
    {
        $pageLoader = new PageLoader();
        $categoriesParser = new CategoriesParser();
        $productsParser = new ProductsParser();

        $pageLoader->load(PAGE_WITH_CATEGORIES);

        if (!$pageLoader->getLoadResult()) {
            $this->output[] = "Couldn`t page with categories";
        }

        try {
            foreach ($categoriesParser->getCategories() as $category) {
                foreach ($productsParser->getProducts() as $product) {
                    dd($product);
                }
            }
        } catch (\Exception $e) {
            $this->output[] = "Something went wrong. {$e->getMessage()}";
        }
    }

    public function output()
    {
        print "<pre>" . implode((array)$this->output, "\n") . "</pre>";
    }
}