<?php

class Item{

}

class CreditCard{

    protected $number;
    protected $cvc;
    protected $expireDate;

    protected function __construct($number, $cvc, $expireDate){
        
        $this->number = $number;
        $this->cvc = $cvc;
        $this->expireDate = $expireDate;

    }

}


class User extends CreditCard{

    protected $name;
    protected $surname;
    protected $dateOfBirth;
    protected $fiscalCode;
    protected $creditCard = [];

    public function __construct($name, $surname, $dateOfBirth, $fiscalCode, $number, $cvc, $expireDate){
        
        $this->name = $name;
        $this->surname = $surname;
        $this->dateOfBirth = $dateOfBirth;
        $this->fiscalCode = $fiscalCode;
        parent::__construct($number, $cvc, $expireDate);
    }
    

}

$pippo = new User('pippo', 'franco', '22/05/1940', 'PIPFRN40E22L682Z', '0800600770058008', '868', '25/05/2022');

var_dump($pippo);