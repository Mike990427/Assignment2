<?php
    
    require "Elevator.php";
    require "ElevatorCar.php";

    $elevator1 = new ElevatorNetwork(1);
    $elevator2 = new ElevatorNetwork(2);
    $elevator3 = new ElevatorNetwork(3);
    $elevatorCar = new ElevatorNetwork(4,3);
    echo "Elevator 1 has ID: " . $elevator1->getId() . "<br />";
    echo "Elevator 2 has ID: " . $elevator2->getId() . "<br />";
    echo "Elevator 3 has ID: " . $elevator3->getId() . "<br />";
    echo "Elevator car has ID: " . $elevatorCar->getId() . "<br />";
    echo "Elecator car current Floor: " . $ElevatorCar->getfloor() . "<br />";

    echo "Elevator 1 has status: " . $elevator1->getStatus() . "<br />";
    echo "Elevator 2 has status: " . $elevator2->getStatus() . "<br />";
    echo "Elevator 3 has status: " . $elevator3->getStatus() . "<br />";
    echo "Elevator car has status: " . $elevatorCar->getStatus() . "<br />";

?>