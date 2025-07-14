<?php

namespace OrderBundle\Test\Validators;

use PHPUnit\Framework\TestCase;
use OrderBundle\Validators\NotEmptyValidator;

class NotEmptyValidatorTest extends TestCase{
    public function testShouldNotBeValidWhenValueIsEmpty(){
        $emptyValue = "";
        $norEmptyValidator = new NotEmptyValidator($emptyValue);

        $isValid = $norEmptyValidator->isValid();
    }
}

?>