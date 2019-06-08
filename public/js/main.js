'use strict'

window.addEventListener('load',function(){
	var form = document.querySelector("#form");

	form.addEventListener('submit',function(e){
		var user = document.querySelector("#user").value;
		var contrasena = document.querySelector("#password").value;
		var error = document.querySelector("#error");
		var error2 = document.querySelector("#error2");

		if (user === "") {
			e.preventDefault();
			error.innerHTML = "* Debe ingresar un 	Correo";
			error.style.color = "red";
			error.style.display = "block";
			
		} else{
			error.style.display = "none";
		}
		if(contrasena === ""){
			e.preventDefault();
			error2.innerHTML = "* Debe ingresar una contraseña";
			error2.style.color = "red";
			error2.style.display = "block";

		}else{
			error2.style.display = "none";
		}
	});
});