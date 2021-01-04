<?PHP
	class Utilisateur{
		private  $id = null;
		private  $nom = null;
		private $prenom = null;
		public  $email = null;
		private  $login = null;
        private  $password = null;
        private $telephone= null;
        private $sexe= null;
        private $date=null;
		
		function __construct(string $nom, string $prenom, string $email, string $login, string $password, string $sexe, int $telephone, string $date){
			
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->email=$email;
			$this->login=$login;
            $this->password=$password;
            $this->telephone=$telephone;
            $this->sexe=$sexe;
            $this->date=$date;
		}
		
		function getId(): int{
			return $this->id;
		}
		function getNom(): string{
			return $this->nom;
		}
		function getPrenom(): string{
			return $this->prenom;
		}
		function getLogin(): string{
			return $this->login;
		}
		function getEmail(): string{
			return $this->email;
		}
		function getPassword(): string{
			return $this->password;
		}

		function setNom(string $nom): void{
			$this->nom=$nom;
		}
		function setPrenom(string $prenom): void{
			$this->prenom;
		}
		function setLogin(string $login): void{
			$this->login=$login;
		}
		function setEmail(string $email): void{
			$this->email=$email;
		}
		function setPassword(string $password): void{
			$this->password=$password;
        }
        function getSexe(): string{
			return $this->sexe;
		}

        function getDate(): string{
			return $this->date;
		}

		function setDate(string $date): void{
			$this->date=$date;
        }
        function getTelephone(): int{
			return $this->telephone;
		}

		function setTelphone(string $telephone): void{
			$this->telephone=$telephone;
		}
	}
?>