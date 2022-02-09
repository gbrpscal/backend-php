<?php

namespace gbrpscal;

require 'vendor/autoload.php';

use Exception;
use gbrpscal\Validations;

/**
 * Classe de Caixa Eletrônico que realiza as operações
 * 
 * 
 */

class Bank {

    /**
     * Método de Saque:
     * Responsável por realizar o saque do valor de saldo de uma Conta.
     * 
     * @param $account Conta aonde será realizado o saque.
     * @param float $withdrawValue Valor que será sacado da Conta.
     * @return void
     */
    public static function withdraw($account, float $withdrawValue)
    {   
        try {

            $vallueWithTarrif = $withdrawValue + $account->tariff;

            Validations::checkValue($vallueWithTarrif, $account->funds);

            $account->funds -= $vallueWithTarrif;

        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
    }
    /**
     * Método de Depósito:
     * Responsável por realizar o deposido de um valor na Conta destino.
     *
     * @param $account Conta que receberá o depósito.
     * @param float $depositValue Valor do depósito.
     * @return void
     */
    public static function deposit($account, float $depositValue)
    {   
        try{
            
            Validations::checkValue($depositValue);

            $account->funds += $depositValue;

        } catch (Exception $exception) {
            echo $exception->getMessage();
        } 
    }

    /**
     * Método de Transferência:
     * Responsável por realizas as tranferências de uma conta para outra.
     *
     * @param $account1 Conta de origem da transferência.
     * @param $account Conta de destindo da transferência.
     * @param float $transferValue Valor da transferência.
     * @return void
     */
    public static function transfer($account1, $account, float $transferValue): void
    {
        try {
            
            Validations::checkValue($transferValue, $account1->funds);
            
            $account1->funds -= $transferValue;
            
            $account->funds += $transferValue;

        } catch (Exception $exception) {
            echo $exception->getMessage();
        } 
    }  
}

