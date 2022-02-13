<?php
namespace App\classes;
class Product
{
    protected $products = [];
    public function getAllProduct(){

        return [
            0 => [
                'id'            => '1',
                'name'          => 'Shirt',
                'description'   => 'Blog Description',
                'price'         => '1000 tk',
                'image'         => 'ss3.jpg',
                'brand'         => 'Easy',
                'category'      => 'Men'
            ],
            1 => [
                'id'            => '2',
                'name'          => 'Key Ring',
                'description'   => 'Blog Description',
                'price'         => '1500 tk',
                'image'         => 'ss5.jpg',
                'brand'         => 'Cactus',
                'category'      => 'Men'
            ],
            2 => [
                'id'            => '3',
                'name'          => 'Zippo Lighter',
                'description'   => 'Blog Description',
                'price'         => '2300 tk',
                'image'         => 'ss4.jpg',
                'brand'         => 'EASY',
                'category'      => 'Electroics'
            ],
            3 => [
                'id'            => '4',
                'name'          => 'Shoes',
                'description'   => 'Blog Description',
                'price'         => '3000 tk',
                'image'         => 'ss8.jpg',
                'brand'         => 'Apex',
                'category'      => 'Men'
            ],
        ];
    }
    public function getProductById($id){

        $this->products = $this->getAllProduct();
        foreach ($this->products as $product){

            if ($product['id'] == $id){
                return $product;
            }
        }
    }
}