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

Route::get('/', function () {
    return view('home');
}) -> name('Home');


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
    public function _construct(string $name, string $description = null, float $price)
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
     * getPrice
     *
     * @return float
     */
    public function getPrice() :float
    {
        return $this -> price . '$';
    }

}
