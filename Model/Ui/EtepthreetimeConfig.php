<?php
/**
 * ETransactions Etransactions module for Magento
 *
 * Feel free to contact E-Transactions at support@e-transactions.fr for any
 * question.
 *
 * LICENSE: This source file is subject to the version 3.0 of the Open
 * Software License (OSL-3.0) that is available through the world-wide-web
 * at the following URI: http://opensource.org/licenses/OSL-3.0. If
 * you did not receive a copy of the OSL-3.0 license and are unable
 * to obtain it through the web, please send a note to
 * support@e-transactions.fr so we can mail you a copy immediately.
 *
 * @version   1.0.7-psr
 * @author    E-Transactions <support@e-transactions.fr>
 * @copyright 2012-2017 E-Transactions
 * @license   http://opensource.org/licenses/OSL-3.0
 * @link      http://www.e-transactions.fr/
 */

namespace CreditAgricole\Etransactions\Model\Ui;

/**
 * Class Etepthreetime
 *
 * @method \Magento\Quote\Api\Data\PaymentMethodExtensionInterface getExtensionAttributes()
 */
class EtepthreetimeConfig
{
    const PAYMENT_METHOD_ETEPTHREETIME_CODE = 'etep_threetime';
    const PAYMENT_METHOD_ETEPTHREETIME_XML_PATH = 'payment/etep_threetime/cctypes';

    /**
     * Payment method code
     *
     * @var string
     */
    protected $CODE = self::PAYMENT_METHOD_ETEPTHREETIME_CODE;
    protected $_code = self::PAYMENT_METHOD_ETEPTHREETIME_CODE;

    /**
     * @var string
     */
    // protected $_formBlockType = 'CreditAgricole\Etransactions\Block\Form\Etepthreetime';

    /**
     * @var string
     */
    // protected $_infoBlockType = 'CreditAgricole\Etransactions\Block\Info\Etepthreetime';

    /**
     * Availability option
     *
     * @var bool
     */
    protected $_isOffline = false;
    protected $scopeConfig;
    protected $_hasCctypes = true;
    protected $_allowManualDebit = true;
    protected $_allowDeferredDebit = true;
    protected $_allowRefund = true;

    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    public function getReceipentEmail()
    {
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        return $this->scopeConfig->getValue(self::PAYMENT_METHOD_ETEPTHREETIME_XML_PATH, $storeScope);
    }

    /**
     * @return string
     */
    public function getCards()
    {
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        return $this->scopeConfig->getValue(self::PAYMENT_METHOD_ETEPTHREETIME_XML_PATH, $storeScope);
    }
}
