<?php

declare(strict_types=1);

namespace GPI;

use GPI\Service;

class Controller
{
    public Service $appService;

    public function __construct(Service $appService){
        $this->appService = $appService;
    }

    public function homeViewController():string
    {
       
        //echo "<pre>" . print_r($this->appService->loadProducts(), true) . "</pre>";
        $productsArr = $this->appService->loadProducts();

        ob_start();
        require_once GPI_PROJECT_ROOT_FOLDER_URI . "/views/pages/home.php";
        return ob_get_clean();
    }

    public function basketViewController():string
    {
        ob_start();
        require_once GPI_PROJECT_ROOT_FOLDER_URI . "/views/pages/basket.php";
        return ob_get_clean();
    }

}
