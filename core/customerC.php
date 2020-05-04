<?php 
	class customerC                                                                                                                                                                                         extends customer
	{

		public function getCustomerByEmailId() {
			$sql  = "SELECT * FROM user WHERE email = :email";
			$stmt = $this->dbConn->prepare($sql);
			$stmt->bindParam('email', $this->email);
			$stmt->execute();
			$customer = $stmt->fetch(PDO::FETCH_ASSOC);
			return $customer;	
		}

		public function getCustomerById() {
			$sql  = "SELECT * FROM user WHERE id = :id";
			$stmt = $this->dbConn->prepare($sql);
			$stmt->bindParam('id', $this->id);
			$stmt->execute();
			$customer = $stmt->fetch(PDO::FETCH_ASSOC);
			return $customer;	
		}

	}
 ?>