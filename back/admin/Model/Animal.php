<?PHP
	class Animal{
		private ?int $id = null;
		private ?string $nom = null;
		private ?string $prix = null;
		private ?string $race = null;
		private ?string $id_client = null;
		private ?string $nom_categorie = null;
		private ?string $image;
		
		function __construct(string $nom, string $prix, string $race, string $id_client, string $nom_categorie,string $image){
			
			$this->nom=$nom;
			$this->prix=$prix;
			$this->race=$race;
			$this->id_client=$id_client;
			$this->nom_categorie=$nom_categorie;
			$this->image=$image;
		}
		
		function getId(): int{
			return $this->id;
		}
		function getNom(): string{
			return $this->nom;
		}
		function getPrix(): string{
			return $this->prix;
		}
		function getId_vendeur(): string{
			return $this->id_client;
		}
		function getRace(): string{
			return $this->race;
		}
		function getCategorie_animal(): string{
			return $this->nom_categorie;
		}
		function getImage(): string{
			return $this->image;
		}

		function setNom(string $nom): void{
			$this->nom=$nom;
		}
		function setPrix(string $prix): void{
			$this->prix;
		}
		function setId_vendeur(string $id_client): void{
			$this->id_client=$id_client;
		}
		function setRace(string $race): void{
			$this->race=$race;
		}
		function setCategorie_animal(string $nom_categorie): void{
			$this->nom_categorie=$nom_categorie;
		}
	}
?>