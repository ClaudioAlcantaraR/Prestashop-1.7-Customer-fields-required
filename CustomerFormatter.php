<?php

class CustomerFormatter extends CustomerFormatterCore
{
    public function getFormat()
    {
        $customerGetFormat = parent::getFormat();
        /* Birthday de tipo date y obligatorio*/ 
        $customerGetFormat['birthday']
        ->setType('date')
        ->setRequired(true);
        /* Contraseña obligatoria en el registro*/
        $customerGetFormat['password']
        ->setRequired(true);
        return $customerGetFormat;
    }
}