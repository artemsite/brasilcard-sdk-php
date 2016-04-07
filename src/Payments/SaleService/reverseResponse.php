<?php

namespace Brasilcard\Payments\SaleService;

class reverseResponse
{

    /**
     * @var reversalResponse $reverseResult
     */
    protected $reverseResult = null;

    /**
     * @param reversalResponse $reverseResult
     */
    public function __construct($reverseResult)
    {
      $this->reverseResult = $reverseResult;
    }

    /**
     * @return reversalResponse
     */
    public function getReverseResult()
    {
      return $this->reverseResult;
    }

    /**
     * @param reversalResponse $reverseResult
     * @return \Brasilcard\Payments\SaleService\reverseResponse
     */
    public function setReverseResult($reverseResult)
    {
      $this->reverseResult = $reverseResult;
      return $this;
    }

}
