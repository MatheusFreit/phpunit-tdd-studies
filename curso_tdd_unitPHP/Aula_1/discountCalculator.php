<?php

class DiscountCalculator
{
    const minimum_value = 00;

    const discount_value = 20; 

    public function apply($value){
        if($value > self::minimum_value){ 
            return $value - self::discount_value;
        }
        return $value; 
    }

}
