<?php 

class User {
    private $firstName;
    private $lastName;
    private $username;
    private $password;
    private $birthDate;
    private $isSignedUp;
    private $discount;
    
    /**
     * Constructor
     *
     * @param  string $firstName
     * @param  string $lastName
     * @param  string $username
     * @param  string $password
     * @param  int $birthDate
     * @param  mixed $isSignedUp
     * @return void
     */
    function __construct(string $firstName, string $lastName, string $username, string $password, int $birthDate, bool $isSignedUp)
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