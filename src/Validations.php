<?php   

namespace gbrpscal;

use gbrpscal\Exceptions\InsufficientFundsException;

require 'vendor/autoload.php';

/**
 * Classe responsável por realizar as validações.
 */
class Validations
{   
    /**
     * Método de Verificação de Valores
     * 
     * @param float $value Verificara o valor que a ser transacionado. 
     * @param float|null $funds Saldo atual da conta que estara realizando a transação.
     * @return void
     */
    public static function checkValue(float $value, float $funds = null)
    {
        if ($value < 0) {
            throw new \InvalidArgumentException("Valor não pode ser menor que zero!", '1');
        } elseif (
            $value > $funds
            &&
            ! is_null($funds)
        ) 
        {
            throw new InsufficientFundsException();
        }
        return true;
    }
}