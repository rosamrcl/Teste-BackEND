<?php
class DiscountCalculatorTEST{
    public function ShouldApply_WhenValueIsAboveMinimumTest(){
        $discountCalculator = new DiscountCalculator();

        $totalValue = 130;
        $totalWithdiscount = $discountCalculator->apply(value:$totalValue);

        $expectedValue =110;
        $this->asserEquals($expectedValue, $totalWithdiscount);
    }
    public function asserEquals($expectedValue, $actualValue){
        if ($expectedValue !==$actualValue){
            $message = 'Expected: ' . $expectedValue . 'but got: '.$actualValue;
            throw new Exception(message:$message);
        }
        echo "Test passed! \n";
    }
}

?>