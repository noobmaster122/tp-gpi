<?php

declare(strict_types=1);

namespace GPI;

use GPI\Model;

class Service
{
    public Model $productModel;
    public SessionModel $sessionModel;

    public function __construct(Model $productModel, SessionModel $sessionModel)
    {
        $this->productModel = $productModel;
        $this->sessionModel = $sessionModel;
    }

    public function loadProducts(): array
    {
        return $this->productModel->loadProducts();
    }

    public function getCategories():array
    {
        return $this->productModel->getCategories($this->loadProducts());
    }

    public function getByCategory(string $cat):array
    {
        return $this->productModel->getByCategory($cat);
    }

    public function getDiscountedProducts():array
    {
        return $this->productModel->getByDiscount();
    }
    public function getNewProducts():array
    {
        return $this->productModel->getByNew();
    }

    public function getBasketProducts(string $productsIds):array
    {
        $productsIdsArr = explode(",", $productsIds);
        $basketProductsArr = [];
        foreach($productsIdsArr as $productId){
            $targetProductObjetOrNull = $this->productModel->getById($productId);

            if($targetProductObjetOrNull)
                $basketProductsArr[] = $this->productModel->getById($productId);
        }
        return $basketProductsArr;
    }

    public function removeFromSession(string $key, string $value):array
    {
        $this->sessionModel->removeFromArray($key, $value);
        return $this->sessionModel->get($key);
    }

    public function updateSession(string $key, string $value):array
    {
        $this->initSession($key);

        $this->sessionModel->pushToArray($key, $value);
        return $this->sessionModel->get($key);
    }

    private function initSession(string $key):array
    {
        if(!$this->sessionModel->get($key)){
            $this->sessionModel->set($key, []);
        }
        return $this->sessionModel->get($key);
    }

    public function getBasketCount():int
    {
        return count($this->initSession('basket'));
    }

    public function getBasketTotal(array $products):float
    {
        $total = 0;
        foreach($products as $product){
            if($product->isDiscounted){
                $total += $product->discountedPrice * $product->quantity;
            }else{
                $total += $product->originalPrice * $product->quantity;
            }
        }
        return $total;
    }

    public function getBasketItemsIds():string
    {
        return implode(',', $this->initSession('basket'));
    }

    function aggregateProductQuantities(array $productsArr):array
    {
        $result = [];
    
        foreach ($productsArr as $product) {
            $id = $product->id;
            $quantity = isset($product->quantity) ? $product->quantity : 1;
    
            if (isset($result[$id])) {
                $result[$id]->quantity += $quantity;
            } else {
                $result[$id] = clone $product;
                $result[$id]->quantity = 1;
            }
        }
    
        return array_values($result);
    }

    public function updateProductQtInBasket(string $productId, int $quantity):array
    {
        return $this->sessionModel->updateProductQuantity( $productId, $quantity);
    }


}
