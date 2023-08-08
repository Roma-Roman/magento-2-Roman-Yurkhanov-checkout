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

use Magento\Checkout\Model\ConfigProviderInterface;
use Magento\Framework\View\LayoutInterface;
use Magento\Directory\Model\CountryFactory;

class ConfigProvider implements ConfigProviderInterface
{
    private Config $config;
    private LayoutInterface $layout;
    private $cmsBlock;
    private CountryFactory $countryFactory;

    public function __construct(
        Config          $config,
        LayoutInterface $layout,
        CountryFactory $countryFactory
    )
    {
        $this->config = $config;
        $this->layout = $layout;
        $this->cmsBlock = $this->constructCmsBlock();
        $this->countryFactory = $countryFactory;
    }

    public function constructCmsBlock()
    {
        $cmsBlockId = $this->config->cmsBlockId();
        return $this->layout->createBlock('Magento\Cms\Block\Block')->setBlockId($cmsBlockId)->toHtml();
    }

    public function getConfig()
    {
        $isCmsBlockEnabled = $this->config->isCmsBlockEnabled();

        $isPreferredPaymentMethodEnabled = $this->config->isPreferredPaymentMethodEnabled();

        $isPreferredShippingMethodEnabled = $this->config->isPreferredShippingMethodEnabled();

        $isShippingCountryNoticeEnabled = $this->config->isShippingCountryNoticeEnabled();
        $shippingCountryNoticeMethodTitle = $this->config->shippingCountryNoticeMethodTitle();
        $shippingCountryNoticeMessage = $this->config->shippingCountryNoticeMessage();
        $shippingCountryNoticeCountryId = $this->config->shippingCountryNoticeCountryId();
        $shippingCountryNoticeCountryName = $this->countryFactory->create()->loadByCode($shippingCountryNoticeCountryId)->getName();

        $isShippingProposalEnabled = $this->config->isShippingProposalEnabled();
        $shippingProposalGuest = $this->config->shippingProposalGuest();
        $shippingProposalCustomer = $this->config->shippingProposalCustomer();

        return [
            'checkoutCmsBlock' => [
                'isEnabled' => (bool)$isCmsBlockEnabled,
                'cmsBlock' => $this->cmsBlock
            ],
            'preferredPayment' => [
                'isEnabled' => (bool)$isPreferredPaymentMethodEnabled
            ],
            'preferredShipping' => [
                'isEnabled' => (bool)$isPreferredShippingMethodEnabled
            ],
            'shippingCountryNotice' => [
                'isEnabled' => (bool)$isShippingCountryNoticeEnabled,
                'methodTitle' => $shippingCountryNoticeMethodTitle,
                'message' => $shippingCountryNoticeMessage,
                'countryId' => $shippingCountryNoticeCountryId,
                'countryName' => $shippingCountryNoticeCountryName
            ],
            'shippingProposal' => [
                'isEnabled' => (bool)$isShippingProposalEnabled,
                'guest' => $shippingProposalGuest,
                'customer' => $shippingProposalCustomer
            ]
        ];
    }
}
