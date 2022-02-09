<?php

namespace gbrpscal\Exceptions;

require 'vendor/autoload.php';

/**
 * Exceção de Saldo Insuficiente
 */

class InsufficientFundsException extends \DomainException
{
    public function __construct()
    {
        parent::__construct("Saldo Insuficiente.");
    }
}

