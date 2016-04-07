<?php

namespace Brasilcard\Payments\SaleService;

class saleInfo
{

    /**
     * @var int $acceptorId
     */
    protected $acceptorId = null;

    /**
     * @var int $acceptorTan
     */
    protected $acceptorTan = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var string $cardNumber
     */
    protected $cardNumber = null;

    /**
     * @var int $issuerTan
     */
    protected $issuerTan = null;

    /**
     * @var \DateTime $localTransactionDateTime
     */
    protected $localTransactionDateTime = null;

    /**
     * @var string $terminalId
     */
    protected $terminalId = null;

    /**
     * @var boolean $withInterestCharges
     */
    protected $withInterestCharges = null;

    /**
     * @param boolean $withInterestCharges
     */
    public function __construct($withInterestCharges)
    {
      $this->withInterestCharges = $withInterestCharges;
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
     * @return \Brasilcard\Payments\SaleService\saleInfo
     */
    public function setAcceptorId($acceptorId)
    {
      $this->acceptorId = $acceptorId;
      return $this;
    }

    /**
     * @return int
     */
    public function getAcceptorTan()
    {
      return $this->acceptorTan;
    }

    /**
     * @param int $acceptorTan
     * @return \Brasilcard\Payments\SaleService\saleInfo
     */
    public function setAcceptorTan($acceptorTan)
    {
      $this->acceptorTan = $acceptorTan;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param float $amount
     * @return \Brasilcard\Payments\SaleService\saleInfo
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
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
     * @return \Brasilcard\Payments\SaleService\saleInfo
     */
    public function setCardNumber($cardNumber)
    {
      $this->cardNumber = $cardNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getIssuerTan()
    {
      return $this->issuerTan;
    }

    /**
     * @param int $issuerTan
     * @return \Brasilcard\Payments\SaleService\saleInfo
     */
    public function setIssuerTan($issuerTan)
    {
      $this->issuerTan = $issuerTan;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLocalTransactionDateTime()
    {
      if ($this->localTransactionDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->localTransactionDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $localTransactionDateTime
     * @return \Brasilcard\Payments\SaleService\saleInfo
     */
    public function setLocalTransactionDateTime(\DateTime $localTransactionDateTime = null)
    {
      if ($localTransactionDateTime == null) {
       $this->localTransactionDateTime = null;
      } else {
        $this->localTransactionDateTime = $localTransactionDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getTerminalId()
    {
      return $this->terminalId;
    }

    /**
     * @param string $terminalId
     * @return \Brasilcard\Payments\SaleService\saleInfo
     */
    public function setTerminalId($terminalId)
    {
      $this->terminalId = $terminalId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWithInterestCharges()
    {
      return $this->withInterestCharges;
    }

    /**
     * @param boolean $withInterestCharges
     * @return \Brasilcard\Payments\SaleService\saleInfo
     */
    public function setWithInterestCharges($withInterestCharges)
    {
      $this->withInterestCharges = $withInterestCharges;
      return $this;
    }

}
