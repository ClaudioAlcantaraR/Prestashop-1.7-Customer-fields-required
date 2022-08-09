<?php

class CustomerAddressFormatter extends CustomerAddressFormatterCore
{
    public function getFormat()
    {
        /* Telefono obligatorio */
        $customerAddressGetFormat = parent::getFormat();
        $customerAddressGetFormat['phone']->setRequired(true);
        return $customerAddressGetFormat;
    }
}