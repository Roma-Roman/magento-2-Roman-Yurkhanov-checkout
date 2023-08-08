<?php
/**
 * Roman Yurkhanov
 *
 * Email :: ferrumdp@gmail.com
 * Linkedin :: https://www.linkedin.com/in/roman-yurkhanov-322035122/
 *
 * Copyright 2023-present Roman Yurkhanov. All rights reserved.
 * See license.txt for license details.
 */

namespace RomanYurkhanov\Checkout\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Config
{
    private ScopeConfigInterface $scopeConfig;
    private const CONFIG_CHECKOUT_CMS_BLOCK_ENABLED = 'romanyurkhanov_checkout/cms_block/enabled';
    private const CONFIG_CHECKOUT_CMS_BLOCK_ID = 'romanyurkhanov_checkout/cms_block/cms_block_id';
    private const CONFIG_CHECKOUT_PREFERRED_PAYMENT_METHOD_ENABLED = 'romanyurkhanov_checkout/preferred_payment_method/enabled';
    private const CONFIG_CHECKOUT_PREFERRED_SHIPPING_METHOD_ENABLED = 'romanyurkhanov_checkout/preferred_shipping_method/enabled';
    private const CONFIG_CHECKOUT_SHIPPING_COUNTRY_NOTICE_ENABLED = 'romanyurkhanov_checkout/shipping_country_notice/enabled';
    private const CONFIG_CHECKOUT_SHIPPING_COUNTRY_NOTICE_METHOD_TITLE = 'romanyurkhanov_checkout/shipping_country_notice/method_title';
    private const CONFIG_CHECKOUT_SHIPPING_COUNTRY_NOTICE_MESSAGE = 'romanyurkhanov_checkout/shipping_country_notice/message';
    private const CONFIG_CHECKOUT_SHIPPING_COUNTRY_NOTICE_COUNTRY_ID = 'romanyurkhanov_checkout/shipping_country_notice/country_id';
    private const CONFIG_CHECKOUT_SHIPPING_PROPOSAL_ENABLED = 'romanyurkhanov_checkout/shipping_proposal/enabled';
    private const CONFIG_CHECKOUT_SHIPPING_PROPOSAL_GUEST = 'romanyurkhanov_checkout/shipping_proposal/guest';
    private const CONFIG_CHECKOUT_SHIPPING_PROPOSAL_CUSTOMER = 'romanyurkhanov_checkout/shipping_proposal/customer';

    public function __construct(
        ScopeConfigInterface $scopeConfig
    )
    {
        $this->scopeConfig = $scopeConfig;
    }

    public function isCmsBlockEnabled()
    {
        return $this->scopeConfig->getValue(
            self::CONFIG_CHECKOUT_CMS_BLOCK_ENABLED,
            ScopeInterface::SCOPE_STORE
        );
    }

    public function cmsBlockId()
    {
        return $this->scopeConfig->getValue(
            self::CONFIG_CHECKOUT_CMS_BLOCK_ID,
            ScopeInterface::SCOPE_STORE
        );
    }

    public function isPreferredPaymentMethodEnabled()
    {
        return $this->scopeConfig->getValue(
            self::CONFIG_CHECKOUT_PREFERRED_PAYMENT_METHOD_ENABLED,
            ScopeInterface::SCOPE_STORE
        );
    }

    public function isPreferredShippingMethodEnabled()
    {
        return $this->scopeConfig->getValue(
            self::CONFIG_CHECKOUT_PREFERRED_SHIPPING_METHOD_ENABLED,
            ScopeInterface::SCOPE_STORE
        );
    }

    public function isShippingCountryNoticeEnabled()
    {
        return $this->scopeConfig->getValue(
            self::CONFIG_CHECKOUT_SHIPPING_COUNTRY_NOTICE_ENABLED,
            ScopeInterface::SCOPE_STORE
        );
    }

    public function shippingCountryNoticeMethodTitle()
    {
        return $this->scopeConfig->getValue(
            self::CONFIG_CHECKOUT_SHIPPING_COUNTRY_NOTICE_METHOD_TITLE,
            ScopeInterface::SCOPE_STORE
        );
    }

    public function shippingCountryNoticeMessage()
    {
        return $this->scopeConfig->getValue(
            self::CONFIG_CHECKOUT_SHIPPING_COUNTRY_NOTICE_MESSAGE,
            ScopeInterface::SCOPE_STORE
        );
    }

    public function shippingCountryNoticeCountryId()
    {
        return $this->scopeConfig->getValue(
            self::CONFIG_CHECKOUT_SHIPPING_COUNTRY_NOTICE_COUNTRY_ID,
            ScopeInterface::SCOPE_STORE
        );
    }

    public function isShippingProposalEnabled()
    {
        return $this->scopeConfig->getValue(
            self::CONFIG_CHECKOUT_SHIPPING_PROPOSAL_ENABLED,
            ScopeInterface::SCOPE_STORE
        );
    }

    public function shippingProposalGuest()
    {
        return $this->scopeConfig->getValue(
            self::CONFIG_CHECKOUT_SHIPPING_PROPOSAL_GUEST,
            ScopeInterface::SCOPE_STORE
        );
    }

    public function shippingProposalCustomer()
    {
        return $this->scopeConfig->getValue(
            self::CONFIG_CHECKOUT_SHIPPING_PROPOSAL_CUSTOMER,
            ScopeInterface::SCOPE_STORE
        );
    }
}
