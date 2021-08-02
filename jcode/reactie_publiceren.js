let verstuur = document.getElementById('verstuur');

verstuur.addEventListener('click',  function(){
	let naam = document.getElementById('naam').value;
	let reactie = document.getElementById('reactie').value;
	let toestemming = document.getElementById('toestemming').value;
	let code = document.getElementById('code').value;
	
	window.location.href = "insert.php?naam=" + naam+"&reactie=" + reactie+"&toestemming=" + toestemming+"&code=" + code;
});