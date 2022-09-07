<?php

    class OrderPayment{
        public $deliveryDate;
        public $deliveryPrice;
        public $currentDate;
        public $dif;
        public $shippingPrice; 
        public $discount;
        public $tax;
        public $total;

        function __construct($date, $price)
        {
            $this->deliveryDate = $date;
            $this->deliveryPrice = $price;
            
        }

        private function taxCalculation(){
            if($this->deliveryPrice > 500){
                $tax = $this->deliveryPrice * (0.18);
            } else{
                $tax = $this->deliveryPrice * (0.10);
            }
            return $tax;
        }

        private function discount(){
            if($this->deliveryPrice > 1000){
                $discount = $this->deliveryPrice * (0.2);
                if($discount > 200){
                    $discount = 200;
                }
            } elseif($this->deliveryPrice >= 500){
                $discount = $this->deliveryPrice * (0.15);
                if($discount > 150){
                    $discount = 150;
                }
            } else {
                $discount = $this->deliveryPrice * (0.1);
                if($discount > 100){
                    $discount = 100;
                }
            }
            return $discount;
        }
        
        private function shippingPrice(){
                $this->currentDate = date_create(date("Y-m-d"));
                $this->date = date_create($this->deliveryDate);
                $dif = date_diff($this->currentDate, $this->date);
                $dif = $dif->format("%a");
                switch($dif){
                    case 0:
                        $shippingPrice = 500;
                        break;
                    case 1:
                        $shippingPrice = 200;
                        break;
                    case 2:
                        $shippingPrice = 100;
                        break;
                    default:
                        $shippingPrice = 0;
                        break;
                }
                if(date("l",strtotime($this->deliveryDate)) == 'Sunday'){
                    $shippingPrice += 50;
                }
            return $shippingPrice;
        }

        public function calculateCartCheckout(){
            $shippingPrice = $this->shippingPrice();
            $discount = $this->discount();
            $tax = $this->taxCalculation();
            $total = $this->deliveryPrice + $shippingPrice + $tax - $discount;
            return array($shippingPrice, $tax, $discount, $total);

        }
    }

?>