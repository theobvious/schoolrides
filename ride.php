<?php
    require_once 'car.php';
    require_once 'driver.php';

    class Ride {
        private $car;
        private $driver;
        private $addresses;

        function __CONSTRUCT($array) {
            $this->car = $array['car'];
            $this->driver = $array['driver'];
            $this->addresses = $array['addresses'];
        }

        function setCar($car) {
            $this->car = $car;
        }

        function setDriver($driver) {
            $this->driver = $driver;
        }

        function setAddresses($addresses) {
            $this->addresses = $addresses;
        }

        function getCar() {
            return $this->car;
        }

        function getDriver() {
            return $this->driver;
        }

        function getAddresses() {
            return $this->addresses;
        }

        function getRide() {
            return 'Car license plate: ' . 
            $this->car->getPlate() . '<br />' . 'Driver name: ' . 
            $this->driver->getName() . '<br />' . 
            join(', ', $this->addresses);
        }
    }
?>