<?php

date_default_timezone_set("America/Fortaleza");
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

/**
 * Class with a main method to illustrate the usage of the service Services
 */
class ExampleRequest {
    public static function main(){
        try {
            
            $service = new \Brasilcard\Payments\SaleService\Services();
            $result = $service->request("", "", 0, 1.23);
            
            print_r($result);
            
        } catch (Exception $e) {
            print_r($e);
            exit();
        }    
    }
}

ExampleRequest::main();