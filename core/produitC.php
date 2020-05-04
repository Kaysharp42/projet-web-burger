<?php 
	class produitC                                                                              extends produit
	{

		public function getAllproduits() {
			$sql  = "SELECT * FROM produit";
			$stmt = $this->dbConn->prepare($sql);
			$stmt->execute();
			$workshops = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $workshops;	
		}

		public function getproduitById() {
			$sql  = "SELECT * FROM produit WHERE id = :wid";
			$stmt = $this->dbConn->prepare($sql);
			$stmt->bindParam('wid', $this->id);
			$stmt->execute();
			$workshop = $stmt->fetch(PDO::FETCH_ASSOC);
			return $workshop;	
	
		}
	
	         public function updateqt() {
            $sql = "UPDATE `produit` SET `quantite` =:quantite WHERE id =:id ";
            $stmt = $this->dbConn->prepare($sql);

           $stmt->bindParam(':id', $this->id);
            $stmt->bindParam(':quantite', $this->quantite);

            try {
                if($stmt->execute()) {
                    return true;
                } else {
                    return false;
                }
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }

	}
 ?>