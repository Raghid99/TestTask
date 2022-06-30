<?php
class Product
{
    public $sku;
    public $name;
    public $price;

    private static $SObj;
    private function __construct(){
         // Instance of an object.
    }
    function get_sku()
    {
        return $this->sku;
    }
    function get_name()
    {
        return $this->name;
    }
    
    function get_price()
    {
        return $this->price;
    }
    function set_sku($sku)
    {
        $this->sku = $sku;
    }
    function set_name($name)
    {
        $this->name = $name;
    }
    function set_price($price)
    {
        $this->price = $price;
    }

     
    public static function returnParent(){
        if(!isset(self::$SObj)) {
            self::$SObj = new Product();
        } else {
            
        }
        return self::$SObj;
    }
}
?>