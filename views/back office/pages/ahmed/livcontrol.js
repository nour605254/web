function test(){
	var x=f.id_livr.value;
	var y=f.nom_livr.value;
	var z=f.prenom_livr.value;
	var c=f.nb_livr.value;
var b=f.email.value;
	if(y.length==0 || x.length==0 || z.length==0 || c.length==0 || b.length==0 )
	{
		alert("Il faut remplir Tout les champs!");
		return false;
		
	}
	


}