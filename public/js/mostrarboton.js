function activa_boton(campo,boton){
	if (campo.value != "region"){
		boton.disabled=false;
	} else {
		boton.disabled=true;
	}
}