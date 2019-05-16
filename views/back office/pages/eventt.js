function verifier() {
  var x=form1.titre_event.value;
  var y=form1.image.value;
  var z=form1.date_d_event.value;
  var w=form1.date_f_event.value;
  var t=form1.desc_event.value;
  var b=form1.adresse_event.value;
  var s=form1.type_event.value;
  if(x.length==0 || y.length==0 || z.length==0 || w.length==0 || t.length==0 || b.length==0 || s.length==0){
    alert("erreur il faut remplir les informations");}
     if (x.length>20) {
      alert("erreur titre 20 cacarctére maximum");
    }
    if (b.length>20) {
      alert("erreur adresse 20 cacarctére maximum");
    }
     
  
    if (z>w) {
      alert("erreur date debut plus grant que date fin")
    }
     if (t.length>50) {
      alert("erreur description 50 cacarctére maximum");
    }
    
    
}
