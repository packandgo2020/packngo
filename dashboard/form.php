<?php 
/**
 * 
 */
class form 
{


	private $id;
	private $titre;
	private $image;
	private $contenu;
	private $likes;
	private $Date;
	private $id_User;




	
	function __construct($id,$titre,$image,$contenu,$likes,$Date,$id_User)
	{
		$this->id=$id;
		$this->titre=$titre;
		$this->image=$image;
		$this->contenu=$contenu;
		$this->likes=$likes;
		$this->Date=$Date;
		$this->id_User=$id_User;
	}
	
	function getid(){return $this->id;}
		function gettitre(){return $this->titre;}
	function getimage(){return $this->image;}
	function getcontenu(){return $this->contenu;}
	function getlikes(){return $this->likes;}
	function getDate(){return $this->Date;}
	function getid_User(){return $this->id_User;}
	public function set_id($id)
		{
			$this->id = $id;
		}
			public function set_titre($titre)
		{
			$this->titre = $titre;
		}
public function set_image($image)
		{
			$this->image = $image;
		}
		public function set_contenu($contenu)
		{
			$this->contenu = $contenu;
		}
				public function set_likes($likes)
		{
			$this->likes = $likes;
		}
						public function set_Date($Date)
		{
			$this->Date = $Date;
		}
							public function set_id_User($id_User)
		{
			$this->id_User = $id_User;
		}
					
}
 ?>
