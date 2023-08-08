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
    'mage/utils/wrapper'
], function (wrapper) {
    'use strict';

    return function (selectPaymentMethod) {
        return wrapper.wrap(selectPaymentMethod, function (_super, paymentMethod) {
            const isEnabled = window.checkoutConfig.preferredPayment.isEnabled;

            if (paymentMethod && isEnabled) {
                /**
                 * before paymentMethod set to quote
                 */
                localStorage.setItem('romanyurkhanov_checkout_preferred_payment', JSON.stringify(paymentMethod));
            }
            _super(paymentMethod);
            if (paymentMethod && isEnabled) {
                /**
                 * after paymentMethod set to quote
                 */
                localStorage.setItem('romanyurkhanov_checkout_preferred_payment', JSON.stringify(paymentMethod));
            }
        });
    };
});
