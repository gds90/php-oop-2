<?php
// dichiaro la sottoclasse Accessorio, figlia della classe Prodotto
class Accessorio extends Prodotto
{
    public $made_for;
    public $made_of;

    function __construct(String $_brand, Float $_price, String $_image, Categoria $_category, String $_description, String $_made_for, String $_made_of)
    {
        parent::__construct($_brand, $_price, $_image, $_category, $_description);
        $this->made_for = $_made_for;
        $this->made_of = $_made_of;
    }
}
