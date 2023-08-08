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
        'jquery',
        'ko',
        'uiComponent'
    ], function ($, ko, Component) {
        'use strict';

        return Component.extend({
            defaults: {
                template: 'RomanYurkhanov_Checkout/cms_block'
            },
            config: window.checkoutConfig.checkoutCmsBlock,
            initialize: function () {
                this._super();
                this.isCmsBlockEnabled = ko.observable(this.isEnabled());
                this.cmsBlockContent = ko.observable(this.cmsBlock());
            },

            isEnabled: function () {
                if (this.config.isEnabled) {
                    return this.config.isEnabled;
                }
            },
            cmsBlock: function () {
                if (this.config.cmsBlock) {
                    return this.config.cmsBlock;
                }
                return '';
            }
        });
    }
);
