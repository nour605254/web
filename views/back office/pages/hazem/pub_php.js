function verifier() {
  var x=form1.titre_pub.value;
  var y=form1.image.value;
  var z=form1.date_d_pub.value;
  var w=form1.date_f_pub.value;
  var t=form1.desc_pub.value;
  if(x.length==0 || y.length==0 || z.length==0 || w.length==0 || t.length==0){
    alert("erreur il faut remplir les informationssssssssssdezdze");}
     if (x.length>10) {
      alert("erreur titre 10 cacarctére maximum");
    }
    if (z>w) {
      alert("erreur date debut akber men date fin")
    }
     if (t.length>50) {
      alert("erreur description 50 cacarctére maximum");
    }
    
    
}
