function validaForm(){
	var nome = document.getElementById("idnome").value;
	var nometarget = document.getElementById("idnome").name;
	
	var radio1 = document.getElementById("idradio1").checked;
	var radio2 = document.getElementById("idradio2").checked;
	
	var select = document.getElementById("idselect").value;
	
	var check1 = document.getElementById("idckeck1").checked;
	var check2 = document.getElementById("idckeck2").checked;
	var check3 = document.getElementById("idckeck3").checked;

		
	if(nome =="" || nome == null){		
		alert ("Por favor preencha o campo " + nometarget ); 
		document.getElementById("idnome").focus(); 
		return false; 
	}	
	
	
	if (nome.length < 4){ 
		alert ("Digite um nome com mais de 5 caracteres");
		document.getElementById("idnome").focus(); 
		return false; 
	}
	
	
	if (!isNaN(nome)){
		alert ("Insira somente letras");
		document.getElementById("idnome").focus(); 
		return false; 
	}
	
	
	if (!(radio1 || radio2)){ 
		alert("Sugestão ou Crítica");
		document.getElementById("idradio1").focus();
		return false;
	}
	
	
	if (select == ""){
		alert("Escolha uma opção do Select");
		document.getElementById("idselect").focus();
		return false;
	}

	
	if ((check1 == false) && (check2 == false) && (check3 == false)) {
		alert("Favor responder a enquete");
		document.getElementById("idcheck1").focus();
		return false;
	}
	return true;	
}










