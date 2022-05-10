<?php 

class Card {
    protected $number;
    protected $type;
    protected $expMonth;
    protected $expYear;
    protected $securityCode;
    protected $balance;
    
    /**
     * Constructor
     *
     * @param  int $number
     * @param  string $type
     * @param  int $expMonth
     * @param  int $expYear
     * @param  int $securityCode
     * @param  int $balance
     */
    function __construct(int $number, string $type, int $expMonth, int $expYear, int $securityCode, int $balance) {
        $this->number = $number;

        if(!is_numeric($expMonth) || $expMonth < 1 || $expMonth > 12) {
            die('Invalid expiration month');
        } else {
            $this->expMonth = $expMonth;
        }

        if(!is_numeric($expYear) || $expYear < date('Y') || $expYear > date('Y')){
            die('Invalid expiration year');
        } else {
            $this->expYear = $expYear;
        }
        $this->expYear = $expYear;
        $this->balance = $balance;
    }
    
    /**
     * getNumber
     *
     * @return int
     */
    function getNumber() {
        return $this->number;
    }
    
    /**
     * getExpirationMonth
     *
     * @return int
     */
    function getExpirationMonth() {
        return $this->expirationMonth;
    }
    
    /**
     * getExpirationYear
     *
     * @return int
     */
    function getExpirationYear() {
        return $this->expirationYear;
    }
    
    function getSecurityCode() {
        return $this->securityCode;
    }

    /**
     * getBalance
     *
     * @return int
     */
    public function getBalance()
    {
        return $this->balance;
    }
}

?>