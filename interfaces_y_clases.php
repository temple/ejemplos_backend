<?php

class Line{
    public $quantity;
    public $product;
    public $discount;

}


interface LineCollectionInterface
{
    public function getLines() : array;

    public function mergeLine(Line $line) : LineCollectionInterface;
}

class LineCollection 
	implements  LineCollectionInterface, 
				\Countable
{
   public function getLines(): array
   {
   	//TODO: implementar el código
   }

   public function mergeLine (Line): LineCollectionInterface
   {
   	//TODO: implementar el código
   }
}