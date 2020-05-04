<?PHP
class best_customer{
	public $id_customer;
	public $first_name;
	public $last_name;
	public $email;
	public $money_spent;
	function __construct($id_customer,$first_name,$last_name,$email,$money_spent){
		$this->id_customer=$id_customer;
		$this->first_name=$first_name;
		$this->last_name=$last_name;
		$this->email=$email;
		$this->money_spent=$money_spent;
	}
	
	function getIdcustomer(){
		return $this->id_customer;
	}
	function getFirstname(){
		return $this->first_name;
	}
	function getLastname(){
		return $this->last_name;
	}
	function getEmail(){
		return $this->email;
	}
	function getMoneyspent(){
		return $this->money_spent;
	}


	function setIdcustomer($id_customer){
		$this->id_customer=$id_customer;
	}
	function setFirstname($first_name){
		$this->first_name=$first_name;
	}
	function setLastname($last_name){
		$this->last_name=$last_name;
	}
	function setEmail($email){
		$this->email=$email;
	}
	function setMoneyspent($money_spent){
		$this->money_spent=$money_spent;
	}
	
}

?>
<?PHP
class best_product{
	public $id_product;
	public $name;
	public $quantity_sold;
	public $price_sold;
	public $sales;
	function __construct($id_product,$name,$quantity_sold,$price_sold,$sales){
		$this->id_product=$id_product;
		$this->name=$name;
		$this->quantity_sold=$quantity_sold;
		$this->price_sold=$price_sold;
		$this->sales=$sales;
	}
	
	function getIdproduct(){
		return $this->id_product;
	}
	function getName(){
		return $this->name;
	}
	function getQuantitysold(){
		return $this->quantity_sold;
	}
	function getPricesold(){
		return $this->price_sold;
	}
	function getSales(){
		return $this->sales;
	}


	function setIdproduct($id_product){
		$this->id_product=$id_product;
	}
	function setName($name){
		$this->name=$name;
	}
	function setQuantitysold($quantity_sold){
		$this->quantity_sold=$quantity_sold;
	}
	function setPricesold($price_sold){
		$this->price_sold=$price_sold;
	}
	function setSales($sales){
		$this->sales=$sales;
	}
	
}

?>

<?PHP
class best_categorie{
	public $id_categorie;
	public $name;
	public $total_sold;
	function __construct($id_categorie,$name,$total_sold){
		$this->id_categorie=$id_categorie;
		$this->name=$name;
		$this->total_sold=$total_sold;
	}
	
	function getIdcategorie(){
		return $this->id_categorie;
	}
	function getName(){
		return $this->name;
	}
	function getTotalsold(){
		return $this->total_sold;
	}


	function setIdcategorie($id_categorie){
		$this->id_categorie=$id_categorie;
	}
	function setName($name){
		$this->name=$name;
	}
	function setTotalsold(){
		$this->total_sold=$total_sold
	}	
}

?>