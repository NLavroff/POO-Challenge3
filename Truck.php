<?php

require_once 'Vehicle.php';

    class Truck extends Vehicle
    {
        private string $energy;
        private int $stockCapacity;
        private int $loading = 0;

        public function __construct(string $color, int $nbSeats, string $energy, int $stockCapacity)
        {
            parent::__construct($color, $nbSeats);
            $this->setEnergy($energy);
            $this->setStockCapacity($stockCapacity);
        }
        public function getEnergy(): string
        {
            return $this->energy;
        }
        public function setEnergy(string $energy)
        {
            $this->energy = $energy;
            return $this;
        }
        public function getStockCapacity(): int
        {
            return $this->stockCapacity;
        }
        public function setStockCapacity(int $stockCapacity)
        {
            $this->stockCapacity = $stockCapacity;
        }
        public function getLoading()
        {
            return $this->loading;
        }
        public function setLoading(int $loading)
        {
            $this->loading = $loading;
            return $this;
        }
        public function isFull(): string
        {
            if($this->loading == $this->stockCapacity)
            {
                return 'full';
            }
            else
            {
                return 'in filling';
            }
        }
    }