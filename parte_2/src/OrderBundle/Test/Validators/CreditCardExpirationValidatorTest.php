<?php

namespace OrderBundle\Test\Validators;

use PHPUnit\Framework\TestCase;
use OrderBundle\Validators\CreditCardExpirationValidator;

class CreditCardExpirationValidatorTest extends TestCase{
    public function testExpirationDateShouldBeValid(){
        $futureDate = "12/12/2025";        
        $validator = new CreditCardExpirationValidator($futureDate);
        $isValid = $validator ->isValid();
        $this->assertTrue($isValid);
    }
    public function testExpirationDateShouldBeInvalidWhenInPast() {
        $pastDate = "12/12/2020";
        $validator = new CreditCardExpirationValidator($pastDate);
        
        $this->assertFalse($validator->isValid());
    }
}

?>