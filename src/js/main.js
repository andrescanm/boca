/*
----------------------------------------------------------------------
Código JavaScript original BOCA
----------------------------------------------------------------------
 BOCA boca-1.5.13. Copyright (c) 2003-2017 Cassio Polpo de Campos
 http://www.ime.usp.br/~cassio/boca                                  
 This program is free software: you can redistribute it and/or modify  
 it under the terms of the GNU General Public License as published by 
 the Free Software Foundation, either version 3 of the License, or 
 (at your option) any later version. A copy of the  
 license can be found with this software or at http://www.gnu.org/licenses/
 ---------------------------------------------------------------------- 
/*
Se retiran funciones que se definen directamente en los archivos originales
de BOCA ya que su definición en el presente fichero causa conflictos.
A futuro se pueden extraer las funciones definidas en otros recursos y centralizar
todo el código JS en el presente archivo
*/
/********************************************************************/

/*Document Ready*/
$(function(){
	/* problem.php
	  
	   Actualizar el nombre de problema con una letra de acuerdo al número
	   de problema ingresado por el usuario.
	*/
	$("#problemNumber").on("keyup change",(function () {
		let problemNumber = Number($(this).val())+64;
        let problemName  = String.fromCharCode(problemNumber);
        $("#problemName").val(problemName);
    }));
	
});

/*
 * Actualizar campo */
function updateShortName2(){
	problemName = document.getElementsByName('problemnumber')[0];
	shortname = document.getElementsByName('problemname')[0];
	shortname.value = String.fromCharCode(Number(problemname.value)+'A'.charCodeAt()-1);
}