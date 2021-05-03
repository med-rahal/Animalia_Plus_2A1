<?PHP
	class Accessoire{
		private ?int $id_accessoire = null;
		private ?string $nom_accessoire = null;
		private ?string $ref_accessoire = null;
		private ?string $categorie_accessoire = null;
		private ?string $type = null;
		private ?string $prix = null;
		private ?string $image;
		
		function __construct(string $nom_accessoire, string $ref_accessoire, string $categorie_accessoire, string $type, string $prix, string $image){
			
			$this->nom_accessoire=$nom_accessoire;
			$this->ref_accessoire=$ref_accessoire;
			$this->categorie_accessoire=$categorie_accessoire;
			$this->type=$type;
			$this->prix=$prix;
			$this->image=$image;
		}
		
		function getId(): int{
			return $this->id_accessoire;
		}
		function getNom(): string{
			return $this->nom_accessoire;
		}
		function getRef(): string{
			return $this->ref_accessoire;
		}
		function getType(): string{
			return $this->type;
		}
		function getCat(): string{
			return $this->categorie_accessoire;
		}
		function getPrix(): string{
			return $this->prix;
		}
		function getImage(): string{
			return $this->image;
		}

		function setNom(string $nom_accessoire): void{
			$this->nom_accessoire=$nom_accessoire;
		}
		function setPrenom(string $ref_accessoire): void{
			$this->ref_accessoire;
		}
		function setLogin(string $type): void{
			$this->type=$type;
		}
		function setEmail(string $categorie_accessoire): void{
			$this->categorie_accessoire=$categorie_accessoire;
		}
		function setPassword(string $prix): void{
			$this->prix=$prix;
		}
	}
?>