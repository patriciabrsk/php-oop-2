<?php 

/**
 * Product
 */
class Product {
    private $name;
    private $id;
    private $price;
    private $description;
    private $category;
    
    /**
     * Constructor
     *
     * @param  string $name - Product name
     * @param  int $id - Product id number
     * @param  float $price - Product price
     * @param  string $description - Product description
     * @param  string $category - Product category
     */
    function __construct(string $name, int $id, float $price, string $description = null, string $category)
    {
        $this->name = $name;
        $this->id = $id; 
        $this->price = $price; 
        $this->description = $description; 
        $this->category = $category; 
    }
    
    /**
     * getName
     *
     * @return string $name
     */
    function getName() {
        return $this->name;
    }
    
    /**
     * getId
     *
     * @return int
     */
    function getId() {
        return $this->id;
    }
    
    /**
     * getPrice
     *
     * @return float $price
     */
    function getPrice() {
        return $this->price;
    }
    
    /**
     * getDescription
     *
     * @return string $description
     */
    function getDescription() {
        return $this->description;
    }
    
    /**
     * getCategory
     *
     * @return string $category
     */
    function getCategory() {
        return $this->category;
    }
}

?>