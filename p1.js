
function validar(){

	var existenErrores=false;

	var avisos=["Corrija los siguientes errores:"];

	var hora = new Date().toUTCString();

	var navegadorsplit=navigator.userAgent.split(" ");
	var navegador=navegadorsplit[0]; //Seleccionamos solo la version del navegador

//Hora y version del navegador

	document.getElementById('hora').value=hora;
	document.getElementById('navegador').value=navegador;

//Validar nombre y apellidos

	if (!(/^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/.test(document.formulario.nombre.value)) && document.formulario.nombre.value.length !=0){

		avisos.push("El nombre es incorrecto, debe empezar por mayúscula y sólo contener letras o espacios");
		existenErrores=true;

	}

	if (!(/^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/.test(document.formulario.apellidos.value)) && document.formulario.apellidos.value.length !=0){

		avisos.push("Los apellidos son incorrectos, ambos deben empezar por mayúscula y sólo contener letras o espacios");
		existenErrores=true;

	}

//Validar la contraseña (Minimo 6 caracteres)
	if (document.formulario.password.value.length<6 && document.formulario.password.value.length!=0){
		avisos.push("La contraseña debe contener al menos 6 caracteres");
		existenErrores=true;
	}


	//Validar numero de telefono 9 digitos y empezar por 9,6 o 7

	if (!(/^[9|6|7][0-9]{8}$/.test(document.formulario.telefono.value)) && document.formulario.telefono.value.length !=0){
		avisos.push("El numero de telefono debe contener al menos 9 digitos y empezar por 9,6 o 7");
		existenErrores=true;

	}

	//Validar fecha de nacimiento

	if(!(/^(0?[1-9]|[12][0-9]|3[01])[\/](0?[1-9]|1[012])[\/]\d{4}$/.test(document.formulario.fechaNac.value)) && document.formulario.fechaNac.value.length !=0){
	avisos.push("La fecha de nacimiento no es válida, introduzca un día comprendido entre 1 y 31 y un mes entre 1 y 12");
	existenErrores=true;
}

if (document.getElementById("get").checked && document.getElementById("multipart").checked){
avisos.push("GET sólo funciona con application/x-www-form-urlencoded");
existenErrores=true;
alert(pozo);
}

//Cambiar atributos metodo,codificacion y accion

document.getElementById("miform").method=formulario.envio.value;
document.getElementById("miform").enctype=formulario.codif.value;
document.getElementById("miform").action=formulario.url.value;

	//En el caso de que haya errores imprimirlos en una ventana de aviso
if(existenErrores == true){
	alert(avisos.join('\n'));
	return false;
}

else{
	return true;
}

}

//Funciones marcar/desmarcar checkboxes

function seleccionarTodos(){
var cajas = document.getElementsByTagName('input');
  for(var i=0; i<cajas.length;i++) {
  if(cajas[i].type.toLowerCase() == 'checkbox') {
  		cajas[i].checked=true;
  	}
    
  }
}

function borrarTodos(){
var cajas = document.getElementsByTagName('input');
  for(var i=0; i<cajas.length;i++) {
  	if(cajas[i].type.toLowerCase() == 'checkbox') {
  		
  			 cajas[i].checked=false;	
    }
   
  }
}



