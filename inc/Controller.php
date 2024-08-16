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
       
        $productsArr = $this->appService->loadProducts();
        $categoriesArr = $this->appService->getCategories();
        $basketItemsCount = $this->appService->getBasketCount();
        $basketItemsIdsString = $this->appService->getBasketItemsIds();

        if(isset($_GET['subcat'])){
            $productsArr = $this->appService->getByCategory($_GET['subcat']);
        }else if(isset($_GET['isDiscounted'])){
            $productsArr = $this->appService->getDiscountedProducts();
        }else if(isset($_GET['isNew'])){
            $productsArr = $this->appService->getNewProducts();
        }

        ob_start();
        require_once GPI_PROJECT_ROOT_FOLDER_URI . "/views/pages/home.php";
        return ob_get_clean();
    }

    public function basketViewController():string
    {

        $basketItemsCount = $this->appService->getBasketCount();
        $basketItemsIdsString = $this->appService->getBasketItemsIds();

        $productsArr = $this->appService->getBasketProducts($basketItemsIdsString);
        $productsArr = $this->appService->aggregateProductQuantities($productsArr);
        $basketTotal = $this->appService->getBasketTotal($productsArr);

        ob_start();
        require_once GPI_PROJECT_ROOT_FOLDER_URI . "/views/pages/basket.php";
        return ob_get_clean();
    }

    public function cardAdditionToBasket():string
    {

        if(!isset($_GET['newCard']) || !$_GET['newCard']) exit;
        return json_encode($this->appService->updateSession('basket', $_GET['newCard']));
    }
    public function cardRemovalFromBasket():string
    {

        if(!isset($_GET['cardToRemove']) || !$_GET['cardToRemove']) return '';
        return json_encode($this->appService->removeFromSession('basket', $_GET['cardToRemove']));
    }

}
