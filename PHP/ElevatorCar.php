<?php

require 'Elevator.php';


class Can_Subnetwork extends Elevator{

    public $currentFloor;

    public function _construct($id, int $status=1 , text $otherInfo, $curFloor){
        parent::__construct($id, $status, $otherInfo);
        $this->currentFloor = $curFloor;
    }

    public function getfloor(): int {
        return $this->currentFloor;
    }

}


    $elevator1 = new Elevator(1);
    $elevator2 = new Elevator(2);
    $elevator3 = new Elevator(3);
    $elevatorCar = new Elevator(4,1,'NA',3);
    echo "Elevator 1 has ID: " . $elevator1->getId() . "<br />";
    echo "Elevator 2 has ID: " . $elevator2->getId() . "<br />";
    echo "Elevator 3 has ID: " . $elevator3->getId() . "<br />";
    echo "Elevator car has ID: " . $elevatorCar->getId() . "<br />";
    //echo "Elecator car current Floor: " . $elevatorCar->getfloor() . "<br />";

    echo "Elevator 1 has status: " . $elevator1->getStatus() . "<br />";
    echo "Elevator 2 has status: " . $elevator2->getStatus() . "<br />";
    echo "Elevator 3 has status: " . $elevator3->getStatus() . "<br />";
    echo "Elevator car has status: " . $elevatorCar->getStatus() . "<br />";
  



?>