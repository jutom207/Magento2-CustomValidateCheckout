define([
    'jquery'
    ],
    function ($) {
    'use strict';

    return function (Component) {
        var result = Component;
        result["validate-phone-plus"] = {
            handler : function (value) {
            	var regEx = /^[+]?\d+$/;
                return regEx.test(value);
            },
            message : $.mage.__('Please enter a valid phone number. For example +12345678.')
        };
        return result;
    }
});
