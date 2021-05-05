<?PHP
	class plante{
		private ?int $ref_plante = null;
		private ?string $nom_categorie = null;
		private ?string $nom_plante = null;
		private ?int $prix = null;
		private ?string $date_plante = null;
		private ?string $image = null;
		private ?int $id_vendeur = null;
		
		function __construct(string $nom_categorie, string $nom_plante, int $prix, string $date_plante, string $image, int $id_vendeur){
			
			$this->nom_categorie=$nom_categorie;
			$this->nom_plante=$nom_plante;
			$this -> prix=$prix;
			$this -> date_plante=$date_plante;
			$this -> image=$image;
			$this -> id_vendeur=$id_vendeur;
		}
		
		function getref_plante(): int{
			return $this->ref_plante;
		}
		function getnom_categorie(): string{
			return $this->nom_categorie;
		}
		function getnom_plante(): string{
			return $this->nom_plante;
		}
		function getprix(): int{
			return $this->prix;
		}
		function getdate_plante(): string{
			return $this->date_plante;
		}
		function getimage(): string{
			return $this->image;
		}
		function getid_vendeur(): int{
			return $this->id_vendeur;
		}
		

		function setref_plante(): void{
			$this->ref_plante;
		}
		function setnom_categorie(): void{
			$this->nom_categorie;
		}
		function setnom_plante(): void{
			$this->nom_plante;
		}
		function setprix(): void{
			$this->prix;
		}
		function setdate_plante(): void{
			$this->date_plante;
		}
		function setimage(): void{
			$this->image;
		}
		function setid_vendeur(): void{
			$this->id_vendeur;
		}
	}
?>