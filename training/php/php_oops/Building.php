<?php
interface FireExitnguisherInterface {
    function setFireExtinguisher($fireNumber);
}
interface AssemblyPointInterface{
    function setAssemblyPoint($countAssembly);
}
    class Building implements FireExitnguisherInterface, AssemblyPointInterface{
        public $buildingName;
        public $fireExitnguisher;
        public $countAssembly;
        
        function __construct($name)
        {
            $this->buildingName = $name;
            return $this->buildingName;
        }

        function setFireExtinguisher($fireNumber){
            $this->fireExitnguisher = $fireNumber;
        }

        function setAssemblyPoint($countAssembly){
            $this->countAssembly = $countAssembly;
        }

        public static function fireExtinguisherError(){
            return "Hey Please have at least one Fire Extinguisher";
        }
        
        function displayStatastics(){
            if($this->fireExitnguisher < 1){
                return self::fireExtinguisherError();
            } else{
                return array($this->buildingName, $this->fireExitnguisher, $this->countAssembly);
            }
        }
    }
?>