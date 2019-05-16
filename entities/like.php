<?PHP
class like{
	private $id;
	private $numBlog;
	private $user_id;
	function __construct($id,$numBlog,$user_id){
		
		$this->id=$id;
		$this->numBlog=$numBlog;
		$this->user_id=$user_id;
	}
	

	function getid(){
		return $this->id;
	}
	function getnumBlog(){
		return $this->numBlog;
	}
	function getuser_id(){
		return $this->user_id;
	}
	

	function setid($id){
		$this->id=$id;
	}
	function setnumBlog($numBlog){
		$this->numBlog=$numBlog;
	}
	function setuser_id($user_id){
		$this->user_id=$user_id;
	}
	
	
}

?>