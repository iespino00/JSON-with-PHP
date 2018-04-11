<?php 

$pregunta = new stdClass();

//Asignamos propiedades al objeto
$pregunta->titulo = "Altitud del Monte Everest";
$pregunta->categoria = "Cultura";
//para acceder a los valores mas facilmente podemos ponerle indicadores a cada valor (respuesta1, respuesta2, respuesta3).
$pregunta->respuesta = array("respuesta1"=>8400,"respuesta2"=>9500,"respuesta3"=>11200);

$json = json_encode($pregunta);
echo $json;
//Volcamos para su estructura
//var_dump($pregunta);


?>
