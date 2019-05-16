<?php
ob_start();
include "../../../../core/livraisonC.php";
require ('db.php');

?>

<page backtop="20mm">
	 <h1> Toutes les livraison </h1>
		<table style="width:100%;border: 2px dashed " >
		<tr>

														  <th scope="col">idlivraison</th>
													      <th scope="col">adress</th>
													      <th scope="col">region</th>
													      <th scope="col">date</th>
													    
													</tr>
													
		<?php
	$livraison1=new livraisonC();
$listelivraison=$livraison1->afficherlivraisons();?>
		foreach($listelivraison as $row){
		
		  <tr>
												      <td> <?php echo $row["id_liv"] ; ?></td> 
												      <td> <?php echo $row["adresse_liv"] ; ?></td> 
												       <td> <?php echo $row["region_liv"] ; ?></td> 
												      <td> <?php echo $row["date_liv"] ; ?></td> 
                
												    </tr>}


?>
	</table>


</page>

<?php
$content= ob_get_clean();
require('html2pdf/html2pdf.class.php');
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