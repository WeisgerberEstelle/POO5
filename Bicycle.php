<?php 
    require_once 'Vehicle.php';

    class Bicycle extends Vehicle implements Lightable
    {        
        public function switchOn(): bool
        {
            if ($this->currentSpeed > 10) {

                return true;
            } else {

                return false;
            }            
        }

        public function switchOff(): bool
        {
            return false;
        }
    }

?>   


