<?php
	include "conexao.php";
	// referencia o namespace
	use Dompdf\Dompdf;
	

	// inclui o autoloader
	require_once  '../dompdf/autoload.inc.php'; 
	$html = '<h1 align="center">Relatório Frequencia</h1>';
	$html .= '
	<style>
	body {
		font-family: Arial,sans-serif;
	}

			table {
				border-collapse:collapse;
				white-space: nowrap;		
			}

			tbody{
				font-family: Arial,sans-serif;
       			margin: 0;
       			padding: 0;
       			border: none;
       			font-size: 13px;
       			
			}
	</style>';
	$html .= '<table border = 1 width = 100%>';
    $html .= '<thead>';
    $html .= '<tr align="center">';
	$html .= '<td>Mes</td>';
	$html .= '<td>Nome</td>';
	$html .= '</tr>';
	$html .= '<tr align="center">';
			$html .= '<td>Mes</td>';
			$html .= '<td>Dia</td>';
            $html .= '<td>Horario Inicial</td>';
            $html .= '<td>Horario Final</td>';			
		$html .= '</tr>';
	$html .= '</thead>';
	$html .='<tbody>';

		$html .='</tbody>';

	
	$html .='</table>';
	
	


	//instancia
	$dompdf = new Dompdf;
	//converter o html
	$dompdf->loadhtml($html);
	//definir tamanho e orientação do papel
	$dompdf->setPAPER('A4', 'portrait');
	//rederizando o html
	$dompdf->render();
	//enviar para o browser
	$dompdf->stream(
			'relatório_frequencia.pdf', array('Attachment' => false)
	);

?>