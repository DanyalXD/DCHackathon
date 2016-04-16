function setName() {

	var cname = document.getElementById("name").value;
	if(cname != ""){
		document.cookie = "name=" + cname;
		alert(document.cookie);
	}
	else{

		alert('lol nothing in it m8');

	}
}