<?php 


	class customer  
	 {
public $id;
		public $name;
		public $email;
		public $mobile;
		public $address;
		public $createdOn;
		public $dbConn;

		public function setId($id) { $this->id = $id; }
public		function getId() { return $this->id; }
public		function setName($name) { $this->name = $name; }
public		function getName() { return $this->name; }
	public	function setEmail($email) { $this->email = $email; }
	public	function getEmail() { return $this->email; }
	public	function setMobile($mobile) { $this->mobile = $mobile; }
	public	function getMobile() { return $this->mobile; }
	public	function setAddress($address) { $this->address = $address; }
	public	function getAddress() { return $this->address; }
	public	function setCreatedOn($createdOn) { $this->createdOn = $createdOn; }
	public	function getCreatedOn() { return $this->createdOn; }

		public function __construct($conn) {
			$this->dbConn = $conn;
		}





	}
 ?>