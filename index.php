<?php

/**
 * Class that represent a purchaseable item
 */
class Item{

    protected $name;
    protected $barCode;
    protected $price;
    protected $stockQuantity;

    public function __construct($name, $barCode, $price, $stockQuantity){

        $this->name = $name;
        $this->barCode = $barCode;
        $this->price = $price;
        $this->stockQuantity = $stockQuantity;

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
    public function __construct($number, $cvv, $expireDate , $circuit){
        
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

    /**
     * Push a creditCard(Object) in the array of available credit card
     */
    public function insertCreditCard($creditCard){

        array_push($this->availableCreditCard, $creditCard);



    }

    /**
     * create a new user
     * 
     * @param string $name name of the user
     * @param string $surname surname of the user
     * @param string $dateOfBirth date of birth of the user
     * @param string $fiscalCode fiscal code of the user
     */
    public function __construct($name, $surname, $dateOfBirth, $fiscalCode){
        
        $this->name = $name;
        $this->surname = $surname;
        $this->dateOfBirth = $dateOfBirth;
        $this->fiscalCode = $fiscalCode;

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
?>

<pre>
<?php var_dump($pippo); ?>

</pre>