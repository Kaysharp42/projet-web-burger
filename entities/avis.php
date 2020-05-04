<?PHP
require_once "C:/wamp64/www/web/config.php";
class client{
	private $id_avis;
	private $id_client;
	private $description;
	private $avis;
	function __construct($id_avis,$id_client,$description,$avis){
		$this->id_avis=$id_avis;
		$this->id_client=$id_client;
		$this->description=$description;
		$this->avis=$avis;
	}

	function getid_avis(){
		return $this->id_avis;
	}
	function getid_client(){
		return $this->id_client;
	}
	function getdescription(){
		return $this->description;
	}
	function getavis(){
		return $this->avis;
	}

	}
	function setid_client($id_client){
		$this->id_client=$id_client;
	}
	function setdescription($description){
		$this->description=$description;
	}
	function setavis($avis){
		$this->avis=$avis;
	}

  ?>
