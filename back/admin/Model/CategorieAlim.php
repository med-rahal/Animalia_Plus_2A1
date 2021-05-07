<?PHP
	class Categorie{
		private ?int $id_categorie = null;
		private ?string $nom_categorie = null;
		private ?string $description = null;
		
		
		function __construct(string $nom_categorie, string $description){
			
			$this->nom_categorie=$nom_categorie;
			$this->description=$description;
			
		}
		
		function getId(): int{
			return $this->id_categorie;
		}
		function getNom(): string{
			return $this->nom_categorie;
		}
		function getDes(): string{
			return $this->description;
		}
		

		function setNom(string $nom_categorie): void{
			$this->nom_categorie=$nom_categorie;
		}
		function setDes(string $description): void{
			$this->description;
		}
		
	}
?>