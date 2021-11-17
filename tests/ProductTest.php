<?php

use app\models\entities\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    /**
     * @dataProvider providerGetSet
     */
    public function testGetSet($title)
    {
        $product = new Product();
        $product->title = $title;
        $this->assertEquals($title, $product->title);
    }

    public function providerGetSet()
    {
        return array (
            array ("Чай"),
            array (null)
        );
    }


    public function testAttributeProps()
    {
        $this->assertClassHasAttribute("props", Product::class);

        $product = new Product();
        $this->assertContainsOnly('boolean', $product->props);
        $this->assertContainsEquals(false, $product->props);
    }

    public function testCreateProduct()
    {
        $title = "Пицца";
        $price = 23;
        $description = "Вкусная";
        $image = "123.jpg";
        $category_id = 1;

        $product = new Product($title, $price, $description, $image, $category_id);

        $this->assertEquals($title, $product->title);
        $this->assertEquals($price, $product->price);
        $this->assertEquals($description, $product->description);
        $this->assertEquals($image, $product->image);
        $this->assertEquals($category_id, $product->category_id);
    }
}