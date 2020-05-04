<?php 
  
 
    class transactionC                                                                         extends transaction  
    {

        public function saveTransaction() {
            $sql = "INSERT INTO `commandes`(`id`, `cid`, `quantity`, `amount`, `orderStatus`, `createdOn`) VALUES (null, :cid, :quantity, :amount, :orderStatus, :cdate)";
            $stmt = $this->dbConn->prepare($sql);

            $stmt->bindParam(':cid', $this->cId);
            $stmt->bindParam(':quantity', $this->quantity);
            $stmt->bindParam(':amount', $this->amount);
            $stmt->bindParam(':orderStatus', $this->orderStatus);
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

        public function updateTransaction() {
            $sql = "UPDATE `commandes` SET `orderStatus` =:orderStatus WHERE id =:tid AND cid = :cid";
            $stmt = $this->dbConn->prepare($sql);

            $stmt->bindParam(':cid', $this->cId);
            $stmt->bindParam(':tid', $this->id);
            $stmt->bindParam(':orderStatus', $this->orderStatus);

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




   public function getAlltransactions() {
            $sql  = "SELECT * FROM commandes  ";
            $stmt = $this->dbConn->prepare($sql);
            $stmt->execute();
            $transactions = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $transactions;  
        }
   public function getAlltransactionsAD() {
            $sql  = "SELECT * FROM commandes ORDER BY amount DESC ";
            $stmt = $this->dbConn->prepare($sql);
            $stmt->execute();
            $transactions = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $transactions;  
        }
   public function getAlltransactionsanD() {
            $sql  = "SELECT * FROM commandes ORDER BY createdOn DESC ";
            $stmt = $this->dbConn->prepare($sql);
            $stmt->execute();
            $transactions = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $transactions;  
        }
   public function getAlltransactionsAA() {
            $sql  = "SELECT * FROM commandes ORDER BY amount ASC ";
            $stmt = $this->dbConn->prepare($sql);
            $stmt->execute();
            $transactions = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $transactions;  
        }
   public function getAlltransactionsanA() {
            $sql  = "SELECT * FROM commandes ORDER BY createdOn ASC ";
            $stmt = $this->dbConn->prepare($sql);
            $stmt->execute();
            $transactions = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $transactions;  
        }

    /*   public function getTransactions() {
            $sql  = "SELECT 
                        t.id, 
                        t.quantity, 
                        t.amount, 
                        t.orderStatus, 
                        t.createdOn, 
                        c.nom 
                    FROM 
                        commandes t 
                        JOIN user c ON c.id = t.cid";

            $stmt = $this->dbConn->prepare($sql);
            $stmt->bindParam('cid', $this->cid);
            $stmt->execute();
            $transactions = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $transactions;   
        }*/

        public function getOrderStatusById($statusId) {
            switch ($statusId) {
                case 0:
                    return 'Initiated';
                    break;
                case 1:
                    return 'Success';
                    break;
                case 2:
                    return 'Aborted';
                    break;
                case 3:
                    return 'Failed';
                    break;
            }

        }
     
    }
 ?>