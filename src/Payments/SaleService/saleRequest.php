<?php

namespace Brasilcard\Payments\SaleService;

class saleRequest
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
     * @var int $cardExpirationMonth
     */
    protected $cardExpirationMonth = null;

    /**
     * @var int $cardExpirationYear
     */
    protected $cardExpirationYear = null;

    /**
     * @var string $cardNumber
     */
    protected $cardNumber = null;

    /**
     * @var string $cardSecurityCode
     */
    protected $cardSecurityCode = null;

    /**
     * @var int $installmentsNumber
     */
    protected $installmentsNumber = null;

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
     * @var string $authCode
     */
    protected $authCode = null;

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
     * @return \Brasilcard\Payments\SaleService\saleRequest
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
     * @return \Brasilcard\Payments\SaleService\saleRequest
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
     * @return \Brasilcard\Payments\SaleService\saleRequest
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return int
     */
    public function getCardExpirationMonth()
    {
      return $this->cardExpirationMonth;
    }

    /**
     * @param int $cardExpirationMonth
     * @return \Brasilcard\Payments\SaleService\saleRequest
     */
    public function setCardExpirationMonth($cardExpirationMonth)
    {
      $this->cardExpirationMonth = $cardExpirationMonth;
      return $this;
    }

    /**
     * @return int
     */
    public function getCardExpirationYear()
    {
      return $this->cardExpirationYear;
    }

    /**
     * @param int $cardExpirationYear
     * @return \Brasilcard\Payments\SaleService\saleRequest
     */
    public function setCardExpirationYear($cardExpirationYear)
    {
      $this->cardExpirationYear = $cardExpirationYear;
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
     * @return \Brasilcard\Payments\SaleService\saleRequest
     */
    public function setCardNumber($cardNumber)
    {
      $this->cardNumber = $cardNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCardSecurityCode()
    {
      return $this->cardSecurityCode;
    }

    /**
     * @param string $cardSecurityCode
     * @return \Brasilcard\Payments\SaleService\saleRequest
     */
    public function setCardSecurityCode($cardSecurityCode)
    {
      $this->cardSecurityCode = $cardSecurityCode;
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
     * @return \Brasilcard\Payments\SaleService\saleRequest
     */
    public function setInstallmentsNumber($installmentsNumber)
    {
      $this->installmentsNumber = $installmentsNumber;
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
     * @return \Brasilcard\Payments\SaleService\saleRequest
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
     * @return \Brasilcard\Payments\SaleService\saleRequest
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
     * @return \Brasilcard\Payments\SaleService\saleRequest
     */
    public function setWithInterestCharges($withInterestCharges)
    {
      $this->withInterestCharges = $withInterestCharges;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthCode()
    {
      return $this->authCode;
    }

    /**
     * @param string $authCode
     * @return \Brasilcard\Payments\SaleService\saleRequest
     */
    public function setAuthCode($authCode)
    {
      $this->authCode = $authCode;
      return $this;
    }

}
