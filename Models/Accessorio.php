<?php
// dichiaro la sottoclasse Accessorio, figlia della classe Prodotto
class Accessorio extends Prodotto
{
    public $made_for;
    public $made_of;

    function __construct($_brand, $_price, $_image, Categoria $_category, $_description, $_made_for, $_made_of)
    {
        parent::__construct($_brand, $_price, $_image, $_category, $_description);
        $this->made_for = $_made_for;
        $this->made_of = $_made_of;
    }
}
