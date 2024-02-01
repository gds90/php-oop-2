<?php
// dichiaro la sottoclasse Gioco, figlia della classe Prodotto
class Gioco extends Prodotto
{
    public $made_for;
    public $made_of;

    // costruttore della sottoclasse Gioco
    function __construct(String $_brand, Float $_price, String $_image, Categoria $_category, String $_description, String $_made_for, String $_made_of)
    {
        parent::__construct($_brand, $_price, $_image, $_category, $_description);
        $this->made_for = $_made_for;
        $this->made_of = $_made_of;
    }
}
