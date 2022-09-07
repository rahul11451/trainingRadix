<?php

    class Square implements Shape{
        public function calculateArea($length)
        {
            return $length**2;
        }
    }
?>