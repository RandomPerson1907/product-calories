<?php

namespace Parser;

use Parser\Classes\CategoriesParser;
use Parser\Classes\Database;
use Parser\Classes\PageLoader;
use Parser\Classes\ProductsParser;
use Parser\Models\Product;

class Application
{
    public function run()
    {
        $categoriesParser = new CategoriesParser();
        $productsParser = new ProductsParser();

        Database::connect(DB_HOST, DB_NAME, DB_USER, DB_PASSWORD, DB_CHARSET);

        foreach ($categoriesParser->getCategories(PAGE_WITH_CATEGORIES) as $category) {
            $category->save(DB_CATEGORIES_TABLE);

            foreach ($productsParser->getProducts($category->getLink()) as $product) {
                $product->setCategoryId($category->getId());
                $product->save(DB_PRODUCTS_TABLE);

                dd($product);
            }
        }
    }
}