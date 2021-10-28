<?php

/**
 * Class that represent a purchaseable item
 */
class Item{

    protected $name;
    protected $barCode;
    protected $price;
    protected $stockQuantity;
    protected $taxaction;

    /**
     * create a new Item
     * 
     * @param int $barCode identifier code for the specific item
     * @param string $name name of the product
     * @param float $price base price of the product
     * @param int $stockQuantity product quantity in stock 
     * @param float $taxaction fiscal taxaction of the product
     *  
     */
    public function __construct($name, $barCode, $price, $stockQuantity, $taxation){

        $this->barCode = $barCode;
        $this->name = $name;
        $this->price = $price;
        $this->stockQuantity = $stockQuantity;
        $this->taxation = $taxation;

    }


    
}

/**
 * Class that represent a Credit card
 */
class CreditCard{

    protected $number;
    protected $cvv;
    protected $expireDate;
    protected $circuit;

    /**
     * create a new credit card
     * 
     * @param int $number identifier of the credit card
     * @param int $cvv CVV code behind the credit card
     * @param string $expireDate date of expiration of the credit card
     * @param string $circuit type of circuit of the credit card
     */
    public function __construct( $number, $cvv, $expireDate , $circuit){
        
        $this->number = $number;
        $this->cvv = $cvv;
        $this->expireDate = $expireDate;
        $this->circuit = $circuit;

    }

}


/**
 * Class that represent a new shop user
 */
class User{

    protected $name;
    protected $surname;
    protected $dateOfBirth;
    protected $fiscalCode;
    protected $availableCreditCard = [];
    protected $typeOfUser;
    protected $discount;

    
    /**
     * create a new user
     * 
     * @param string $name name of the user
     * @param string $surname surname of the user
     * @param string $dateOfBirth date of birth of the user
     * @param string $fiscalCode fiscal code of the user
     * @param string $typeOfUser the user can be 'premium' or ''standard'
     * 
     */
    public function __construct($name, $surname, $dateOfBirth, $fiscalCode){
        
        $this->name = $name;
        $this->surname = $surname;
        $this->dateOfBirth = $dateOfBirth;
        $this->fiscalCode = $fiscalCode;
        
    }
    
    /**
     * Push a creditCard(Object) in the array of available credit card
     */
    public function insertCreditCard($creditCard){

        array_push($this->availableCreditCard, $creditCard);



    }

    /**
     * 
     * set the user discount by getting the typeOfUser
     * 
     * @param $typeOfUser specified type of user to set the discount
     */
    public function setUserDiscount($typeOfUser){
        if($typeOfUser == 'premium'){
            $this->typeOfUser = $typeOfUser;
            $this->discount = 0.2;
        } elseif ($typeOfUser == 'standard') {
            $this->typeOfUser = $typeOfUser;
            $this->discount = 0;
        } else {
            return 'type of user not valid';
        }
    }
    
}



$pippo = new User('pippo', 'franco', '22/05/1940', 'PIPFRN40E22L682Z' );

$newCreditCard = new CreditCard( 8006007700804408, 868, '25/05/2022', 'Visa');
?>


<pre>
    <?php var_dump($pippo); ?>
</pre>


<?php
$pippo->insertCreditCard($newCreditCard);
$pippo->setUserDiscount('premium')
?>

<pre>
<?php var_dump($pippo); ?>

</pre>