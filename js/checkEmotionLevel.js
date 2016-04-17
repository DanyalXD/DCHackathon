function checkEmotionLevel() {


	var x = getCookie("emotionLevel");
	for(i = 0; i != x; i++){
			switch(i){
			case 0:
				document.body.style.background = "#A6D7E1";
				break;
			case 1:
				document.body.style.background = "#90CDDA";
				break;
			case 2:
				document.body.style.background = "#79C3D2";
				break;
			case 3:
				document.body.style.background = "#63B9CB";
				break;
			}
	}
}