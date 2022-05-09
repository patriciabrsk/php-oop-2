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
    function __construct(string $firstName, string $lastName, string $username, string $password, int $birthDate, bool $isSignedUp, int $discount)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->username = $username;
        $this->password = $password;
        $this->birthDate = $birthDate;
        $this->isSignedUp = $isSignedUp;
    }

    function 

}

?>