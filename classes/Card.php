<?php 

class Card {
    protected $number;
    protected $expirationMonth;
    protected $expirationYear;
    protected $balance;
    
    /**
     * Constructor
     *
     * @param  int $number
     * @param  int $expirationMonth
     * @param  int $expirationYear
     * @param  int $balance
     */
    function __construct(int $number, int $expirationMonth, int $expirationYear, int $balance) {
        $this->number = $number;
        $this->expirationMonth = $expirationMonth;
        $this->expirationYear = $expirationYear;
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