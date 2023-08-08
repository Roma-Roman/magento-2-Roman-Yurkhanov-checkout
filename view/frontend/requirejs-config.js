/**
 * Roman Yurkhanov
 *
 * Email :: ferrumdp@gmail.com
 * Linkedin :: https://www.linkedin.com/in/roman-yurkhanov-322035122/
 *
 * Copyright 2023-present Roman Yurkhanov. All rights reserved.
 * See license.txt for license details.
 */

const config = {
    config: {
        mixins: {
            'Magento_Checkout/js/action/select-payment-method': {
                'RomanYurkhanov_Checkout/js/action/select-payment-method-mixin': true
            },
            'Magento_Checkout/js/model/checkout-data-resolver': {
                'RomanYurkhanov_Checkout/js/model/checkout-data-resolver-mixin': true
            },

            'Magento_Checkout/js/action/select-shipping-method': {
                'RomanYurkhanov_Checkout/js/action/select-shipping-method-mixin': true
            }
        }
    }
};
