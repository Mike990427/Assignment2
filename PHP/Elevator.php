<?php
	
    class Elevator {
		private $idNumber; 		
		private $status;
		private $otherInfor;
		
		//public function __construct(int $id, int $floor) {
		public function __construct(int $id, int $status=1, $otherInfo = 'NA') {   // MODIFIED
			$this->idNumber = $id;
			$this->status = $status;
		}	
		public function getId(): int {
			return $this->idNumber;
		}	
		public function getStatus(): int {
			return $this->status; 
		}
		public function setStatus($status): int{
			$this->status = $status;
		}

	}
  


?>