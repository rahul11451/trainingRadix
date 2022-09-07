<?php
    class Employee {
        private $firstName;
        private $lastName;
        private $email;
        private $phoneNumber;
        private $birthDate;
        private $gender;
        public $resultArray = array();
        
        function setValueFirstName($firstName){
            $this->firstName = $firstName;
        }
        function setValueLastName($lastName){
            $this->lastName = $lastName;
        }
        function setValueEmail($email){
            $this->email = $email;
        }
        function setValuePhoneNumber($phoneNumber){
            $this->phoneNumber = $phoneNumber;
        }
        function setValueBirthDate($birthDate){
            $this->birthDate = $birthDate;
        }
        function setValueGender($gender){
            $this->gender = $gender;
        }
        function getEmployeeDetails(){
            array_push($this->resultArray, $this->firstName, $this->lastName, $this->email, $this->phoneNumber, $this->birthDate, $this->gender);
            return $this->resultArray;
        }
    }



    // exercise 2

    class MobilePrice {
        private $companyName;
        private $screenSize;
        private $ram;
        private $processor;
        private $pr;
        public $price = 0;

        function __construct($companyName, $screenSize, $ram, $processor)
        {
            $this->companyName = $companyName;
            $this->screenSize = $screenSize;
            $this->ram = $ram;
            $this->processor = $processor;
        }

        function setPrice(){
            switch($this->companyName) {
                case 'samsung':
                    $this->pr = 7000;
                    break;
                case 'moto':
                    $this->pr = 5999;
                    break;
                case 'lenovo':
                    $this->pr = 4000;
                    break;
                case 'nokia':
                    $this->pr = 6100;
                    break;
                default:
                    $this->pr = 7000;
            }

            $this->price = $this->pr * (( $this->screenSize / 4.0 ) + ( $this->ram / 1.0 ) + ( $this->processor / 1.0 ) + 0.05 );
            return $this->price;
        }

        function getPrice() {
            return $this->setPrice();
        }
    }


    // exercise 3

    class BankAccount {

        private $accNo;
        private $accBal;
        public $result = array();

        function setNumber($accNo){
            $this->accNo = $accNo;
        }

        function getNumber(){
            return $this->accNo;
        }

        function setAmount($accBal){
            $this->accBal = $accBal;
        }

        function getAmount(){
            return $this->accBal;
        }

        function summary($interest){
            array_push($this->result,$this->getNumber(), $this->getAmount(), $interest);
            return $this->result;
        }
    }

    class SavingAccount extends BankAccount{
        function addInterest($accBal, $interest){
            $updatedBalance = $accBal + ($accBal * ($interest / 100));
            return $updatedBalance;
        }
    }

    class CurrentAccount extends BankAccount{
        function addInterest($accBal, $interest){
            $updatedBalance = $accBal + ($accBal * ($interest / 100));
            return $updatedBalance;
        }
    }
?>