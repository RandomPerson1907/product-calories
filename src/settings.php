<?php
    ini_set("max_execution_time", 99999);

    define("SITE_TO_PARSE", "https://health-diet.ru");
    define("PAGE_WITH_CATEGORIES", "https://health-diet.ru/base_of_food/sostav/18812.php");

    define("DB_HOST", "localhost");
    define("DB_NAME", "productCalories");
    define("DB_USER", "random");
    define("DB_PASSWORD", "ksushavlad1907");
    define("DB_CHARSET", "utf8");

    define("DB_CATEGORIES_TABLE", "categories");
    define("DB_PRODUCTS_TABLE", "products");

    define("CATEGORY_BLOCK_SELECTOR", ".uk-nav .el-calorie");
    define("CATEGORY_LINK_SELECTOR", "a");
    define("CATEGORY_NAME_SELECTOR", "a");

    define("PRODUCT_BLOCK_SELECTOR", ".mzr-block-content table a");
    define("PRODUCT_LINK_SELECTOR", "a");
    define("PRODUCT_NAME_SELECTOR", "h1");
    define("PRODUCT_ATRIBUTE_SELECTOR", ".el-table tr");