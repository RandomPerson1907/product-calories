<?php


namespace Parser\Classes;


use Parser\Models\Product;

class ProductsParser extends Parser implements \Parser\Interfaces\ProductsParser
{
    private $productBlock;
    /**
     * @var Product
     */
    private $productPage;

    public function getProducts(String $link)
    {
        try {
            $pageLoader = new PageLoader();
            $pageLoader->load($link);
            $page = $pageLoader->getPage();

            if (!$page)
                throw new \Exception("Couldn`t load page {$link}");

            return $this->processPage($page);
        } catch (\Exception $e) {
            print $e->getMessage();
            return [];
        }
    }

    private function processPage($page)
    {
        $products = [];

        foreach ($page->find(PRODUCT_BLOCK_SELECTOR) as $this->productBlock) {
            $pageLoader = new PageLoader();
            $pageLoader->load($this->getLink());
            $this->productPage = $pageLoader->getPage();

            $product = new Product();
            $product
                ->setName($this->getName())
                ->setAttributes($this->getAttributes())
                ->setLink($this->getLink());

            $products[] = $product;
        }

        return $products;
    }

    public function getLink()
    {
        return SITE_TO_PARSE . trim($this->productBlock->href);
    }

    public function getName()
    {
        if ($name = $this->productPage->find(PRODUCT_NAME_SELECTOR)[0]->first_child()) {
            return trim($name->plaintext);
        } else {
            throw new \Exception("Couldn`t find product name");
        }
    }

    public function getAttributes()
    {
        $i = 0;
        $attributes = [];
        foreach ($this->productPage->find(PRODUCT_ATRIBUTE_SELECTOR) as $attribute) {
            $i++;
            if ($i == 1)
                continue;

            $attributes[trim($attribute->find("td")[1]->plaintext)] = [
                "value" => (float)trim(explode(" ", $attribute->find("td")[2]->plaintext)[0]),
                "valueWithUnit" => trim($attribute->find("td")[2]->plaintext)
            ];
        }

        return json_encode($attributes);
    }
}