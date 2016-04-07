<?php

namespace Brasilcard\Payments\SaleService;

class cancel
{

    /**
     * @var cancellationRequest $cancellationRequest
     */
    protected $cancellationRequest = null;

    /**
     * @param cancellationRequest $cancellationRequest
     */
    public function __construct($cancellationRequest)
    {
      $this->cancellationRequest = $cancellationRequest;
    }

    /**
     * @return cancellationRequest
     */
    public function getCancellationRequest()
    {
      return $this->cancellationRequest;
    }

    /**
     * @param cancellationRequest $cancellationRequest
     * @return \Brasilcard\Payments\SaleService\cancel
     */
    public function setCancellationRequest($cancellationRequest)
    {
      $this->cancellationRequest = $cancellationRequest;
      return $this;
    }

}
