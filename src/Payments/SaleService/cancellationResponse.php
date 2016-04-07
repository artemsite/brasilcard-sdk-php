<?php

namespace Brasilcard\Payments\SaleService;

class cancellationResponse
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
     * @var int $issuerTan
     */
    protected $issuerTan = null;

    /**
     * @var \DateTime $localTransactionDateTime
     */
    protected $localTransactionDateTime = null;

    /**
     * @var string $responseCode
     */
    protected $responseCode = null;

    /**
     * @var string $responseMessage
     */
    protected $responseMessage = null;

    /**
     * @var string $terminalId
     */
    protected $terminalId = null;

    
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
     * @return \Brasilcard\Payments\SaleService\cancellationResponse
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
     * @return \Brasilcard\Payments\SaleService\cancellationResponse
     */
    public function setAcceptorTan($acceptorTan)
    {
      $this->acceptorTan = $acceptorTan;
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
     * @return \Brasilcard\Payments\SaleService\cancellationResponse
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
     * @return \Brasilcard\Payments\SaleService\cancellationResponse
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
    public function getResponseCode()
    {
      return $this->responseCode;
    }

    /**
     * @param string $responseCode
     * @return \Brasilcard\Payments\SaleService\cancellationResponse
     */
    public function setResponseCode($responseCode)
    {
      $this->responseCode = $responseCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getResponseMessage()
    {
      return $this->responseMessage;
    }

    /**
     * @param string $responseMessage
     * @return \Brasilcard\Payments\SaleService\cancellationResponse
     */
    public function setResponseMessage($responseMessage)
    {
      $this->responseMessage = $responseMessage;
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
     * @return \Brasilcard\Payments\SaleService\cancellationResponse
     */
    public function setTerminalId($terminalId)
    {
      $this->terminalId = $terminalId;
      return $this;
    }

}
