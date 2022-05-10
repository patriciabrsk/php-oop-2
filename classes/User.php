<?php 

require_once __DIR__ . '/Card.php';
class User {
    protected $firstName;
    protected $lastName;
    protected $username;
    protected $password;
    protected $birthDate;
    protected $isSignedUp;
    protected $discount;
    protected Card $creditCard;
    
    /**
     * Constructor
     *
     * @param  string $firstName
     * @param  string $lastName
     * @param  string $username
     * @param  string $password
     * @param  int $birthDate
     * @param  bool $isSignedUp
     * @param  int $discount
     */
    function __construct(string $firstName, string $lastName, string $username, string $password, int $birthDate, bool $isSignedUp, int $discount, Card $creditCard)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->username = $username;
        $this->password = $password;
        $this->birthDate = $birthDate;
        $this->isSignedUp = $isSignedUp;
        $this->discount = $discount;
        $this->creditCard = $creditCard;
    }

    function setCreditCard(Card $creditCard) {
        $this->creditCard = $creditCard;
    }

    function getDiscount() {
        return 'You get a ' . $this->discount . '% on your purchase.';
    }

    function setDiscount() {
        return $this->isSignedUp ? $this->discount = 20 : $this->discount = 0;
    }

    function getName() {
        return $this->name;
    }

    function getLastName() {
        return $this->lastName;
    }

    function getUsername() {
        return $this->username;
    }
}

?>