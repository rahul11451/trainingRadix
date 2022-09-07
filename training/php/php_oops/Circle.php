<?php

    class Circle implements Shape{
        const PI = 3.14;
        public function calculateArea($length)
        {
            return self::PI *($length**2);
        }
    }
?>