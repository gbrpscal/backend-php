<?php

require 'vendor/autoload.php';

use gbrpscal\Bank;
use gbrpscal\Model\SvgAccount;
use gbrpscal\Model\CheckingAccount;

$account = new SvgAccount();
$account2 = new CheckingAccount();
Bank::deposit($account2, 500);
print_r($account2);
Bank::transfer($account2, $account, 200);
print_r($account);
print_r($account2);
Bank::withdraw($account, 100);
print_r($account);