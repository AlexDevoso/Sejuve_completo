<?php

			include "conexao.php";
			session_start();
			$verifica = $_SESSION['login'][0];
  			$seleciona = "SELECT equipeid_fk from equipe_evento where login = '$verifica'";
  			$resus = mysqli_query($conexao, $seleciona);
  			$verificaid = mysqli_fetch_row($resus);
  			$str = implode($verificaid);
			//mostrar id do evento
			$seleciona2 = "SELECT idevento_fk from equipe_evento where login = '$verifica'";
  			$resus2 = mysqli_query($conexao, $seleciona2);
  			$verificaid2 = mysqli_fetch_row($resus2);
			$str2 = implode($verificaid2);
				//acaba aqui  

			$mostrarlogoevento = "SELECT logoevento from evento where idevento = '$str2'";
			$resusmostrar = mysqli_query($conexao, $mostrarlogoevento);
			$dadoslogo = mysqli_fetch_array($resusmostrar);

	// referencia o namespace
	use Dompdf\Dompdf;
	

	// inclui o autoloader
	require_once  '../dompdf/autoload.inc.php'; 
	

	$sql = "SELECT * FROM atleta where equipeid_fk = '$str'";
	$sql2 = "SELECT * FROM comissao_tecnica where equipeid_fk = '$str'";
	$result = mysqli_query($conexao, $sql);
	$result2 = mysqli_query($conexao, $sql2);

	$sqlequipe = "SELECT * from equipe where equipeid = '$str'";
	$resultequipe = mysqli_query($conexao, $sqlequipe);
	$dadosequipe = mysqli_fetch_array($resultequipe);
	$nomelogo1 = $dadoslogo['logoevento'];
	$logoequipe = $dadosequipe['logoequipe'];
	$html = '<div id="imglogo">
				<img src="../imagens/500x500.png"  style="width:100px; height:100px;">
				<img src="../imagens/'.$nomelogo1.'" style="width:100px; height:100px;" id="imglogo2">
				<img src="../imagens/'.$logoequipe.'" style="width:100px; height:100px;" id="imglogo3">
				
			</div> ';
	$html .= '<h1 align="center">Relatório</h1>';
	while ($dadosequipe = mysqli_fetch_assoc($resultequipe)) {
		$html .='<h2 align="center" > EQUIPE: '.$dadosequipe['nomeequipe'].'</h2>';
		$html .='<h3 align="center"> RESPONSAVEL: '.$dadosequipe['nomeresponsavel'].'</h3>';
	}
	
	$html .= '<h2 align="center">Atletas<h2>';
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
				#imglogo{
					position: relative;
						
				}
				#imglogo2{
					margin-left: 28%;
				}
				#imglogo3{
					margin-left: 28%;
				}
	</style>';
	$html .= '<table border = 1 width = 100%>';
	$html .= '<thead>';
		$html .= '<tr align="center">';
			$html .= '<td>Nome do Atleta</td>';
			$html .= '<td>Data de Nascimento</td>';
			$html .= '<td>Rg do Atleta</td>';
			$html .= '<td>Naturalidade do Atleta</td>';			
		$html .= '</tr>';
	$html .= '</thead>';
	$html .='<tbody>';
	while ($linha = mysqli_fetch_assoc($result)) {
		$html .='<tr align="center"><td>'.$linha['nome_atleta'].'</td>';
		$html .='<td>'.$linha['data_nascimento_atleta'].'</td>';
		$html .='<td>'.$linha['rg_atleta'].'</td>';
		$html .='<td>'.$linha['naturalidade_atleta'].'</td></tr>';
		$html .='</tbody>';
	}

	
	$html .='</table>';

	$html .= '<h2 align="center">Comissão Tecnica<h2>';
	$html .= '<table border = 1 width = 100%>';
	$html .= '<thead>';
		$html .= '<tr align="center">';
			$html .= '<td>Nome</td>';
			$html .= '<td>Função</td>';			
		$html .= '</tr>';
	$html .= '</thead>';
	$html .='<tbody>';
	while ($linha2 = mysqli_fetch_assoc($result2)) {
		
		$html .='<tr align="center" ><td>'.$linha2['nome'].'</td>';
		$html .='<td>'.$linha2['funcao'].'</td></tr>';

		$html .='</tbody>';
	}

	
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
			'relatório_atleta.pdf', array('Attachment' => false)
	);

?>