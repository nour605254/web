<?php
include "../../../core/eventC.php";
require ('db.php');


ob_start();
?>
<page backtop="20mm">
	 <h1> Toutes les event </h1>
		<table style="width:100%;border: 2px dashed " >
		<tr>

														  <th scope="col">idevent</th>
													      <th scope="col">titre</th>
													      <th scope="col">image</th>
													     
													</tr>
													
		<?php
	$livraisonc=new eventC();
$listlivraisons=$livraisonc->afficherEvents();
		foreach($listlivraisons as $row) {
			?>
		  <tr>
												      <td> <?PHP echo $row['id_event']; ?></td> 
												      <td> <?PHP echo $row['titre_event']; ?> </td>
												      <td style="width: 20%"><img style="width: 20%; height: 10%;" src="<?PHP echo $row['image']; ?>" ></td>
												      
												              
												    </tr>
			<?php  
		}

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