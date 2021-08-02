let verstuur = document.getElementById('verstuur');

verstuur.addEventListener('click',  function(){
	
	
	
	let naam = document.getElementById('naam').value;
	let reactie = document.getElementById('reactie').value;
	let toestemming = document.getElementById('toestemming').value;
	let code = document.getElementById('code').value;
	let melding = document.getElementById('melding');
	if (code.trim() == ""){melding.innerHTML = "Vul eerst de code in";}
	
	else if (naam.trim()==""){melding.innerHTML = "Vul je naam in alsjeblieft";}
		
	else if (reactie.trim()==""){	melding.innerHTML = "Je hebt nog geen review ingevuld";}
	
	else{
	window.location.href = "insert.php?naam=" + naam+"&reactie=" + reactie+"&toestemming=" + toestemming+"&code=" + code;
	}
	melding.style.visibility = "visible";
});