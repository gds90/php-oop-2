<?php
// dichiaro la sottoclasse Cibo, figlia della classe Prodotto
class Cibo extends Prodotto
{
    public $type_of_food;
    public $taste;

    // costruttore della sottoclasse Cibo
    function __construct(String $_brand, Float $_price, String $_image, Categoria $_category, String $_description, String $_type_of_food, String $_taste)
    {
        parent::__construct($_brand, $_price, $_image, $_category, $_description);
        $this->type_of_food = $_type_of_food;
        $this->taste = $_taste;
    }
}
