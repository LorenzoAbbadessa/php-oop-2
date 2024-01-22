

<?php

require_once __DIR__ . '/Prodotto.php';
require_once __DIR__ . '/Disponibilità.php';
class Gioco extends Prodotto
{
    public $description;
    public $color;

    public function __construct($image, $title, $price, Category $category, $description, $color,  $availability = null)
    {
        parent::__construct($image, $title, $price, $category);
        $this->description = $description;
        $this->color = $color;
    }
}
