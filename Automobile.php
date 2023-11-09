<?php

class Automobile {
    private $vehicleMake;
    private $vehicleModel;
    private function __construct($make, $model) {
        $this->vehicleMake = $make;
        $this->vehicleModel = $model;
    }

    public function getMakeAndModel() {
        return $this->vehicleMake.  " " . $this->vehicleModel;
    }

    public static function createAutomobile($make, $model) {
        if(!$make && !$model && is_string($make) && is_string($model)) {
            return new Automobile($make, $model);
        }
        return NULL;
    }

}