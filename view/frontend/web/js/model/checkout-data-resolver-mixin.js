/**
 * Roman Yurkhanov
 *
 * Email :: ferrumdp@gmail.com
 * Linkedin :: https://www.linkedin.com/in/roman-yurkhanov-322035122/
 *
 * Copyright 2023-present Roman Yurkhanov. All rights reserved.
 * See license.txt for license details.
 */

define([
    'underscore',
    'mage/utils/wrapper',
    'Magento_Checkout/js/checkout-data',
    'Magento_Checkout/js/model/payment-service',
    'Magento_Checkout/js/action/select-payment-method',
    'Magento_Checkout/js/action/select-shipping-method'
], function (_, wrapper, checkoutData, paymentService, selectPaymentMethodAction, selectShippingMethodAction) {
    'use strict';

    return function (checkoutDataResolver) {
        const resolvePaymentMethod = wrapper.wrap(
            checkoutDataResolver.resolvePaymentMethod,
            function (originalResolvePaymentMethod) {
                const isEnabled = window.checkoutConfig.preferredPayment.isEnabled;
                let availablePaymentMethods = paymentService.getAvailablePaymentMethods();
                /**
                 * Check if the item exists in local storage,
                 * get the last chosen payment method,
                 * preselect this payment method.
                 */
                if (localStorage.getItem('romanyurkhanov_checkout_preferred_payment') != null && availablePaymentMethods && availablePaymentMethods.length > 0 && isEnabled) {
                    let preferredPayment = localStorage.getItem('romanyurkhanov_checkout_preferred_payment');
                    let lastChosenPaymentMethod = JSON.parse(preferredPayment).method;
                    let preselectedPaymentMethod = availablePaymentMethods.find(({method}) => method === lastChosenPaymentMethod);

                    selectPaymentMethodAction(preselectedPaymentMethod);
                }

                return originalResolvePaymentMethod(availablePaymentMethods);
            }
        )

        const resolveShippingRates = wrapper.wrap(
            checkoutDataResolver.resolveShippingRates,
            function (originalResolveShippingRates, ratesData) {
                /**
                 * Check if the item exists in local storage,
                 * get the last chosen shipping method,
                 * preselect this sipping method.
                 */
                const isEnabled = window.checkoutConfig.preferredShipping.isEnabled;

                if (localStorage.getItem('romanyurkhanov_checkout_preferred_shipping') != null && isEnabled) {
                    let preferredShipping = localStorage.getItem('romanyurkhanov_checkout_preferred_shipping');
                    let lastChosenShippingMethod = JSON.parse(preferredShipping).method_code;
                    let preselectedShippingMethod = ratesData.find(({method_code}) => method_code === lastChosenShippingMethod);

                    selectShippingMethodAction(preselectedShippingMethod);
                }

                return originalResolveShippingRates(ratesData);
            }
        );

        return _.extend(checkoutDataResolver, {
            resolvePaymentMethod: resolvePaymentMethod,
            resolveShippingRates: resolveShippingRates
        });
    };
});
