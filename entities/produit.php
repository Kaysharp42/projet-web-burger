<?php 
	class produit 
	 {
		public $id;
		public $nom;
		public $price;
		public $quantite;
		public $image;
		public $dbConn;

	public function setId($id) { $this->id = $id; }
	public	function getId() { return $this->id; }
	public	function setTitle($title) { $this->title = $title; }
	public	function getTitle() { return $this->title; }
	public	function setPrice($price) { $this->price = $price; }
	public	function getPrice() { return $this->price; }
	public	function setquantite($quantite) { $this->quantite = $quantite; }
	public	function getquantite() { return $this->quantite; }
	public	function setImage($image) { $this->image = $image; }
	public	function getImage() { return $this->image; }

		public function __construct($conn) {
			$this->dbConn = $conn;
		}


	}
 ?>