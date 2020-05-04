<?php 
	/**
	 * 
	 */
	class produit_transC                          extends produit_trans
    {

		      public function bookSeats() {
            $sql = "INSERT INTO `commandes_p`(`id`, `tid`, `wid`, `quantity`, `createdOn`) VALUES (null, :tid, :wid, :quantity, :cdate)";
            $stmt = $this->dbConn->prepare($sql);

            $stmt->bindParam(':tid', $this->tId);
            $stmt->bindParam(':wid', $this->wId);
            $stmt->bindParam(':quantity', $this->quantity);
            $stmt->bindParam(':cdate', $this->createdOn);

            try {
                if($stmt->execute()) {
                    return $this->dbConn->lastInsertId();
                } else {
                    return false;
                }
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }



        public function getproduit_transsByTid() {
            $sql  = "SELECT 
                         
                        ws.quantity, 
                        ws.createdOn, 
                        w.nom,
                        w.id, 
                        w.prix, 
                        w.image,
                        c.nom
                    FROM 
                        commandes_p ws 
                        JOIN commandes t ON ws.tid = t.id
                        JOIN produit w ON w.id = ws.wid
                        JOIN user c ON c.id = t.cid
                    WHERE 
                        ws.tid = :tid";

            $stmt = $this->dbConn->prepare($sql);
            $stmt->bindParam('tid', $this->tId);

            $stmt->execute();
            $produit_transs = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $produit_transs;   
        }
	}
 ?>