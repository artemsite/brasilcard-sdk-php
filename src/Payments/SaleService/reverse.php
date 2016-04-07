<?php

namespace Brasilcard\Payments\SaleService;

class reverse
{

    /**
     * @var reversalRequest $reversalRequest
     */
    protected $reversalRequest = null;

    /**
     * @param reversalRequest $reversalRequest
     */
    public function __construct($reversalRequest)
    {
      $this->reversalRequest = $reversalRequest;
    }

    /**
     * @return reversalRequest
     */
    public function getReversalRequest()
    {
      return $this->reversalRequest;
    }

    /**
     * @param reversalRequest $reversalRequest
     * @return \Brasilcard\Payments\SaleService\reverse
     */
    public function setReversalRequest($reversalRequest)
    {
      $this->reversalRequest = $reversalRequest;
      return $this;
    }

}
