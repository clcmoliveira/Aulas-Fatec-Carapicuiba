<?php 
	include ("header.php");
	include ("pdo.php");
	//$cons = $_POST[$consulta];
	$achou = false;

	echo'<h2>'.$textConsulta.' de '. $materiais.'</h2>
		<table id="customers">
		<tr>
			<th>Codigo</th>
			<th>Material</th>
			<th>Data de Compra</th>
			<th>Data de Validade</th>
			<th>Tipo</th>
			<th>CRM do Médico</th>
			<th>Data de Uso/Descarte</th>
		</tr>
		<tr>';
		$sql = "SELECT * FROM material, medico, enc_mat where (material.id_med = medico.id_med && material.id_mat = enc_mat.id_mat)";
		$con = $conn->query($sql) or die ($conn);
		while($row = $con->fetch(PDO::FETCH_OBJ)){
        	//if($row->id_pac == $cons || $row->nome == $cons) {
            	echo "<td>" . $row->id_mat . "</td>";
            	echo "<td>" . $row->material . "</td>";
            	echo "<td>" . $row->data_com . "</td>";
            	echo "<td>" . $row->data_val . "</td>";
            	echo "<td>" . $row->tipo . "</td>";
            	echo "<td>" . $row->crm . "</td>";
            	echo "<td>" . $row->data_uso_desc . "</td></tr>";
            	$achou =  true;
        	//}
    	}
		
		if($achou == false) {
        	echo "<td colspan='7'>Não há registros</td>";
    	}
		echo'</tr>
	</table>';
	include ("footer.php");
?>