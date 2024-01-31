<?php
// dichiaro la classe Prodotto
class Prodotto
{
    public $code;
    public $brand;
    public $price;
    public $image;
    public $category;
    public $description;

    // costruttore della classe Prodotto
    function __construct($_code, $_brand, $_price, $_image, Categoria $_category, $_description)
    {
        $this->code = $_code;
        $this->brand = $_brand;
        $this->price = $_price;
        $this->image = $_image;
        $this->category = $_category;
        $this->description = $_description;
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
    function __construct($_code, $_brand, $_price, $_image, Categoria $_category, $_description, $_type_of_food, $_taste)
    {
        parent::__construct($_code, $_brand, $_price, $_image, $_category, $_description);
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
    function __construct($_code, $_brand, $_price, $_image, Categoria $_category, $_description, $_made_for, $_made_of)
    {
        parent::__construct($_code, $_brand, $_price, $_image, $_category, $_description);
        $this->made_for = $_made_for;
        $this->made_of = $_made_of;
    }
}

// dichiaro la sottoclasse Accessorio, figlia della classe Prodotto
class Accessorio extends Prodotto
{
    public $made_for;
    public $made_of;

    function __construct($_code, $_brand, $_price, $_image, Categoria $_category, $_description, $_made_for, $_made_of)
    {
        parent::__construct($_code, $_brand, $_price, $_image, $_category, $_description);
        $this->made_for = $_made_for;
        $this->made_of = $_made_of;
    }
}

// creo le istanze della classe Categoria
$dog = new Categoria("Cane");
$cat = new Categoria("Gatto");
$bird = new Categoria("Uccelli");
$fish = new Categoria("Pesci");

// creo le istanze dei prodotti
$product_1 = new Cibo(1, "Royal Canin", 40.99, "https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000", $dog, "Mini Adult", "Crocchette/Secco", "Manzo");
$product_2 = new Cibo(2, "Almo Nature", 29.90, "https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-dog-adult-medium-pollo-e-riso.jpg", $dog, "Holistic Maintenance Medium Large Pollo e Riso", "Crocchette/Secco", "Pollo e riso");
$product_3 = new Cibo(3, "Almo Nature", 2.99, "https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg", $cat, "Cat Daily Lattina", "Umido", "Vitello");
$product_4 = new Cibo(4, "Tetra", 4.90, "https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg", $fish, "Mangime per Pesci Guppy in Fiocchi", "Fiocchi", "/");
$product_5 = new Accessorio(5, "HappyBirds", 49.90, "https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg", $bird, "Voliera Wilma in Legno", "Uccelli di taglia piccola", "Legno");
$product_6 = new Accessorio(6, "EasyCristal", 6.99, "https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg", $fish, "Cartucce Filtranti per Filtro EasyCrystal", "Acquari per pesci", "Materiale naturale");
$product_7 = new Gioco(7, "Kong", 8.00, "https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg", $dog, "Kong Classic 8cm", "Cani di taglia piccola", "Plastica dura");
$product_8 = new Gioco(8, "Trixie", 1.99, "https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg", $cat, "Topini di peluche", "Gatti di tutte le taglie", "Plastica/Polyestere");
