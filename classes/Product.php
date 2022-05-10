<?php 

/**
 * Product
 */
class Product {
    protected $name;
    protected $brand;
    protected $id;
    protected $price;
    protected $description;
    protected $category;
    
    /**
     * Constructor
     *
     * @param  string $name - Product name
     * @param  string $brand - Product brand name
     * @param  int $id - Product ID number
     * @param  float $price - Product price
     * @param  string $description - Product description
     * @param  string $category - Product category
     */
    function __construct(string $name, string $brand, int $id, float $price, string $description, string $category)
    {
        $this->name = $name;
        $this->brand = $brand;
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
     * getBrand
     *
     * @return string $brand
     */
    function getBrand() {
        return $this->brand;
    }
    
    /**
     * getId
     *
     * @return int $id
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