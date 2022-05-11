<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




/**
 * Product
 */
class Product
{
    protected string $name;
    protected $description;
    protected float $price;

    /**
     * _construct
     *
     * @param  mixed $name
     * @param  mixed $description
     * @param  mixed $price
     * @return void
     */
    public function __construct(string $name, $description = null, float $price)
    {
        $this -> name = $name;
        $this -> description = $description;
        $this -> price = $price;
    }

    /**
     * getName
     *
     * @return string
     */
    public function getName(): string
    {
        return $this -> name;
    }

    /**
     * getDescription
     *
     * @return void
     */
    public function getDescription()
    {
        return $this -> description;
    }


    /**
     * setDescription
     *
     * @param  mixed $description
     * @return void
     */
    public function setDescription($description)
    {
        return $this -> description = $description;
    }

    /**
     * getPrice
     *
     * @return float
     */
    public function getPrice() :float
    {
        return $this -> price;
    }

}

Route::get('/', function () {
    $product = new Product("croccantini", "cibo per cani", 20.33 );
    return view ('home', ['product' => $product]);
})-> name('Home');
