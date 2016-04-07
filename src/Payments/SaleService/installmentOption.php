<?php

namespace Brasilcard\Payments\SaleService;

class installmentOption
{

    /**
     * @var float $installmentAmount
     */
    protected $installmentAmount = null;

    /**
     * @var int $installmentsNumber
     */
    protected $installmentsNumber = null;

    /**
     * @var float $interestRate
     */
    protected $interestRate = null;

    /**
     * @param int $installmentsNumber
     */
    public function __construct($installmentsNumber)
    {
      $this->installmentsNumber = $installmentsNumber;
    }

    /**
     * @return float
     */
    public function getInstallmentAmount()
    {
      return $this->installmentAmount;
    }

    /**
     * @param float $installmentAmount
     * @return \Brasilcard\Payments\SaleService\installmentOption
     */
    public function setInstallmentAmount($installmentAmount)
    {
      $this->installmentAmount = $installmentAmount;
      return $this;
    }

    /**
     * @return int
     */
    public function getInstallmentsNumber()
    {
      return $this->installmentsNumber;
    }

    /**
     * @param int $installmentsNumber
     * @return \Brasilcard\Payments\SaleService\installmentOption
     */
    public function setInstallmentsNumber($installmentsNumber)
    {
      $this->installmentsNumber = $installmentsNumber;
      return $this;
    }

    /**
     * @return float
     */
    public function getInterestRate()
    {
      return $this->interestRate;
    }

    /**
     * @param float $interestRate
     * @return \Brasilcard\Payments\SaleService\installmentOption
     */
    public function setInterestRate($interestRate)
    {
      $this->interestRate = $interestRate;
      return $this;
    }

}
