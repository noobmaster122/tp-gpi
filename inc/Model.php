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
    public int $rating;


    public function loadProducts():array
    {
        $jsonString = file_get_contents(GPI_PROJECT_ROOT_FOLDER_URI . "/inc/db.json");
        $data = json_decode($jsonString, true); 

        $products = [];
        foreach($data["products"] ?? [] as $id => $d){
            $newProduct = new self();
            $newProduct->id= $id;
            $newProduct->isDiscounted= $d['isDiscounted'];
            $newProduct->isNew= $d['isNew'];

            $newProduct->imageUrl= $d['imageUrl'];
            $newProduct->title= $d['title'];
            $newProduct->originalPrice= $d['originalPrice'];
            $newProduct->discountedPrice= $d['discountedPrice'];
            $newProduct->rating= $d['rating'];

            $products[] = $newProduct;
        }
        return $products;
    }

}
