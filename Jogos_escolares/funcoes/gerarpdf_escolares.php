<?php
	include "conexao.php";
	session_start();
	if (isset($_GET['modalidade_coletivaid'])) {
		$modalidade_coletivaid = $_GET['modalidade_coletivaid'];
		}
	if(isset($_SESSION['login_escola'][0])){
		$id = $_SESSION['login_escola'][0];
  		$seleciona = "SELECT escola_id from escola where login = '$id'";
	}else{
		if(isset($_SESSION['login_escola'][1])){
		$id = $_SESSION['login_escola'][1];
  		$seleciona = "SELECT escola_id from escola where escola_id = '$id'";
		}
	}
			
  	$resus = mysqli_query($conexao, $seleciona);
  	$verificaid = mysqli_fetch_row($resus);
  	$str = implode($verificaid);
			

	// referencia o namespace
	use Dompdf\Dompdf;
	

	// inclui o autoloader
	require_once  '../dompdf/autoload.inc.php'; 
	$sqlt = "SELECT * FROM comissao_tecnica_escolares where modalidade_coletivaid_fk = '$modalidade_coletivaid' and escola_id_fk = '$str'";
	$resultecnico = mysqli_query($conexao, $sqlt);
	$dadost = mysqli_fetch_array($resultecnico);
	$sql = "SELECT * FROM aluno where modalidade_coletivaid_fk = '$modalidade_coletivaid' and escola_id_fk = '$str'";
	$result = mysqli_query($conexao, $sql);
	
	$sqlescola = "SELECT * from escola where escola_id = '$str'";
	$resultescola = mysqli_query($conexao, $sqlescola);
	$dadosescola = mysqli_fetch_array($resultescola);
	$logoescola = $dadosescola['imagem'];
	if($dadosescola['imagem'] != null){
		$html = '<div id="imglogo">
		<img src="../imagens/relatorio/educa.png" style="width:130px; height:80px;">
			<img src="../imagens/relatorio/sejuve_logo2.png"  style="width:130px; height:80px;" id="imglogo2">
			<img src="../imagens/relatorio/pre.png"  style="width:130px; height:80px;" id="imglogo3">
			
			<img src="../imagens/relatorio/JOGOS.png" style="width20; height:200px;" id="imglogo4">
		    <img src="../imagens/'.$logoescola.'" style="width:200px; height:200px;" id="imglogo5">
			</div> ';
	}
	else{
			$html = '<div id="imglogo">
			<img src="../imagens/relatorio/educa.png" style="width:130px; height:80px;">
			<img src="../imagens/relatorio/sejuve_logo2.png"  style="width:130px; height:80px;" id="imglogo2">
			<img src="../imagens/relatorio/pre.png"  style="width:130px; height:80px;" id="imglogo3">
			
			<img src="../imagens/relatorio/JOGOS.png" style="width:150px; height:150px;" id="imglogo6">
			</div> ';
				
	}
	
			$html .= '<table id="tb1" border = 1 width = 100%>';
			$html .= '<thead>';
				$html .= '<tr align="center" id="letraTI">';
					$html .= '<td style="width: 553px;">ESCOLA</td>';
					$html .= '<td style="width: 180px;">CÓD.INEP</td>';		
				$html .= '</tr>';
			$html .= '</thead>';
			
			$html .='<tbody>';
				$html .='<tr align="center">';
				$html .='<td>'.$dadosescola['nome'].'</td>';
				$html .='<td>'.$dadosescola['inep'].'</td>';
				$html .='</tbody>';
		
			
			$html .='</table>';
			$html .= '<P id="letraTI" align="center">INFORMAÇÕES SOBRE O ALUNO</P>';
	
			$html .= '<table id="tb2" border = 1 width = 100%>';
			$html .= '<thead>';
				$html .= '<tr align="center" id="letraTI" >';
					$html .= '<td style="width: 400px;">NOME</td> ';
					$html .= '<td style="width: 150px;">NASCIMENTO</td>';
					$html .= '<td style="width: 180px;">RG</td>';
							
				$html .= '</tr>';
			$html .= '</thead>';
			$html .='<tbody>';
			
			while ($linha = mysqli_fetch_assoc($result)) {
				$html .='<tr align="center"><td id="LetraNome">'.$linha['nome'].'</td>';
				$html .='<td>'.date('d/m/Y', strtotime($linha['data_nascimento_aluno'])).'</td>';
				$html .='<td>'.$linha['rg'].'</td>';
				$html .='</tbody>';
			}
		
			$html .= '</table>';
	
	
	$html .= '
	<style>

	body {
		font-family: Arial,sans-serif;
		text-transform: uppercase;
		font-weight: bold;
	}
	
			#tb1{
				margin-top: -1%;
				font-family: Arial,sans-serif;
		text-transform: uppercase;
		font-weight: bold;

			}
			#tb2{
				margin-top: -1%;
				font-family: Arial,sans-serif;
		text-transform: uppercase;
		font-weight: bold;

			}
			table {
				border-collapse:collapse;
				white-space: nowrap;
				font-family: Arial,sans-serif;

			}

			tbody{
				
		        font-family: Arial,sans-serif;
       			margin: 0;
       			padding: 0;
       			border: none;
       			font-size: 9px;
       			
			}
				#imglogo{
					position: relative;
					
				}
				#imglogo2{
					margin-left: 20%;
				}
				#imglogo3{
					margin-left: 20%;
				}
				#imglogo4{
					margin-top: 2%;
					margin-left: 15%;
				}
				#imglogo6{
				    margin-left: 40%;
				}
				#imglogo5{
					margin-top: 2%;
					margin-left: 10%;
				}
			
				#assdiv0{
					position: absolute;
					margin-top: 2%;
					text-align: center;
					
				}
				#assdiv{
					
		            margin-top: -1%;
					
					font-size: 9px;
				}

				#assdiv1{
				
					
					
					
					font-size: 9px;
				}
				#letra{
				
		            font-family: Arial,sans-serif;
					font-size: 9px !important;
					font-weight: bold;
					text-transform: none!important;

				}
				#letraTI{
				
            		font-family: Arial,sans-serif;
				    font-size: 9px !important;
				    font-weight: bold;
				}
				#LetraNome{
				
		    font-family: Arial,sans-serif;
				    text-align: left !importante;
				}
				#final{
				        position: absolute;
				        top: 95%;
				        text-align: center;
				        
				}
				#form{
				background-color:#A9A9A9;
				}
				#form2{
				background-color:blue;
				}
			
	</style>';
	$html .= '<P id="letraTI" align="center">INFORMAÇÕES SOBRE A COMISSÃO TÉCNICA </P>';
	$html .= '<table id="tb2" border = 1 width = 100%>';
	
	$html .= '<thead>';
	
		$html .= '<tr align="center" id="letraTI">';
			$html .= '<td  style="width: 400px;">NOME</td>';
			$html .= '<td  style="width: 150px;">CREF</td>';
			$html .= '<td  style="width: 180px;">RG</td>';
					
		$html .= '</tr>';
	$html .= '</thead>';
	$html .='<tbody>';
	
		$html .='<tr align="center"><td id="LetraNome">'.$dadost['nome_tecnico'].'</td>';
		$html .='<td>'.$dadost['cref_tecnico'].'</td>';
		$html .='<td>'.$dadost['rg_tecnico'].'</td>';
		$html .='</tbody>';
	

	$html .= '</table>';

	$html .= '<div id="assdiv0">';
	$html .= '<p id="letra" align="center">Afirmo que(os) Aluno(s) acima listados, está(ão) matriculado(s) regulamente nesta instituição de ensino</p>';
	$html .= '<div id="assdiv">';
	$html .= '<p >____________________________________________________________________</p>';
	$html .= '<p id="letra">CARIMBO E ASSINATURA DO DIRETOR: </p>';
	$html .= '<p id="letraTI">'.$dadosescola['diretor_escola'].'</p>';
	$html .= '<p>____________________________________________________________________</p>';
	$html .= '<p id="letra" >ASSINATURA DO TÉCNICO: </p>';
	$html .= '<p id="letraTI">'.$dadost['nome_tecnico'].'</p>';
	$html .= '</div>';

	
	$html .= '</div>';
	$html .='<div id="final">';
	$html .='<p id = "letraTI">Secretaria de Esporte e Juventude Municipal de Pentecoste';
	$html .='<div id="form" >';

	$html .='</div>';
	$html .='</div>';

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
			'relatório_alunos.pdf', array('Attachment' => false)
	);

?>