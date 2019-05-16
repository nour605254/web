function verifier() {
  var x=form1.titre_pub.value;
  var y=form1.image.value;
  var z=form1.date_d_pub.value;
  var w=form1.date_f_pub.value;
  var t=form1.desc_pub.value;
  if(x.length==0 || y.length==0 || z.length==0 || w.length==0 || t.length==0){
    alert("erreur il faut remplir les informations");}
     if (x.length>10) {
      alert("erreur titre 10 cacarctére maximum");
    }
   

for (var i = 0; i <= x.length; i++) 
{
  if(x[i]<"a" || x[i]>"z")
  {
    alert("titre promotion :Veuillez saisir un nom valide");
  }break; 
}





    if (z>w) {
      alert("erreur date debut akber men date fin")
    }
     if (t.length>50) {
      alert("erreur description 50 cacarctére maximum");
    }
    
    
}
