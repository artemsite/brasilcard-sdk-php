<?php

namespace Brasilcard\Payments\SaleService;

class requestResponse
{

    /**
     * @var saleResponse $requestResult
     */
    protected $requestResult = null;

    /**
     * @param saleResponse $requestResult
     */
    public function __construct($requestResult)
    {
      $this->requestResult = $requestResult;
    }

    /**
     * @return saleResponse
     */
    public function getRequestResult()
    {
      return $this->requestResult;
    }

    /**
     * @param saleResponse $requestResult
     * @return \Brasilcard\Payments\SaleService\requestResponse
     */
    public function setRequestResult($requestResult)
    {
      $this->requestResult = $requestResult;
      return $this;
    }

}
