<?php


/**
 * Skeleton subclass for representing a row from the 'decimal' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Fri Oct 12 19:02:41 2012
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class Decimal extends BaseDecimal {

	public function __toString() {
		if ($this->getEntero()->getNumero()<10)
        return sprintf("00%s.%s %s -> %s", $this->getEntero()->getNumero(), $this->getNumero(), $this->getEntero()->getNombre(), $this->getNombre());
    	else if ($this->getEntero()->getNombre()<100)
    	return sprintf("0%s.%s %s -> %s", $this->getEntero()->getNumero(), $this->getNumero(), $this->getEntero()->getNombre(), $this->getNombre());
    	else if ($this->getEntero()->getNombre()<1000)
    	return sprintf("%s.%s %s -> %s", $this->getEntero()->getNumero(), $this->getNumero(), $this->getEntero()->getNombre(), $this->getNombre());	
    }

    public function getNumerodecimal()
	{
		return sprintf(".%s",  $this->getNumero());
	}

	public function getGeneral()
	{
		if ($this->getEntero()->getNumero()<10)
			return sprintf("00%s %s",  $this->getEntero()->getNumero(), $this->getEntero()->getNombre());
		elseif($this->getEntero()->getNumero()<100)
			return sprintf("0%s %s",  $this->getEntero()->getNumero(), $this->getEntero()->getNombre());
		else
			return sprintf("%s %s",  $this->getEntero()->getNumero(), $this->getEntero()->getNombre());
	
	}    
} // Decimal
