<?php

namespace Brasilcard\Payments\SaleService;

class confirm
{

    /**
     * @var saleConfirmation $saleConfirmation
     */
    protected $saleConfirmation = null;

    /**
     * @param saleConfirmation $saleConfirmation
     */
    public function __construct($saleConfirmation)
    {
      $this->saleConfirmation = $saleConfirmation;
    }

    /**
     * @return saleConfirmation
     */
    public function getSaleConfirmation()
    {
      return $this->saleConfirmation;
    }

    /**
     * @param saleConfirmation $saleConfirmation
     * @return \Brasilcard\Payments\SaleService\confirm
     */
    public function setSaleConfirmation($saleConfirmation)
    {
      $this->saleConfirmation = $saleConfirmation;
      return $this;
    }

}
