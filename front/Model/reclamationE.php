<?PHP
class Reclamation
{
	private $type;
	private $description;
	private $date_creation;
	private $etat;
	private $utilisateur;
	private $reponse;
	private $mail;
	function __construct($type,$description,$date_creation,$etat,$utilisateur,$reponse,$mail)
	{
		$this->type=$type;
		$this->description=$description;
		$this->date_creation=$date_creation;
		$this->etat=$etat;
		$this->utilisateur=$utilisateur;
		$this->reponse=$reponse;
		$this->mail=$mail;

	}
	function getmail()
	{
		return $this->mail;

	}
	
	function gettype()
	{
		return $this->type;

	}
	function getdescription()
	{
		return $this->description;

	}
	function getDate_creation()
	{
		return $this->date_creation;
	}
	function getEtat()
	{
		return $this->etat;
	}
	function getUtilisateur()
	{
		return $this->utilisateur;
	}
	function getReponse()
	{
		return $this->reponse;
	}

	function settype($type)
	{
		$this->type=$type;
	}

	function setDate_creation($date_creation)
	{
		$this->date_creation=$date_creation;
	}
	function setTarifHoraire($etat)
	{
		$this->etat=$etat;
	}

	function setUtilisateur($utilisateur)
	{
		$this->utilisateur=$utilisateur;
	}
	function setReponse($reponse)
	{
		$this->reponse=$reponse;
	}
	function setDescription($description)
	{
		$this->description=$description;
	}
	
}

?>