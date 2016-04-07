<?php

namespace Brasilcard\Payments\SaleService;

class request
{

    /**
     * @var saleRequest $saleRequest
     */
    protected $saleRequest = null;

    /**
     * @param saleRequest $saleRequest
     */
    public function __construct($saleRequest)
    {
      $this->saleRequest = $saleRequest;
    }

    /**
     * @return saleRequest
     */
    public function getSaleRequest()
    {
      return $this->saleRequest;
    }

    /**
     * @param saleRequest $saleRequest
     * @return \Brasilcard\Payments\SaleService\request
     */
    public function setSaleRequest($saleRequest)
    {
      $this->saleRequest = $saleRequest;
      return $this;
    }

}
