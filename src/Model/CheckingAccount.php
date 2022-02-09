<?php

namespace gbrpscal\Model;

use gbrpscal\Model\Account;

/**
 * Classe do tipo Conta Corrente extendida da classe Conta.
 * 
 */
class CheckingAccount extends Account
{
    /** @withdrawLimit => Limite de saque */
    public $withdrawLimit =  600;
    /** @tariff => Tarifa da Conta Corrente */
    public $tariff = 2.5;

    public function __construct()
    {
        parent::__construct($this->withdrawLimit, $this->tariff);
    }
}
