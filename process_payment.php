<?php

namespace Tpay\Example;

use Tpay\OriginApi\PaymentBlik;
use Tpay\OriginApi\Utilities\TException;

include_once 'config.php';
include_once 'loader.php';

final class BlikTransactionExample extends PaymentBlik
{
    public function __construct()
    {
        $this->merchantSecret = 'demo';
        $this->merchantId = 1010;
        $this->trApiKey = '75f86137a6635df826e3efe2e66f7c9a946fdde1';
        $this->trApiPass = 'p@$$w0rd#@!';
        parent::__construct();
        $this->init();
    }

    public function init()
    {
        if (isset($_POST['blik_code'])) {
            $blikCode = implode('', $_POST['blik_code']);
            $this->blikTransaction($blikCode);
        } else {
            echo $this->getBlikForm();
        }
    }

    private function getBlikForm()
    {
        return $this->getBlikSelectionForm('BlikTransactionExample.php');
    }

    /**
     * Pass BLIK code to created transaction
     * Bank group for create method must be 150
     *
     * @param string $blikCode
     */
    private function blikTransaction($blikCode)
    {
        $config = [
            'description' => 'Test API transaction',
            'amount' => 0.50,
            'crc' => 'ASDFASDFASFD',
            'group' => 150,
            'name' => 'John Doelul',
            'email' => 'customer@example.com',
            'accept_tos' => 1,
            'result_url' => 'https://example.com/notify.php',
        ];
        $transaction = $this->create($config);
        $title = $transaction['title'];

        try {
            $responseBlik = $this->blik($title, $blikCode);
            var_dump($responseBlik);
        } catch (TException $e) {
            var_dump($e);
        }
    }
}

new BlikTransactionExample();