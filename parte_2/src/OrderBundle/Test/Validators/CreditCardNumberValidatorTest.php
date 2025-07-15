<?php
namespace OrderBundle\Test\Validators;

use PHPUnit\Framework\TestCase;
use OrderBundle\Validators\CreditCardNumberValidator;


class CreditCardNumberValidatorTest extends testCase{
    public function testNumberValidator(){
        $credit = "1234567891011121";
        $creditnumber = new CreditCardNumberValidator($credit);
        $isValid = $creditnumber ->isValid();
        $this->assertTrue($isValid);
    }
    public function testNotNumberValidator(){
        $credit = "a";
        $creditnumber = new CreditCardNumberValidator($credit);
        $isValid = $creditnumber ->isValid();
        $this->assertfalse($isValid);
    }
}
?>