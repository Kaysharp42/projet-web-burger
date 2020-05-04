<?php 
	/**
	 * 
	 */
	class transaction	{
		public $id;
		public $cId;
		public $quantity;
		public $amount;
		public $orderStatus;
		public $createdOn;
        public $dbConn;

	 public function __construct($conn){
       
        $this->dbConn=$conn;        

    }

		public function setId($id) { $this->id = $id; }
		public function getId() { return $this->id; }
		function setCid($cId) { $this->cId = $cId; }
		function getCid() { return $this->cId; }
		function setQuantity($quantity) { $this->quantity = $quantity; }
		function getQuantity() { return $this->quantity; }
		function setAmount($amount) { $this->amount = $amount; }
		function getAmount() { return $this->amount; }
		public function setOrderStatus($orderStatus) { $this->orderStatus = $orderStatus; }
		public function getOrderStatus() { return $this->orderStatus; }
		function setCreatedOn($createdOn) { $this->createdOn = $createdOn; }
		function getCreatedOn() { return $this->createdOn; }

		

		
	}
 ?>