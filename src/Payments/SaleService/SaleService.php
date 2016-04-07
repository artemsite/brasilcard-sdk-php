<?php

namespace Brasilcard\Payments\SaleService;

class SaleService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'request' => 'Brasilcard\\Payments\\SaleService\\request',
      'saleRequest' => 'Brasilcard\\Payments\\SaleService\\saleRequest',
      'requestResponse' => 'Brasilcard\\Payments\\SaleService\\requestResponse',
      'saleResponse' => 'Brasilcard\\Payments\\SaleService\\saleResponse',
      'confirm' => 'Brasilcard\\Payments\\SaleService\\confirm',
      'saleConfirmation' => 'Brasilcard\\Payments\\SaleService\\saleConfirmation',
      'confirmResponse' => 'Brasilcard\\Payments\\SaleService\\confirmResponse',
      'cancel' => 'Brasilcard\\Payments\\SaleService\\cancel',
      'cancellationRequest' => 'Brasilcard\\Payments\\SaleService\\cancellationRequest',
      'saleInfo' => 'Brasilcard\\Payments\\SaleService\\saleInfo',
      'cancelResponse' => 'Brasilcard\\Payments\\SaleService\\cancelResponse',
      'cancellationResponse' => 'Brasilcard\\Payments\\SaleService\\cancellationResponse',
      'reverse' => 'Brasilcard\\Payments\\SaleService\\reverse',
      'reversalRequest' => 'Brasilcard\\Payments\\SaleService\\reversalRequest',
      'reverseResponse' => 'Brasilcard\\Payments\\SaleService\\reverseResponse',
      'reversalResponse' => 'Brasilcard\\Payments\\SaleService\\reversalResponse',
      'confirmCancellation' => 'Brasilcard\\Payments\\SaleService\\confirmCancellation',
      'cancellationConfirmation' => 'Brasilcard\\Payments\\SaleService\\cancellationConfirmation',
      'confirmCancellationResponse' => 'Brasilcard\\Payments\\SaleService\\confirmCancellationResponse',
      'getInstallmentOptions' => 'Brasilcard\\Payments\\SaleService\\getInstallmentOptions',
      'getInstallmentOptionsResponse' => 'Brasilcard\\Payments\\SaleService\\getInstallmentOptionsResponse',
      'installmentOption' => 'Brasilcard\\Payments\\SaleService\\installmentOption',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://www.brasilcard.com.br/payments/SaleService.asmx?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param request $parameters
     * @return requestResponse
     */
    public function request(request $parameters)
    {
      return $this->__soapCall('request', array($parameters));
    }

    /**
     * @param confirm $parameters
     * @return confirmResponse
     */
    public function confirm(confirm $parameters)
    {
      return $this->__soapCall('confirm', array($parameters));
    }

    /**
     * @param cancel $parameters
     * @return cancelResponse
     */
    public function cancel(cancel $parameters)
    {
      return $this->__soapCall('cancel', array($parameters));
    }

    /**
     * @param reverse $parameters
     * @return reverseResponse
     */
    public function reverse(reverse $parameters)
    {
      return $this->__soapCall('reverse', array($parameters));
    }

    /**
     * @param confirmCancellation $parameters
     * @return confirmCancellationResponse
     */
    public function confirmCancellation(confirmCancellation $parameters)
    {
      return $this->__soapCall('confirmCancellation', array($parameters));
    }

    /**
     * @param getInstallmentOptions $parameters
     * @return getInstallmentOptionsResponse
     */
    public function getInstallmentOptions(getInstallmentOptions $parameters)
    {
      return $this->__soapCall('getInstallmentOptions', array($parameters));
    }

}
