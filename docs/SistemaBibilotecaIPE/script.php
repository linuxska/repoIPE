<?php
// Escribe un fichero en un array. 
$lineas = file('/Users/linuxska/sfproject/repoIPE/docs/SistemaBibilotecaIPE/MilGenerales.txt');


// Recorre nuestro array, mostrare la linea con dos valores
// Del numero dewey <numero,$linea>___<nombre,$tema>
//http://stackoverflow.com/questions/7211820/update-built-in-vim-on-mac-os-x

$id=1;
foreach ($lineas as $num_linea => $linea) {
	
	$var= strlen($linea); // idea de encontra el ultimo
    //echo ltrim($linea);
     
	$rest = substr($linea, 0,1);  // returns "abcde"
 		
 		if(is_numeric($rest)||is_int($rest)||$rest==".")
			echo $linea;
		else
			echo "";
	//Eliminar espacios
	//echo substr_replace($linea, ",'", 3, 0);
	//Correr primero
	//echo substr_replace($linea, 'INSERT INTO "integer"("number", name, description) VALUES (', 0, 0);
	//Correr despues
	//echo substr_replace($linea, "',null);\n", -1, $var);
	
//Base de datos
//LINE 242: "colonia" character varying(64) NOT NULL CHECK (.),
//LINE 282: "anno" int(4) NOT NULL,

	}
?>
