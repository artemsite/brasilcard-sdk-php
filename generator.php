<?php
require_once 'vendor/autoload.php';

$generator = new \Wsdl2PhpGenerator\Generator();
$generator->generate(
    new \Wsdl2PhpGenerator\Config(array(
        'inputFile' => 'https://www.brasilcard.com.br/payments/SaleService.asmx?WSDL',
        'outputDir' => 'src/Payments/SaleService',
        'namespaceName' => 'Brasilcard\Payments\SaleService'
    ))
);