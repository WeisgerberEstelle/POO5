<?php 

require_once 'Vehicle.php';

    class Car extends Vehicle implements Lightable
    {   
        public const ALLOWED_ENERGIES = [

            'fuel',
    
            'electric',
    
        ]; 
        
        private string $energy;    
    
        private int $energyLevel; 
        
        private bool $hasParkBrake = true;
    
        public function __construct(string $color, int $nbSeats, string $energy)    
        {    
            parent::__construct($color, $nbSeats);     
            $this->energy = $energy;    
        }

        public function switchOn()
        {
            return true;
        }

        public function switchOff()
        {
            return false;
        }
    
        public function getEnergy(): string    
        {    
            return $this->energy;
    
        }    
    
        public function setEnergy(string $energy): Car    
        {    
            if (in_array($energy, self::ALLOWED_ENERGIES)) {

                $this->energy = $energy;
        
            }
        
            return $this;
    
        }    
    
        public function getEnergyLevel(): int    
        {    
            return $this->energyLevel;
    
        }    
    
        public function setEnergyLevel(int $energyLevel): void    
        {    
            $this->energyLevel = $energyLevel;
    
        }

        public function setParkBrake(bool $hasParkBrake)
        {
            $this->hasParkBrake = $hasParkBrake;
        }

        public function getParkBrake(): bool
        {
            return $this->hasParkBrake;
        }

        public function start()
        {
            if ($this->hasParkBrake) {

                throw new Exception("frein à main enclenché");
         
            }
            echo "vroom vroom";
        }
    
    }   


