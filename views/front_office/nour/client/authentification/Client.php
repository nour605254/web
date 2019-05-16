<?php 
include 'dbconfig.php';
class Client{
	private $id;
	private $email;
    private $pwd;
	private $adresse;
	private $nom;
	private $prenom;
    public $conn;	

	public function __construct($email,$pwd,$conn)
	{
		$this->email=$email;
		$this->pwd=$pwd;
		$c=new Database();
		$this->conn=$c->connexion();
		
	}
	function getId()
	{
		return $this->id;
	}
	function getEmail()
	{
		return $this->email;
	}
    function getPWD()
	{
		return $this->pwd;
		
	}
	 function getAdresse()
	{
		return $this->adresse;
		
	}
	 function getNom()
	{
		return $this->nom;
		
	}
	 function getPrenom()
	{
		return $this->prenom;
		
	}

	public function Logedin($conn,$email,$pwd)
	{
		$req="select * from client where email='$email' && pwd='$pwd'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}



	}
	
	

	?>