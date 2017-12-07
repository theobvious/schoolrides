<?php
    class Driver {
        private $name;

        function __CONSTRUCT($name) {
            $this->name = $this->setName($name);
        }

        function setName($name) {
            $this->name = $name;
        }

        function getName() {
            return $this->name;
        }
    }

?>