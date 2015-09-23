<?php
/**
 * MangoPay Service
 * 
 * @author Lionel Gattegno
 */

namespace Liilo\MangopayBundle\Service;

use MangoPay;

/**
 * Class MangopayService
 * 
 * This class expose the MangoPay API
 *
 * @package Liilo\MangopayBundle\Service
 */
class MangopayService
{
    /**
     * @var \MangoPay\MangoPayApi
     */
    private $mangoPayApi;
    
    /**
     * 
     * @param string  $clientId         The MangoPay client id
     * @param string  $clientPassword   The MangoPay client password
     * @param string  $tempFolder       The temporary folder where to store transaction files
     * @param boolean $prod             Whether the current MangoPay platform is production or not
     */
    public function __construct($clientId, $clientPassword, $tempFolder, $prod)
    {
        $this->mangoPayApi = new MangoPay\MangoPayApi();
        $this->mangoPayApi->Config->ClientId = $clientId;
        $this->mangoPayApi->Config->ClientPassword = $clientPassword;
        $this->mangoPayApi->Config->TemporaryFolder = $tempFolder;
        
        if (true === $prod)
            $this->mangoPayApi->Config->BaseUrl = 'https://api.mangopay.com';
    }
    
    /**
     * Get the MangoPay Api object
     * @return \MangoPay\MangoPayApi
     */
    public function getApi()
    {
        return $this->mangoPayApi;
    }
}

?>