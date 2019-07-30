<?php

class Line{
    public $quantity;
    public $product;
    public $discount;

}

interface LineCollectionInterface    
{
    /**
     * Gets the Line Collection as an array of lines
     * 
     * @return array 
     *          es: La LineCollection como un array no asociativo de sus instancias de Line
     *          en: The LineCollection as a non-associative array of its Line instances
     */
    public function getLines() : array;
    /**
     * Merges a line into the lines collection
     * @param Line $line es: La línea de compra a integrar en la colección
     *                   en: The cart Line to be merged into the collection
     * @return $this
     */
    public function mergeLine(Line $line) : LineCollectionInterface;
    
}
