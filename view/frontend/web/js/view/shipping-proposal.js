/**
 * Roman Yurkhanov
 *
 * Email :: ferrumdp@gmail.com
 * Linkedin :: https://www.linkedin.com/in/roman-yurkhanov-322035122/
 *
 * Copyright 2023-present Roman Yurkhanov. All rights reserved.
 * See license.txt for license details.
 */

define(
    [
        'uiComponent',
        'ko',
        'Magento_Customer/js/model/customer',
    ],
    function (
        Component,
        ko,
        customer,
    ) {
        'use strict';
        return Component.extend({
            defaults: {
                template: 'RomanYurkhanov_Checkout/shipping-proposal'
            },
            isCustomerLoggedIn: customer.isLoggedIn,
            config: window.checkoutConfig.shippingProposal,
            initialize: function () {
                this._super();
                this.isEnabled();
                this.guest();
                this.customer();
            },

            isEnabled: function () {
                if (this.config.isEnabled) {
                    return this.config.isEnabled;
                }
            },

            guest: function () {
                if (this.config.guest) {
                    return this.config.guest;
                }
            },

            customer: function () {
                if (this.config.customer) {
                    return this.config.customer;
                }
            }
        });
    }
);
