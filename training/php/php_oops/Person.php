<?php
    abstract class Person {
        public $name;
        public $age;
        public $gender;


        function __construct($name, $age, $gender)
        {
            $this->name = $name;
            $this->age = $age;
            $this->gender = $gender;
        }

        abstract public function introduce();
        function greet($name){
            return 'Hello'.$name;
        }
    }

    class Child extends Person {
        public $aspiration = array();
        function __construct($name, $age, $gender, $aspiration)
        {
            $this->name = $name;
            $this->age = $age;
            $this->gender = $gender;
            $this->aspiration = $aspiration;
        }

        function introduce()
        {
            return "Hi, i'm ".$this->name . " and I am ". $this->age . " years old.";
        }

        function greet($name){
            return "Hi ".$name.", let's play!";
        }

        function sayDreams(){
            return "I would like to be an ". join(" ",$this->aspiration)." when I grow up.";
        }
    }


    class Developer extends Person {
        public $position;
        function __construct($name, $age, $gender, $position)
        {
            $this->name = $name;
            $this->age = $age;
            $this->gender = $gender;
            $this->position = $position;
        }

        function introduce()
        {
            return "Hello, my name is ".$this->name . " I am ". $this->age . " years old and I am an ". $this->position . "." ;
        }

        function greet($name){
            return "Hello , I'm  ".$name.", nice to meet you.";
        }

        function describeJob(){
            return "I am currently working as an ". $this->position.".";
        }
    }
?>