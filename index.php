<?php
// dichiaro la classe Prodotto
class Prodotto
{
    public $code;
    public $name;
    public $price;
    public $image;
    public $category;

    // costruttore della classe Prodotto
    function __construct($_code, $_name, $_price, $_image, Categoria $_category)
    {
        $this->code = $_code;
        $this->name = $_name;
        $this->price = $_price;
        $this->image = $_image;
        $this->category = $_category;
    }
}
// dichiaro la classe Categoria
class Categoria
{
    public $name;

    // costruttore della classe Categoria
    function __construct($_name)
    {
        $this->name = $_name;
    }
}

// dichiaro la sottoclasse Cibo, figlia della classe Prodotto
class Cibo extends Prodotto
{
    public $type_of_food;
    public $taste;

    // costruttore della sottoclasse Cibo
    function __construct($_code, $_name, $_price, $_image, Categoria $_category, $_type_of_food, $_taste)
    {
        parent::__construct($_code, $_name, $_price, $_image, $_category);
        $this->type_of_food = $_type_of_food;
        $this->taste = $_taste;
    }
}

// dichiaro la sottoclasse Gioco, figlia della classe Prodotto
class Gioco extends Prodotto
{
    public $made_for;
    public $made_of;

    // costruttore della sottoclasse Gioco
    function __construct($_code, $_name, $_price, $_image, Categoria $_category, $_made_for, $_made_of)
    {
        parent::__construct($_code, $_name, $_price, $_image, $_category);
        $this->made_for = $_made_for;
        $this->made_of = $_made_of;
    }
}

// dichiaro la sottoclasse Accessorio, figlia della classe Prodotto
class Accessorio extends Prodotto
{
    public $type;
    public $made_for;
    public $made_of;

    function __construct($_code, $_name, $_price, $_image, Categoria $_category, $_type, $_made_for, $_made_of)
    {
        parent::__construct($_code, $_name, $_price, $_image, $_category);
        $this->type = $_type;
        $this->made_for = $_made_for;
        $this->made_of = $_made_of;
    }
}
