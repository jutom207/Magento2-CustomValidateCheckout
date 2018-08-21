<?php
namespace Bss\CustomValidateCheckout\Block\Plugin\Checkout;


class LayoutProcessor
{
    /**
     * @param \Magento\Checkout\Block\Checkout\LayoutProcessor $subject
     * @param array $jsLayout
     * @return array
     */
    public function afterProcess(
        \Magento\Checkout\Block\Checkout\LayoutProcessor $subject,
        array  $jsLayout
    ) {
        
        $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
        ['shippingAddress']['children']['shipping-address-fieldset']['children']['telephone'] = [
            'component' => 'Magento_Ui/js/form/element/abstract',
            'config' => [
                'customScope' => 'shippingAddress',
                'template' => 'ui/form/field',
                'elementTmpl' => 'ui/form/element/input',
                'options' => [],
                'id' => 'telephone'
            ],
            'dataScope' => 'shippingAddress.telephone',
            'label' => 'Telephone ',
            'placeholder' => 'Telephone',
            'provider' => 'checkoutProvider',
            'visible' => true,
            'validation' => [
                'validate-phone-plus' => true,
                'required-entry' => true
            ],
            'sortOrder' => 250,
            'id' => 'telephone'
        ];

        return $jsLayout;
    }
}