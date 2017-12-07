<?php
    class Car {
        private $plate;
    
        function __CONSTRUCT($plate) {
            $this->plate = $this->setPlate($plate);
            }
    
        function setPlate($plate) {
            $this->plate = $plate;
            }
    
        function getPlate() {
            
            return $this->plate;
            }
        }

?>