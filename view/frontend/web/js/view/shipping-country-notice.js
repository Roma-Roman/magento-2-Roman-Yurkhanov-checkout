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
        'ko',
        'uiElement',
        'jquery',
        'Magento_Checkout/js/model/quote',
        'domReady!',
    ],
    function (ko, Component, $, quote) {
        'use strict';
        return Component.extend({
            defaults: {
                template: 'RomanYurkhanov_Checkout/shipping-country-notice',
                countryId: ko.observable(),
            },
            config: window.checkoutConfig.shippingCountryNotice,
            initialize: function () {
                this._super();
                this.isEnabled();
                this.methodTitle();
                this.message();
                this.countryName();
                quote.shippingAddress.subscribe(this.shippingAddressObserver.bind(this));
            },

            isEnabled: function () {
                if (this.config.isEnabled) {
                    return this.config.isEnabled;
                }
            },

            methodTitle: function () {
                if (this.config.methodTitle) {
                    return this.config.methodTitle;
                }
            },

            message: function () {
                if (this.config.message) {
                    return this.config.message;
                }
            },

            countryName: function () {
                if (this.config.countryName) {
                    return this.config.countryName;
                }
            },

            shippingAddressObserver: function (address) {
                const countryId = this.config.countryId;

                if (address.countryId === countryId) {
                    this.countryId(true);
                } else {
                    this.countryId(false);
                }
            }
        });
    }
);
