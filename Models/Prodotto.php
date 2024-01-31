<?php
// dichiaro la classe Prodotto
class Prodotto
{
    private $code;
    public $brand;
    public $price;
    public $image;
    public $category;
    public $description;

    // costruttore della classe Prodotto
    public function __construct($_brand, $_price, $_image, Categoria $_category, $_description)
    {
        $this->code = $this->randomCode();
        $this->brand = $_brand;
        $this->price = $_price;
        $this->image = $_image;
        $this->category = $_category;
        $this->description = $_description;
    }

    // metodo che crea una stringa di caratteri casuali da usare per impostare il codice
    private function randomCode($length = 7)
    {
        $characters = '0123456789';
        $characters_length = strlen($characters);
        $randCode = '';
        for ($i = 0; $i < $length; $i++) {
            $randCode .= $characters[rand(0, $characters_length - 1)];
        }
        return $randCode;
    }

    // metodo per impostare il codice con caratteri casuali
    public function setCode($length)
    {
        $this->code = $this->randomCode($length);
    }

    // metodo per recuperare il codice
    public function getCode()
    {
        return $this->code;
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
