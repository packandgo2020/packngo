<?php 
/**
 * 
 */
class comments
{

	private $id;
	private $contenu;
	private $id_Form;
	private $id_User;




	
	function __construct($id,$contenu,$id_Form,$id_User)
	{
		$this->id=$id;
			$this->contenu=$contenu;
		$this->id_Form=$id_Form;
		$this->id_User=$id_User;
	}
	
	function getid(){return $this->id;}
	function getcontenu(){return $this->contenu;}

		function getid_Form(){return $this->id_Form;}
	function getid_User(){return $this->id_User;}
	public function set_id($id)
		{
			$this->id = $id;
		}
			public function set_id_Form($id_Form)
		{
			$this->id_Form = $id_Form;
		}
				public function set_contenu($contenu)
		{
			$this->contenu = $contenu;
		}

							public function set_id_User($id_User)
		{
			$this->id_User = $id_User;
		}
					
}
 ?>
