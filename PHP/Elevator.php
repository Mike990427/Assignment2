<?php
	// class Elevator {
	// 	private $idNumber; 		// Don't let user re-set this once created (no 'Set' function)
	// 	private $floorNumber;
				
	// 	public function __construct(int $id, int $floor) {
	// 		$this->idNumber = $id;
	// 		$this->floorNumber = $floor; 
	// 	}	
	// 	public function getId(): int {
	// 		return $this->idNumber;
	// 	}	
	// 	public function getFloor(): int {
	// 		return $this->floorNumber; 
	// 	}
	// 	public function setFloor(int $floor){
	// 		$this->floorNumber = $floor;
	// 	}
	// }

    // $elevator1 = new Elevator(1, 3);    // elevator1 has id=1 and starts on floor 3
    // echo "Elevator " . $elevator1->getId() . " is located on floor " . $elevator1->getFloor();
    // $elevator1->setFloor(1); 			// Send elevator to floor 1
    // echo "<br />";
    // echo "Elevator " . $elevator1->getId() . " is NOW located on floor " . $elevator1->getFloor();


    class Elevator {
		private $idNumber; 		
		private $floorNumber;
		private static $lastId = 100;   			// ADDED: STATIC PROPERTY
		
		//public function __construct(int $id, int $floor) {
		public function __construct(int $floor) {   // MODIFIED
			//$this->idNumber = $id;
			$this->idNumber = ++self::$lastId; 		// MODIFIED 
			$this->floorNumber = $floor; 
		}	
		public static function getLastId(): int {	// ADDED: STATIC METHOD TO RETRIEVE 
			return self::$lastId; 					//        STATIC PROPERTY
		}
		public function getId(): int {
			return $this->idNumber;
		}	
		public function getFloor(): int {
			return $this->floorNumber; 
		}
		public function setFloor(int $floor){
			$this->floorNumber = $floor;
		}
	}
    $elevator1 = new Elevator(5);    // id=100, floor=5 
    $elevator2 = new Elevator(6);    // id=101, floor=6 
    $elevator3 = new Elevator(7);    // id=102, floor=7 
    echo "Elevator 1 has ID: " . $elevator1->getId() . "<br />";
    echo "Elevator 2 has ID: " . $elevator2->getId() . "<br />";
    echo "Elevator 3 has ID: " . $elevator3->getId() . "<br />";
    echo "Referenced by class - The last ID that was assigned was: " . Elevator::getLastId() . "<br />";
    echo "Referenced by object - The last ID that was assigned was: " . $elevator1::getLastId();  


?>