<?php 

class Card {
    protected $number;
    protected $expMonth;
    protected $expYear;
    protected $balance;
    
    /**
     * Constructor
     *
     * @param  int $number
     * @param  int $expMonth
     * @param  int $expYear
     * @param  int $balance
     */
    function __construct(int $number, int $expMonth, int $expYear, int $balance) {
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