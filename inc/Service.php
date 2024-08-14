<?php

declare(strict_types=1);

namespace GPI;

use GPI\Model;

class Service
{
    public Model $productModel;

    public function __construct(Model $productModel)
    {
        $this->productModel = $productModel;
    }

    public function loadProducts(): array
    {
        return $this->productModel->loadProducts();
    }


}
