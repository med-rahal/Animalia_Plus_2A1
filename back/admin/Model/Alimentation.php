<?PHP
	class Alimentation{
		private ?int $id_alimentation = null;
		private ?string $nom_alimentation = null;
		private ?string $ref_alimentation = null;
		private ?string $categorie_alimentation = null;
		private ?string $type = null;
		private ?string $prix = null;
		private ?string $image;
		
		function __construct(string $nom_alimentation, string $ref_alimentation, string $categorie_alimentation, string $type, string $prix, string $image){
			
			$this->nom_alimentation=$nom_alimentation;
			$this->ref_alimentation=$ref_alimentation;
			$this->categorie_alimentation=$categorie_alimentation;
			$this->type=$type;
			$this->prix=$prix;
			$this->image=$image;
		}
		
		function getId(): int{
			return $this->id_alimentation;
		}
		function getNom(): string{
			return $this->nom_alimentation;
		}
		function getRef(): string{
			return $this->ref_alimentation;
		}
		function getType(): string{
			return $this->type;
		}
		function getCat(): string{
			return $this->categorie_alimentation;
		}
		function getPrix(): string{
			return $this->prix;
		}
		function getImage(): string{
			return $this->image;
		}

		function setNom(string $nom_alimentation): void{
			$this->nom_alimentation=$nom_alimentation;
		}
		function setPrenom(string $ref_alimentation): void{
			$this->ref_alimentation;
		}
		function setLogin(string $type): void{
			$this->type=$type;
		}
		function setEmail(string $categorie_alimentation): void{
			$this->categorie_alimentation=$categorie_alimentation;
		}
		function setPassword(string $prix): void{
			$this->prix=$prix;
		}
	}
?>