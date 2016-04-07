<?php

namespace Brasilcard\Payments\SaleService;

class cancellationRequest
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
     * @var \DateTime $localTransactionDateTime
     */
    protected $localTransactionDateTime = null;

    /**
     * @var saleInfo $saleInfo
     */
    protected $saleInfo = null;

    /**
     * @var string $terminalId
     */
    protected $terminalId = null;

    /**
     * @var string $authCode
     */
    protected $authCode = null;

    
    public function __construct()
    {
    
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
     * @return \Brasilcard\Payments\SaleService\cancellationRequest
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
     * @return \Brasilcard\Payments\SaleService\cancellationRequest
     */
    public function setAcceptorTan($acceptorTan)
    {
      $this->acceptorTan = $acceptorTan;
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
     * @return \Brasilcard\Payments\SaleService\cancellationRequest
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
     * @return saleInfo
     */
    public function getSaleInfo()
    {
      return $this->saleInfo;
    }

    /**
     * @param saleInfo $saleInfo
     * @return \Brasilcard\Payments\SaleService\cancellationRequest
     */
    public function setSaleInfo($saleInfo)
    {
      $this->saleInfo = $saleInfo;
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
     * @return \Brasilcard\Payments\SaleService\cancellationRequest
     */
    public function setTerminalId($terminalId)
    {
      $this->terminalId = $terminalId;
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
     * @return \Brasilcard\Payments\SaleService\cancellationRequest
     */
    public function setAuthCode($authCode)
    {
      $this->authCode = $authCode;
      return $this;
    }

}
