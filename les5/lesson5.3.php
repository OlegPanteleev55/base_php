<?php

//Разработайте механизм корзины интернет-магазина. Реализуйте класс продукта (Product) со свойствами title (string), price (float) и components (массив объектов Product), и соответствующие методы для взаимодействия со свойствами. Свойство components служит для реализации товара-наборов (например, комплект клавиатура+мышь) и в случае, если экземпляр содержит компоненты, стоимость этого комплекта должна быть равна сумме стоимостей её компонентов. Разработайте класс корзины (Cart) с методами для добавления, удаления товаров, а также с методом вычисления полной стоимости корзины, с учётом того, что некоторые товары могут представлять из себя комплекты других товаров.

class Product
{
    private string $title;
    private float $price;
    private array $components;

    public function __construct(string $title, float $price = 0.0)
    {
        $this->title = $title;
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function addComponent(Product $product): void
    {
        $this->components[] = $product;
        $this->calcPrice();
    }

    private function calcPrice(): void
    {
        $sum = 0.0;
        foreach ($this->components as $component) {
            $sum += $component->getPrice();
        }
        $this->price = $sum;
    }
}


class Cart
{
    private array $products;

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }

    public function deleteProduct(string $productTitle): void
    {
        foreach ($this->products as $key => $product) {
            if ($product->getTitle() === $productTitle) {
                unset($this->products[$key]);
            }
        }
    }

    public function getFullPrice(): float
    {
        $sum = 0.0;
        foreach ($this->products as $product) {
            $sum += $product->getPrice();
        }
        return $sum;
    }
}

$telephone = new Product('Телефон', 59.99);
$headphones = new Product('Наушники', 14.99);
$collection = new Product('Комплект');
$collection->addComponent($telephone);
$collection->addComponent($headphones);

$cart = new Cart();
$cart->addProduct($headphones);
echo 'Наушники добавлены в корзину ' . $cart->getFullPrice() . PHP_EOL;

$cart->addProduct($telephone);
echo 'Телефон добавлен в корзину ' . $cart->getFullPrice() . PHP_EOL;

$cart->deleteProduct($headphones->getTitle());
echo 'Наушники убраны из корзины ' . $cart->getFullPrice() . PHP_EOL;

$cart->addProduct($collection);
echo 'Набор добавлен в корзину ' . $cart->getFullPrice() . PHP_EOL;