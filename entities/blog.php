<?PHP
class Blog{
	private $titreBlog;
	private $description;
	private $imageBlog;
	private $marque;
	function __construct($titreBlog,$description,$imageBlog,$marque){
		
		$this->titreBlog=$titreBlog;
		$this->description=$description;
		$this->imageBlog=$imageBlog;
		$this->marque=$marque;
	}
	

	function gettitreBlog(){
		return $this->titreBlog;
	}
	function getdescription(){
		return $this->description;
	}
	function getimageBlog(){
		return $this->imageBlog;
	}
function getmarque(){
		return $this->marque;
	}
	function settitreBlog($titreBlog){
		$this->titreBlog=$titreBlog;
	}
	function setdescription($description){
		$this->description;
	}
	function setimageBlog($imageBlog){
		$this->imageBlog=$imageBlog;
	}
	function setmarque($marque){
		$this->marque=$marque;
	}
	
}

?>