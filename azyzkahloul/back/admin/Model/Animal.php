<?PHP
	class Utilisateur{
		private ?int $id = null;
		private ?string $nom = null;
		private ?string $prix = null;
		private ?string $race = null;
		private ?string $id_vendeur = null;
		private ?string $categorie_animal = null;
		
		function __construct(string $nom, string $prix, string $race, string $id_vendeur, string $categorie_animal){
			
			$this->nom=$nom;
			$this->prix=$prix;
			$this->race=$race;
			$this->id_vendeur=$id_vendeur;
			$this->categorie_animal=$categorie_animal;
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
			return $this->id_vendeur;
		}
		function getRace(): string{
			return $this->race;
		}
		function getCategorie_animal(): string{
			return $this->categorie_animal;
		}

		function setNom(string $nom): void{
			$this->nom=$nom;
		}
		function setPrix(string $prix): void{
			$this->prix;
		}
		function setId_vendeur(string $id_vendeur): void{
			$this->id_vendeur=$id_vendeur;
		}
		function setRace(string $race): void{
			$this->race=$race;
		}
		function setCategorie_animal(string $categorie_animal): void{
			$this->categorie_animal=$categorie_animal;
		}
	}
?>