

<?php

require_once __DIR__ . '/Prodotto.php';
require_once __DIR__ . '/Disponibilità.php';

class Cibo extends Prodotto
{
    public $description;
    public $weight;

    public function __construct($image, $title, $price, Category $category, $description, $weight, $availability = null)
    {
        parent::__construct($image, $title, $price, $category);
        $this->description = $description;
        $this->weight = $weight;
    }
}
