<?php 
/**
 * 
 */
class likes
{

	private $id;
	private $id_Form;
	private $id_User;




	
	function __construct($id,$id_Form,$id_User)
	{
		$this->id=$id;
		$this->id_Form=$id_Form;
		$this->id_User=$id_User;
	}
	
	function getid(){return $this->id;}
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

							public function set_id_User($id_User)
		{
			$this->id_User = $id_User;
		}
					
}
 ?>
