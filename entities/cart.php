<?php 
    class cart  {
        public $id;
        public $cid;
        public $pid;
        public $title;
        public $quantity;
        public $totalAmount;
        public $dbConn;

        function setId($id) { $this->id = $id; }
        function getId() { return $this->id; }
        function setCid($cid) { $this->cid = $cid; }
        function getCid() { return $this->cid; }
        function setPid($pid) { $this->pid = $pid; }
        function getPid() { return $this->pid; }
        function setTitle($title) { $this->title = $title; }
        function getTitle() { return $this->title; }
        function setQuantity($quantity) { $this->quantity = $quantity; }
        function getQuantity() { return $this->quantity; }
        function setTotalAmount($totalAmount) { $this->totalAmount = $totalAmount; }
        function getTotalAmount() { return $this->totalAmount; }


        public function __construct($conn) {
            $this->dbConn = $conn;
        }




       
    }
?>