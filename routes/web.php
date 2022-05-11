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




class Product
{
    protected string $name;
    protected string $genre;
    protected string $category;
    protected string $description;
    protected float $price;
    protected $serialNumber;


    /**
     * __construct
     *
     * @param  string $name Product's name
     * @param  string $genre Product's genre
     * @param  string $category Category about Product
     * @param  string $description Description of single Product
     * @param  float $price Price's Product
     * @param  $serialNumber Unique serial numbers of Product
     */
    public function __construct(string $name, string $genre, string $category, string $description, float $price, $serialNumber = null)
    {
        $this -> name = $name;
        $this -> genre = $genre;
        $this -> category = $category;
        $this -> description = $description;
        $this -> setPrice($price);
        $this -> setSerialNumber($serialNumber);
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
     * setName
     *
     * @param  mixed $name
     * @return void
     */
    public function setName(string $name)
    {
        return $this -> name = $name;
    }


    /**
     * getGenre
     *
     * @return string
     */
    public function getGenre(): string
    {
        return $this -> genre;
    }


    /**
     * setGenre
     *
     * @param  string $genre
     *
     */
    public function setGenre(string $genre)
    {
        return $this -> genre = $genre;
    }


    /**
     * getCategory
     *
     * @return string
     */
    public function getCategory(): string
    {
        return $this -> category;
    }


    /**
     * setCategory
     *
     * @param  string $category
     */
    public function setCategory(string $category)
    {
        return $this -> category = $category;
    }


    /**
     * getDescription
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this -> description;
    }


    /**
     * setDescription
     *
     * @param  string $description
     */
    public function setDescription(string $description)
    {
        return $this -> description = $description;
    }


    /**
     * getPrice
     *
     * @return $price
     */
    public function getPrice(): float
    {
        /* return $this -> price . ' $'; */
        return $this -> price;
    }


    /**
     * setPrice
     *
     * @param  mixed $price
     * @return float
     */
    public function setPrice(float $price)
    {
        return $this -> price = round($price, 2);
    }


    /**
     * getSerialNumber
     *
     * @return int
     */
    public function getSerialNumber(): string
    {
        return $this -> serialNumber;
    }


    /**
     * setSerialNumber
     *
     * @param  mixed $serialNumber
     * @return void
     */
    public function setSerialNumber($serialNumber)
    {
        /* $serialNumber_length = strlen((string)$serialNumber);
        if($serialNumber_length <= 10){
            return $this -> serialNumber = $serialNumber;
        }
        else {
            return $this -> serialNumber = 'invalid number';
        } */
        $serialNumber = uniqid();
        return $this -> serialNumber = $serialNumber;
    }
}

class Customer
{
    protected string $firstName;
    protected string $lastName;
    protected $username;
    protected $password;
    /* protected DateTime $birthDay; */
    protected $birthDay;
    protected string $mail;
    protected CreditCard $credit_card;
    protected $deliveryAddress;
    protected Cart $cart;


    /**
     * __construct
     *
     * @param  string $firstName user's first name
     * @param  string $lastName users's last name
     * @param  DataTime $birthDay customer's birthday
     * @param  string $mail e-mail address
     * @param  CreditCard $credit_card user's credit card
     * @param  string $deliveryAddress  user's address for the delivery
     */
     /*  public function __construct(string $firstName,string $lastName, int $year, int $month, int $day, string $mail, CreditCard $credit_card = null, $deliveryAddress = false) */
    public function __construct(string $firstName, string $lastName, $username = null, $password = null, $birthDay = null, string $mail, CreditCard $credit_card = null, $deliveryAddress = null)
    {
        $this -> firstName = $firstName;
        $this -> lastName = $lastName;
        $this -> username = $username;
        $this -> password = $password;
        /* $this -> birthDay = DateTime::createFromFormat("Y-m-d", "$19$year-$month-$day"); */
        $this -> birthDay = $birthDay;
        $this -> mail = $mail;
        $this -> credit_card = $credit_card;
        $this -> deliveryAddress = $deliveryAddress;
        $this -> cart = new Cart();
    }


    /**
     * getFirstName
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return $this -> firstName;
    }


    /**
     * setFirstName
     *
     * @param  mixed $firstName
     * @return void
     */
    public function setFirstName(string $firstName)
    {
        return $this -> firstName = $firstName;
    }


    /**
     * getLastName
     *
     * @return string
     */
    public function getLastName(): string
    {
        return $this -> lastName;
    }


    /**
     * setLastName
     *
     * @param  mixed $lastName
     * @return void
     */
    public function setLastName(string $lastName)
    {
        return $this -> lastName = $lastName;
    }


    public function getUsername()
    {
        return $this-> username;
    }


    public function setUsername($username)
    {
        return $this -> username = $username;
    }

    /**
     * getPassword
     *
     * @return string
     */
    public function getPassword()
    {
        return $this -> password;
    }


    /**
     * setPassword
     *
     * @param  mixed $password
     * @return void
     */
    public function setPassword($password)
    {
        return $this -> password = $password;
    }

    /**
     * getBirthDay
     *
     * @return string
     */
    public function getBirthDay()
        {
            return $this-> birthDay;
        }

    public function setBirthDay($birthDay)
    {
        return $this -> birthDay = $birthDay;
    }


    /**
     * getMail
     *
     * @return string
     */
    public function getMail(): string
    {
        return $this -> mail;
    }


    /**
     * setMail
     *
     * @param  mixed $mail
     * @return void
     */
    public function setMail(string $mail)
    {
        return $this -> mail = $mail;
    }


    /**
     * getCreditCard
     *
     * @return CreditCard
     */
    public function getCreditCard(): CreditCard
        {
            return $this-> credit_card;
        }

        public function getDeliveryAddress()
    {
        return $this -> deliveryAddress;
    }


    /**
     * setDeliveryAddress
     *
     * @param  mixed $deliveryAddress
     * @return void
     */
    public function setDeliveryAddress( $deliveryAddress)
    {
        return $this -> deliveryAddress = $deliveryAddress;
    }

    /**
     * canPay
     *
     * @return bool
     */
    /* public function canPay(): bool
    {
        return $this -> credit_card -> is_Expired();
    } */
    public function canPay()
    {
        if($this -> credit_card -> is_Expired() == true){
            return 'aiaiai passiamo al baratto?';
        } else {
            return "puo' tranquillamente pagare";
        }
    }

    public function getCart(): Cart
    {
        return $this -> cart;
    }


    public function getAmountCart(): float
    {
        return $this -> cart -> getTotalAmount();
    }


}

class CreditCard
{
    private string $number;
    private string $cvc;
    private DateTime $expirationDate;
    private string $accountHolder;


    /**
     * __construct
     *
     * @param  string $number of credit card
     * @param  string $cvc Card Verification Code of credit card
     * @param  int $month expiry credit card
     * @param  int $year expiry credit card
     * @param  string $accountHolder credentials of the owner
     */
    public function __construct(string $number, string $cvc, int $month, int $year, string $accountHolder)
    {
        if (strlen($number) != 16 || !(is_numeric($number))) {
            throw new Exception ('you had insert an invalid Card');
        }
        if (strlen($cvc) != 3|| !(is_numeric($cvc))) {
            throw new Exception ('you had insert an invalid Card Verification Code');
        }

        $this -> number = $number;
        $this -> cvc = $cvc;
        $this -> expirationDate = DateTime::createFromFormat('n-Y',  "$month-20$year");
        $this -> accountHolder = $accountHolder;
    }

        /**
         * getNumber
         *
         * @return string
         */
        public function getNumber() : string
        {
            return $this-> number;
        }


        /**
         * setNumber
         *
         * @param  mixed $number
         * @return void
         */
        public function setNumber(string $number)
        {
            return $this-> number = $number;
        }


        /**
         * getCvc
         *
         * @return string
         */
        public function getCvc() : string
        {
            return $this-> cvc;
        }


        /**
         * setCvc
         *
         * @param  mixed $cvc
         * @return void
         */
        public function setCvc(string $cvc)
        {
            return $this-> cvc = $cvc;
        }


        /**
         * is_Expired check if the credit card is expired or not
         *
         * @return bool
         */
        public function is_Expired(): bool
        {
            return $this -> expirationDate < new DateTime;
        }



        /**
         * getExpirationDate
         *
         * @return DateTime
         */
        public function getExpirationDate(): DateTime
        {
            return $this-> expirationDate;
        }


        /**
         * setExpirationDate
         *
         * @param  mixed $expirationDate
         * @return void
         */
        public function setExpirationDate(DateTime $expirationDate)
        {
            return $this-> expirationDate = $expirationDate;
        }


        /**
         * getAccountHolder
         *
         * @return string
         */
        public function getAccountHolder() : string
        {
            return $this-> accountHolder;
        }


        /**
         * setAccountHolder
         *
         * @param  mixed $accountHolder
         * @return void
         */
        public function setAccountHolder(string $accountHolder)
        {
            return $this-> accountHolder = $accountHolder;
        }

}

class CustomerRegistered extends Customer
{
    private float $discount = 20;


    /**
     * __construct
     *
     * @param  mixed $firstName
     * @param  mixed $lastName
     * @param  mixed $username
     * @param  mixed $password
     * @param  mixed $birthDay
     * @param  mixed $mail
     * @param  mixed $credit_card
     * @param  mixed $deliveryAddress
     * @return void
     */
    public function __construct(string $firstName, string $lastName, $username, string $password, string $birthDay, string $mail, CreditCard $credit_card, $deliveryAddress)
    {
        parent::__construct($firstName, $lastName,$username ,$password, $birthDay, $mail, $credit_card, $deliveryAddress);
    }

}

class CustomerUnregistered extends Customer
{
    /**
     * __construct
     *
     * @return void
     */
    public function __construct(CreditCard $credit_card)
    {
        parent::__construct('Admin', 'Admin', null, null, null, 'generic@random.it', $credit_card);
    }
}

class Cart
{
    private array $products;



    public function __construct()
    {
        $this -> products = [];
    }

    public function addProductToCart(Product $product): void
    {
        array_push($this -> products, $product);
    }

    public function getProducts(): array
    {
        return $this -> products;
    }

    public function getTotalAmount(): float
    {
        $amount = 0.0;

        foreach ($this->products as $product) {
            $amount += $product -> getPrice();
        }
        return $amount;
    }

}

Route::get('/', function () {
    $product1 = new Product('Bocconcini di Carne', 'cibo per cani', 'cibo', 'buonissimo cibo per cani, fatto con le mani di Jerry', 43.543);
    $product2 = new Product('Salami appesi ', 'speranze dei givani', 'giocattoli', 'le speranze dei givani viaggiatori dette anche salami appesi', 100.3345);
    $card1 = new CreditCard('1122334455667788', '333', 4, 25, 'Pasquale Fernando');
    $card2 = new CreditCard('8877665544332211', '323', 3, 28, 'Giovanni Furlanut');
    $giovanni = new CustomerRegistered('Giovanni', 'Furlanut', 'Furla234', 'ambaraba12', '1989-12-06', 'furlanut.giovanni@gmail.com', $card2, 'via sempre sereni, 8, 30012, Noventa, VE');
    $guest = new CustomerUnregistered($card2);
    return view ('home', ['customer' => $giovanni], ['product1' => $product1]);
})-> name('Home');



