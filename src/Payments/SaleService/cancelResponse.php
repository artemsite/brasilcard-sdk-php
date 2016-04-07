<?php

namespace Brasilcard\Payments\SaleService;

class cancelResponse
{

    /**
     * @var cancellationResponse $cancelResult
     */
    protected $cancelResult = null;

    /**
     * @param cancellationResponse $cancelResult
     */
    public function __construct($cancelResult)
    {
      $this->cancelResult = $cancelResult;
    }

    /**
     * @return cancellationResponse
     */
    public function getCancelResult()
    {
      return $this->cancelResult;
    }

    /**
     * @param cancellationResponse $cancelResult
     * @return \Brasilcard\Payments\SaleService\cancelResponse
     */
    public function setCancelResult($cancelResult)
    {
      $this->cancelResult = $cancelResult;
      return $this;
    }

}
