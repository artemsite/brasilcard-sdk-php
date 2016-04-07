<?php

namespace Brasilcard\Payments\SaleService;

class confirmCancellation
{

    /**
     * @var cancellationConfirmation $cancellationConfirmation
     */
    protected $cancellationConfirmation = null;

    /**
     * @param cancellationConfirmation $cancellationConfirmation
     */
    public function __construct($cancellationConfirmation)
    {
      $this->cancellationConfirmation = $cancellationConfirmation;
    }

    /**
     * @return cancellationConfirmation
     */
    public function getCancellationConfirmation()
    {
      return $this->cancellationConfirmation;
    }

    /**
     * @param cancellationConfirmation $cancellationConfirmation
     * @return \Brasilcard\Payments\SaleService\confirmCancellation
     */
    public function setCancellationConfirmation($cancellationConfirmation)
    {
      $this->cancellationConfirmation = $cancellationConfirmation;
      return $this;
    }

}
