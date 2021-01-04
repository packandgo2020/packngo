<?php
class User
{
	private	$id;
	private $nom;
	private $prenom;
 	private $mail;
	private $mdp;
	private $role;
	private $username;
	function __construct($id,$nom,$prenom,$mail,$mdp,$role,$username,$datedebut,$datefin)
	{
		$this->id=$id;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->mail=$mail;
		$this->mdp=$mdp;
		$this->role=$role;
		$this->username=$username;
	}
		function __construct($nom,$prenom,$mail,$mdp,$role,$username,$datedebut,$datefin)
	{
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->mail=$mail;
		$this->mdp=$mdp;
		$this->role=$role;
		$this->username=$username;
	}

	public function getid(){return $this->id;}
	public function getnom(){return $this->nom;}
	public function getprenom(){return $this->prenom;}
	public function getmail(){return $this->mail;}
	public function getmdp(){return $this->mdp;}
	public function getrole(){return $this->role;}
	public function getusername(){return $this->username;}
		public function set_id($id)
		{
			$this->id = $id;
		}
public function set_nom($nom)
		{
			$this->nom = $nom;
		}
		public function set_prenom($prenom)
		{
			$this->prenom = $prenom;
		}
				public function set_mail($mail)
		{
			$this->mail = $mail;
		}
						public function set_mdp($mdp)
		{
			$this->mdp = $mdp;
		}
								public function set_role($role)
		{
			$this->role = $role;
		}
										public function set_username($username)
		{
			$this->username = $username;
		}
}

?>