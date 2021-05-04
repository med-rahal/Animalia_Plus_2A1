<?PHP
	class categorie{
		private ?int $id = null;
		private ?string $nom_categorie = null;
		private ?string $description = null;
		private ?int $duree_vie = null;
		
		function __construct(string $nom_categorie, string $description, int $duree_vie){
			
			$this->nom_categorie=$nom_categorie;
			$this->description=$description;
			$this -> duree_vie=$duree_vie;
		}

		function getId(): int{
			return $this->id;
		}

		function getnom_categorie(): string{
			return $this->nom_categorie;
		}
		function getdescription(): string{
			return $this->description;
		}
		function getduree_vie(): int{
			return $this->duree_vie;
		}
		

		function setnom_categorie(): void{
			$this->nom_categorie;
		}
		function setdescription(): void{
			$this->description;
		}
		function setduree_vie(): void{
			$this->duree_vie;
		}
	}
?>