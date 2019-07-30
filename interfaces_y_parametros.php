<?php

/**
 * Esta interfaz exige que cualquier producto tenga dos funciones que devuelvan
 * el precio y el nombre del producto
 */
interface ProductInterface{
	public function getPrice(): float;
	public function getName() : string;
}

/**
 * Esta interfaz exige que cualquier clase que sea una línea de compra
 * deberá disponer de 3 funciones que permitan saber
 * la cantidad solicitada, el producto (representado por un objeto), el % de descuento
 */
interface LineInterface{
    public function getQuantity() : int;
    public function getProduct() : ProductInterface;
    public function getDiscount() : float;
}

/**
 * Esta interfaz exige que cualquier clase que sea una lista o colección de líneas de compra
 * deberá tener una funcion que permitan obtener un objeto que 
 * cumpla con la interfaz de las líneas de compra (LineInterface) dado el número de línea
 */
interface LineCollectionInterface
	extends \Countable
{
	public function getLine(int $num): LineInterface
}

/**
 * Ahora, gracias a las exigencias de las interfaces, podemos proponer una solución
 * pensada para calcular el precio de un carrito de compra, que esté basada en estas interfaces.
 * La solución es la clase PriceCalculator, que utilizará la interfaz LineCollection Interface
 * para exigir el tipo de objeto que se recibirá como primer parámetro en la función getTotal.
 * 
 */
class PriceCalculator{
	public function getTotal(LineCollectionInterface $cart)
	{
		$total_price = 0.00;

		// Como el parámetro $cart cumple con LineCollectionInterface, 
		// sabemos que tiene una función count, que nos dice cuantas líneas tiene
		// y podremos ir sumando el precio de cada línea iterando
		$i = 0;
		while($i < $cart->count()){

			// Como $cart cumple con LineCollectionInterface,
			// sabemos que tiene una función getLine que nos devuelve un objeto 
			// que cumplirá con la interfaz LineInterface
			$line = $cart->getLine($i);

			// Como la interfaz LineInterface exige que haya una función getProduct
			// que devuelve un objeto que cumple con la interfaz ProductInterface
			// podemos usarla para obtener un objeto de estas características
			$product = $line->getProduct();

			// Como la interfaz ProductInterface exige que haya una función llamada
			// getPrice, que nos devuelva el precio, la usaremos para obtener el precio
			// base de esa línea del carrito de compra
			$total_price += $product->getPrice() * ( 100.00 - $line->getDiscount() ) / 100.00;

			// Por otro lado, usaremos la función getDiscount que era exigida a las LineInterface
			// para aplicar un descuento al precio de esa línea

		}
		
		return $total_price;
	}
}