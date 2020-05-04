<?php 
	/**
	 * 
	 */
	class produit_trans {
		public $id;
		public $tId;
		public $wId;
		public $quantity;
		public $createdOn;
		public $dbConn;
/* function __construct($id,$tId,$wId,$quantity,$createdOn,$dbConn){
        $this->id=$id;
        $this->tId=$tId;
        $this->wId=$wId;
        $this->quantity=$quantity;
        $this->createdOn=$createdOn;
        $this->dbConn=$dbConn;        

    }*/
		public function setId($id) { $this->id = $id; }
		public function getId() { return $this->id; }
		public function setTid($tId) { $this->tId = $tId; }
		public function getTid() { return $this->tId; }
		public function setWid($wId) { $this->wId = $wId; }
		public function getWid() { return $this->wId; }
		public function setQuantity($quantity) { $this->quantity = $quantity; }
		public function getQuantity() { return $this->quantity; }
		public function setCreatedOn($createdOn) { $this->createdOn = $createdOn; }
		public function getCreatedOn() { return $this->createdOn; }

		public function __construct($conn) {
			$this->dbConn = $conn;
		}

		
	}
 ?>