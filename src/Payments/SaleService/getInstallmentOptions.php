<?php

namespace Brasilcard\Payments\SaleService;

class getInstallmentOptions
{

    /**
     * @var int $acceptorId
     */
    protected $acceptorId = null;

    /**
     * @var boolean $acceptorIdSpecified
     */
    protected $acceptorIdSpecified = null;

    /**
     * @var string $cardNumber
     */
    protected $cardNumber = null;

    /**
     * @var int $installmentsNumberDesired
     */
    protected $installmentsNumberDesired = null;

    /**
     * @var boolean $installmentsNumberDesiredSpecified
     */
    protected $installmentsNumberDesiredSpecified = null;

    /**
     * @var float $saleAmount
     */
    protected $saleAmount = null;

    /**
     * @var boolean $saleAmountSpecified
     */
    protected $saleAmountSpecified = null;

    /**
     * @param int $acceptorId
     * @param boolean $acceptorIdSpecified
     * @param string $cardNumber
     * @param int $installmentsNumberDesired
     * @param boolean $installmentsNumberDesiredSpecified
     * @param float $saleAmount
     * @param boolean $saleAmountSpecified
     */
    public function __construct($acceptorId, $acceptorIdSpecified, $cardNumber, $installmentsNumberDesired, $installmentsNumberDesiredSpecified, $saleAmount, $saleAmountSpecified)
    {
      $this->acceptorId = $acceptorId;
      $this->acceptorIdSpecified = $acceptorIdSpecified;
      $this->cardNumber = $cardNumber;
      $this->installmentsNumberDesired = $installmentsNumberDesired;
      $this->installmentsNumberDesiredSpecified = $installmentsNumberDesiredSpecified;
      $this->saleAmount = $saleAmount;
      $this->saleAmountSpecified = $saleAmountSpecified;
    }

    /**
     * @return int
     */
    public function getAcceptorId()
    {
      return $this->acceptorId;
    }

    /**
     * @param int $acceptorId
     * @return \Brasilcard\Payments\SaleService\getInstallmentOptions
     */
    public function setAcceptorId($acceptorId)
    {
      $this->acceptorId = $acceptorId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAcceptorIdSpecified()
    {
      return $this->acceptorIdSpecified;
    }

    /**
     * @param boolean $acceptorIdSpecified
     * @return \Brasilcard\Payments\SaleService\getInstallmentOptions
     */
    public function setAcceptorIdSpecified($acceptorIdSpecified)
    {
      $this->acceptorIdSpecified = $acceptorIdSpecified;
      return $this;
    }

    /**
     * @return string
     */
    public function getCardNumber()
    {
      return $this->cardNumber;
    }

    /**
     * @param string $cardNumber
     * @return \Brasilcard\Payments\SaleService\getInstallmentOptions
     */
    public function setCardNumber($cardNumber)
    {
      $this->cardNumber = $cardNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getInstallmentsNumberDesired()
    {
      return $this->installmentsNumberDesired;
    }

    /**
     * @param int $installmentsNumberDesired
     * @return \Brasilcard\Payments\SaleService\getInstallmentOptions
     */
    public function setInstallmentsNumberDesired($installmentsNumberDesired)
    {
      $this->installmentsNumberDesired = $installmentsNumberDesired;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInstallmentsNumberDesiredSpecified()
    {
      return $this->installmentsNumberDesiredSpecified;
    }

    /**
     * @param boolean $installmentsNumberDesiredSpecified
     * @return \Brasilcard\Payments\SaleService\getInstallmentOptions
     */
    public function setInstallmentsNumberDesiredSpecified($installmentsNumberDesiredSpecified)
    {
      $this->installmentsNumberDesiredSpecified = $installmentsNumberDesiredSpecified;
      return $this;
    }

    /**
     * @return float
     */
    public function getSaleAmount()
    {
      return $this->saleAmount;
    }

    /**
     * @param float $saleAmount
     * @return \Brasilcard\Payments\SaleService\getInstallmentOptions
     */
    public function setSaleAmount($saleAmount)
    {
      $this->saleAmount = $saleAmount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSaleAmountSpecified()
    {
      return $this->saleAmountSpecified;
    }

    /**
     * @param boolean $saleAmountSpecified
     * @return \Brasilcard\Payments\SaleService\getInstallmentOptions
     */
    public function setSaleAmountSpecified($saleAmountSpecified)
    {
      $this->saleAmountSpecified = $saleAmountSpecified;
      return $this;
    }

}
