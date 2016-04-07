<?php
namespace Brasilcard\Payments\SaleService;

class Services {
    
    /**
     * Codigo do Estabelecimento
     */
    const _acceptorId = 0;
    /**
     * Chave de Acesso
     */
    const _authCode = "";
    /**
     * Identificação do Terminal 
     */
    const _terminalId = "";
    
    /**
     * @var int $acceptorId
     */
    protected $acceptorId = null;
    /**
     * @var string $authCode
     */
    protected $authCode = null;
    /**
     * @var string $terminalId
     */
    protected $terminalId = null;
    
    /**
     * @param int $acceptorId
     * @param string $authCode
     */
    public function __construct($acceptorId=null, $authCode=null, $terminalId=null)
    {
        if( $acceptorId === null ){
            $this->acceptorId = $this::_acceptorId;
        }
        if( $authCode === null ){
            $this->authCode = $this::_authCode;
        }
        if( $terminalId === null ){
            $this->terminalId = $this::_terminalId;
        }
    }
    
    /**
     * @param int $acceptorTan
     */
    private function authCode($acceptorTan){
        return md5($this->authCode.$this->acceptorId.$acceptorTan);
    }
    
    /**
     * @param string $cardNumber
     * @param string $cardSecurityCode
     * @param int $acceptorTan
     * @param float $amount
     * @return saleResponse
     */
    public function request($cardNumber, $cardSecurityCode, $acceptorTan, $amount){
        
        $saleRequest = new \Brasilcard\Payments\SaleService\saleRequest(false);
        $saleRequest->setAcceptorId($this->acceptorId)
                    ->setAcceptorTan($acceptorTan)
                    ->setAuthCode($this->authCode($acceptorTan))
                    ->setAmount($amount)
                    ->setCardNumber($cardNumber)
                    ->setCardSecurityCode($cardSecurityCode)
                    ->setLocalTransactionDateTime(new \DateTime())
                    ->setTerminalId($this->terminalId)
                    ->setInstallmentsNumber(1)
                    ->setCardExpirationMonth(11)
                    ->setCardExpirationYear(1111)
                    ->setWithInterestCharges(false);
        
        $service = new \Brasilcard\Payments\SaleService\SaleService();
        $requestResponse = $service->request(new \Brasilcard\Payments\SaleService\request($saleRequest));
        
        return $requestResponse->getRequestResult();
    }
}