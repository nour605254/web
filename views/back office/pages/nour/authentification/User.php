<?php 
include 'dbconfig.php';
class User{
	private $email;
    private $pwd;
	private $role;
	private $user_name;
    public $conn;	

	public function __construct($email,$pwd,$conn)
	{
		$this->email=$email;
		$this->pwd=$pwd;
		$c=new Database();
		$this->conn=$c->connexion();
		
	}
	function getLog()
	{
		return $this->email;
	}
    function getPWD()
	{
		return $this->pwd;
		
	}
	 function getRole()
	{
		return $this->role;
		
	}

	function getName()
	{
		return $this->user_name;
		
	}
	
	public function Logedin($conn,$email,$pwd)
	{
		$req="select * from users where user_email='$email' && user_pass='$pwd'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}

	}
	
	

	?>