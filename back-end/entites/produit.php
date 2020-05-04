<?PHP
class produit{
	private $id;
	private $nom;
	private $prix;
	private $quantite;
	private $image;
	private $id_cat;
	
	function __construct($id,$nom,$prix,$quantite,$image,$id_cat){
		$this->id=$id;
		$this->nom=$nom;
		$this->prix=$prix;
		$this->quantite=$quantite;
		$this->image=$image;
      	$this->id_cat=$id_cat;

	}
	function getid(){
		return $this->id;
	}
	
	function getnom(){
		return $this->nom;
	}
	function getprix(){
		return $this->prix;
	}
	function getquantite(){
		return $this->quantite;
	}
	
		function getimage(){
		return $this->image;
	}
		
	
		function getid_cat(){
		return $this->id_cat;
	}
	
	}

?>