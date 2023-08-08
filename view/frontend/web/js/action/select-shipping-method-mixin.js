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

    return function (selectShippingMethod) {
        return wrapper.wrap(selectShippingMethod, function (_super, shippingMethod) {
            const isEnabled = window.checkoutConfig.preferredShipping.isEnabled;

            if (shippingMethod && isEnabled) {
                /**
                 * before shippingMethod set to quote
                 */
                localStorage.setItem('romanyurkhanov_checkout_preferred_shipping', JSON.stringify(shippingMethod));
            }
            _super(shippingMethod);
            if (shippingMethod && isEnabled) {
                /**
                 * after shippingMethod set to quote
                 */
                localStorage.setItem('romanyurkhanov_checkout_preferred_shipping', JSON.stringify(shippingMethod));
            }
        });
    };
});
