<?php
class abonne
{

	private $adresse_mail;



	function __construct($adresse_mail){
		$this->adresse_mail=$adresse_mail;}

		function get_mail()
		{

			return $this->adresse_mail;
		}
		private $date_a;
///!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!/// don't touch...
function get_adresse()
{
	return $this->adresse_mail;
}
function get_date()
{
	return $this->date_a;
}
function set_adresse($adresse_mail)
{
	$this->adresse_mail=$adresse_mail;
}

function set_date($date_a)
{
	$this->date_a=$date_a;
}

}

?>