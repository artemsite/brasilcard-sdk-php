<?php

namespace Brasilcard\Payments\SaleService;

class getInstallmentOptionsResponse
{

    /**
     * @var installmentOption $getInstallmentOptionsResult
     */
    protected $getInstallmentOptionsResult = null;

    /**
     * @param installmentOption $getInstallmentOptionsResult
     */
    public function __construct($getInstallmentOptionsResult)
    {
      $this->getInstallmentOptionsResult = $getInstallmentOptionsResult;
    }

    /**
     * @return installmentOption
     */
    public function getGetInstallmentOptionsResult()
    {
      return $this->getInstallmentOptionsResult;
    }

    /**
     * @param installmentOption $getInstallmentOptionsResult
     * @return \Brasilcard\Payments\SaleService\getInstallmentOptionsResponse
     */
    public function setGetInstallmentOptionsResult($getInstallmentOptionsResult)
    {
      $this->getInstallmentOptionsResult = $getInstallmentOptionsResult;
      return $this;
    }

}
