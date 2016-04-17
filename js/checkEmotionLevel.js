function checkEmotionLevel() {


	var x = getCookie("emotionLevel");
	for(i = 0; i != x; i++){
			switch(i){
			case 0:
				document.body.style.background = "#A6D7E1";
				document.getElementById('spotify').src ="https://embed.spotify.com/?uri=spotify%3Auser%3Azzazzy%3Aplaylist%3A36CFhzHzK8YW3mtPwXT3y0";
				break;
			case 1:
				document.body.style.background = "#90CDDA";
				document.getElementById('spotify').src ="https://embed.spotify.com/?uri=spotify%3Auser%3Adanyalc95%3Aplaylist%3A3aa3jGMKLywujtAuJpGL4a";
				break;
			case 2:
				document.body.style.background = "#79C3D2";
				document.getElementById('spotify').src ="https://embed.spotify.com/?uri=spotify%3Auser%3Adanyalc95%3Aplaylist%3A6x1R9eyNJTQmXaQKc4cfYX";
				break;
			case 3:
				document.body.style.background = "#63B9CB";
				document.getElementById('spotify').src ="https://embed.spotify.com/?uri=spotify%3Auser%3Adanyalc95%3Aplaylist%3A6x1R9eyNJTQmXaQKc4cfYX";
				break;
			case 4:
				document.body.style.background = "#A6D7E1";
				document.getElementById('spotify').src ="https://embed.spotify.com/?uri=spotify%3Auser%3Adanyalc95%3Aplaylist%3A55Vvs3Gc6QHVA0UWQJF2IT";
				break;
			case 5:
				document.body.style.background = "#90CDDA";
				document.getElementById('spotify').src ="https://embed.spotify.com/?uri=spotify%3Auser%3Azzazzy%3Aplaylist%3A36CFhzHzK8YW3mtPwXT3y0";
				break;
			case 6:
				document.body.style.background = "#79C3D2";
				document.getElementById('spotify').src ="https://embed.spotify.com/?uri=spotify%3Auser%3Azzazzy%3Aplaylist%3A36CFhzHzK8YW3mtPwXT3y0";
				break;
			case 7:
				document.body.style.background = "#63B9CB";
				document.getElementById('spotify').src ="https://embed.spotify.com/?uri=spotify%3Auser%3Azzazzy%3Aplaylist%3A36CFhzHzK8YW3mtPwXT3y0";
				break;
			}
	}
}

