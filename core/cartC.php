<?php

class cartC                                                                                                                                                            extends cart
{   

       public function addItem() {
            $sql = "INSERT INTO `panier`(`id`, `cid`, `pid`, `title`, `quantity`, `totalAmount`) VALUES (null,:cid,:pid,:title,:quantity,:totalAmount)";
            $stmt = $this->dbConn->prepare($sql);
            $stmt->bindParam(':cid', $this->cid);
            $stmt->bindParam(':pid', $this->pid);
            $stmt->bindParam(':title', $this->title);
            $stmt->bindParam(':quantity', $this->quantity);
            $stmt->bindParam(':totalAmount', $this->totalAmount);
           // $stmt->bindParam(':cdate', $this->createdOn);
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

       /* public function getAllCartItems() {
            $sql  = "SELECT * FROM cart WHERE cid = :cid";
            $stmt = $this->dbConn->prepare($sql);
            $stmt->bindParam('cid', $this->cid);
            $stmt->execute();
            $carts = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $carts;   
        }*/

        public function getAllCartItems() {
            $sql  = "SELECT c.*, w.prix, w.image FROM panier c JOIN produit w on c.pid = w.id WHERE cid = :cid";
            $stmt = $this->dbConn->prepare($sql);
            $stmt->bindParam('cid', $this->cid);
            $stmt->execute();
            $carts = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $carts;   
        }

        public function updateItem() {
            $sql  = "UPDATE `panier` SET `quantity` = :quantity, `totalAmount` = :totalAmount WHERE cid = :cid AND pid = :pid";
            $stmt = $this->dbConn->prepare($sql);
            $stmt->bindParam(':cid', $this->cid);
            $stmt->bindParam(':pid', $this->pid);
            $stmt->bindParam(':quantity', $this->quantity);
            $stmt->bindParam(':totalAmount', $this->totalAmount);
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

 public function removeItem() {
            $sql  = "DELETE FROM `panier` WHERE id = :id";
            $stmt = $this->dbConn->prepare($sql);

            $stmt->bindParam(':id', $this->id);

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

        public function removeAllItems() {
            $sql  = "DELETE FROM `panier` WHERE cid = :cid";
            $stmt = $this->dbConn->prepare($sql);

            $stmt->bindParam(':cid', $this->cid);

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



        public function calculatePrices($cartItems = []) {
            if(count($cartItems) <= 0) {
                $cartItems  = $this->getAllCartItems();
            }

            $subTotal   = 0;
            $tax        = 10;
            $quantity   = 0;
            foreach ($cartItems as $key => $cartItem) {
                $subTotal += $cartItem['totalAmount'];
                $quantity += $cartItem['quantity'];
            }
            $totalPrice = number_format( $this->getTotalAmount(), 2);
            $taxes      = $tax * $quantity;
            $finalPrice = number_format( $subTotal + $taxes, 2 );
            $subTotal   = number_format($subTotal, 2);
            $taxes      = number_format($taxes, 2);

            $data       = [ 'itemCount' => count($cartItems), 'totalPrice'=>$totalPrice, 'subTotal'=>$subTotal, 'taxes'=> $taxes, 'finalPrice'=>$finalPrice];

            return $data;
        }
    }
?>