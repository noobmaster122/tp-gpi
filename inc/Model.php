<?php

declare(strict_types=1);

namespace GPI;

class Model
{
    public string $id;
    public bool $isDiscounted;
    public bool $isNew;
    public string $imageUrl;
    public string $title;
    public ?string $originalPrice;
    public ?string $discountedPrice;
    public ?int $quantity;
    public string $category;
    public string $subCategory;
    public int $rating;


    public function loadProducts(): array
    {
        $jsonString = file_get_contents(GPI_PROJECT_ROOT_FOLDER_URI . "/inc/db.json");
        $data = json_decode($jsonString, true);

        $products = [];
        foreach ($data["products"] ?? [] as $id => $d) {
            $newProduct = new self();
            $newProduct->id = $id;
            $newProduct->isDiscounted = $d['isDiscounted'];
            $newProduct->isNew = $d['isNew'];
            $newProduct->imageUrl = $d['imageUrl'];
            $newProduct->title = $d['title'];
            $newProduct->originalPrice = $d['originalPrice'];
            $newProduct->discountedPrice = $d['discountedPrice'];
            $newProduct->category = $d['category'];
            $newProduct->subCategory = $d['subCategory'];
            $newProduct->rating = $d['rating'];

            $products[] = $newProduct;
        }
        return $products;
    }

    public function getCategories(array $products): array
    {

        $categories = [];

        foreach ($products as $product) {
            $category = $product->category;
            $subCategory = $product->subCategory;

            if (!isset($categories[$category])) {
                $categories[$category] = [];
            }

            if (!in_array($subCategory, $categories[$category])) {
                $categories[$category][] = $subCategory;
            }
        }

        return $categories;
    }

    public function getByCategory(string $cat):array
    {
        $productsArr = $this->loadProducts();
        return array_filter($productsArr, function($product) use ($cat) {
            return $product->subCategory === $cat;
        });
    }
    public function getByDiscount():array
    {
        $productsArr = $this->loadProducts();
        return array_filter($productsArr, function($product){
            return $product->isDiscounted === true;
        });
    }
    public function getByNew():array
    {
        $productsArr = $this->loadProducts();
        return array_filter($productsArr, function($product){
            return $product->isNew === true;
        });
    }
    public function getById(string $id):?self
    {
        $productsArr = $this->loadProducts();

        foreach ($productsArr as $product) {
            if ($product->id === $id) {
                return $product;
            }
        }
    
        return null;
    }
}
