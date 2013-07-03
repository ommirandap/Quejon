<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head></head>
<body>
<?php 

$string = file_get_contents("datos.json");
$json_a = json_decode($string, true);

$aux_array = array("Comunas");

foreach ($json_a as $person_name => $person_a){
	for($i=1; $i<40460; $i++){
		//print("<br>");
		//print("<p>RBD: ");
		//print_r($person_a[$i]["rbd"]);

				
		//print("<p>Nombre: ");		
		//print_r($person_a[$i]["nombre_establecimiento"]);
		//print("<p>Comuna: ");		
		//print_r($person_a[$i]["nombre_comuna"]);
		//print("<p>Provincia: ");		
		//print_r($person_a[$i]["nombre_deprov"]);
		//print("<p>Region: ");		
		//print_r($person_a[$i]["nombre_region"]);
		if(isset($person_a[$i]["rbd"]) && isset($person_a[$i]["nombre_comuna"]))
		array_push($aux_array, $person_a[$i]["nombre_comuna"]);
		//print("<p>Dependencia: ");		
		//print_r($person_a[$i]["dependencia"]);
		//print("<p>Nivel de enseñanza: ");		
		//print_r($person_a[$i]["nivel_ensenanza"]);
		//print("<p>Nivel de Enseñanza Agregado: ");		
		//print_r($person_a[$i]["nivel_ensenanza_agregado"]);
		//print("<hr>");
		
	}
}

print_r(array_unique($aux_array));

?>
</body>
</html>
