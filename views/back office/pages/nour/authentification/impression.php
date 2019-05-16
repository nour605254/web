<?php
include "C:/wamp64/www/git/web/core/nour/client/ClientCore.php";
$client1Controller=new ClientCore();
$listeClients=$client1Controller->afficherClients();
require ('db.php');


ob_start();
?>
<page backtop="20mm">
	 <h1> Donnée Client </h1>
		<table style="width:100%;border: 2px dashed " >
		<tr>

	  <th scope="col">Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Email</th>
      <th scope="col">Pwd</th>
      <th scope="col">Adresse</th>
      <th scope="col">Numéro</th>
													     
													</tr>
													
		<?php

		foreach($listeClients as $row) {
			?>
		  <tr>
			<td> <?PHP echo $row['nom']; ?></td> 
			<td> <?PHP echo $row['prenom']; ?></td> 
			<td> <?PHP echo $row['email']; ?></td> 
			<td> <?PHP echo $row['pwd']; ?></td> 
			<td> <?PHP echo $row['adresse']; ?></td> 
			<td> <?PHP echo $row['numero']; ?></td> 
												      
												              
												    </tr>
			<?php  
		}

?>
	</table>


</page>

<?php
$content= ob_get_clean();
require('imppdf/html2pdf.class.php');
try{
$pdf=new html2pdf('p','A4','fr','true','UTF-8');
$pdf->pdf->SetDisplayMode('fullpage');

$pdf->writeHTML($content);
//$pdf->pdf->IncludeJS('print(true)');
$pdf->Output('test.pdf');
}
catch(HTML2PDF_exception $e)
{
	die($e);
}

?>