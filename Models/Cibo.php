<?php
// dichiaro la sottoclasse Cibo, figlia della classe Prodotto
class Cibo extends Prodotto
{
    public $type_of_food;
    public $taste;

    // costruttore della sottoclasse Cibo
    function __construct($_brand, $_price, $_image, Categoria $_category, $_description, $_type_of_food, $_taste)
    {
        parent::__construct($_brand, $_price, $_image, $_category, $_description);
        $this->type_of_food = $_type_of_food;
        $this->taste = $_taste;
    }
}
