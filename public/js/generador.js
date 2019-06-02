'use strict'

window.addEventListener('load',function(){
var select = document.querySelector("#option");
var i ="";
var input = document.querySelector("#input");

select.addEventListener('change',function(e){
	e.preventDefault();
	input.innerHTML="";
for(i =1;i<=select.value;i++){
	console.log("valor de select "+select.value);
	createInputs();
}	
		
	
});

function createInputs(){
	var element = document.createElement('div');
	element.innerHTML=`
	<div class="form-group">
		<p>Pregunta ${i}</p>
		<input type="text" id="${i}" class="form-control" />
		
	</div>
	<div class="form-group">
		<p>Cantidad Respuestas</p>
		<select id="respuestas" class="form-control" name="">
								<option value="0">Cantidad Respuestas</option>
								<option id="2" value="2">2</option>
								<option id="3" value="3">3</option>
								<option id="4" value="4">4</option>
								<option id="5" value="5">5</option>
							</select>
	</div>
	`;
	input.appendChild(element);


}



});


/*crear cada pregunta con diferentes repuestas ejemplo
pregunta uno tiene 5 respuestas
pregunta dos 3 respuestas
cada pregunta debe tener su select para selecionar cantidad respuesta
*/


