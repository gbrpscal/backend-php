<?php

namespace gbrpscal\Model;


/**
 * Classe abstrata de conta.
 * 
 */
abstract class Account
{
    public $funds = 0;
    
    public function __construct(float $withdrawLimit, float $withdrawTariff)
    {
        $this->funds;
        $this->withdrawLimit = $withdrawLimit;
        $this->withdrawTariff = $withdrawTariff;
    }
    
    public function __GET($attribute) 
    {
        return $this->$attribute;
    }

    public function __SET($attribute, $value)
    {
        $this->$attribute = $value;
    }
}
