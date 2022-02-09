<?php

namespace gbrpscal\Model;

use gbrpscal\Model\Account;

/**
 * Classe do tipo Conta Poupança extendida da classe Conta.
 * 
 */
class SvgAccount extends Account
{   
    /** @withdrawLimit => Limite de saque */
    public $withdrawLimit =  1000;
    /** @tariff => Tarifa da Conta Poupança */
    public $tariff = 0.8;

    public function __construct()
    {
        parent::__construct($this->withdrawLimit, $this->tariff);
    }
}