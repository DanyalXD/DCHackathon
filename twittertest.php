<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Consuming Twitter Webserver</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script>
    window.onload = function() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                var tweets = JSON.parse(xhttp.responseText);
                var tweetstring = "";
                for (var i =0; i< tweets.length ; i++)
				{
				    tweetstring += "<h3>" + tweets[i].name + "</h3> </br>";
				    tweetstring += "<p>"  + tweets[i].text + "</p>"
				}
				document.getElementById("twitter").innerHTML = tweetstring;

            }
        };
        xhttp.open("GET", "http://nodedchack.azurewebsites.net//", true);

        xhttp.send();
    }

</script>
</head>
<body>
	<div id = "nav">
		<ul>
			<li><a href = "#"><img src="img/logo.png" alt="Smiley face"></a></li>
			<li><h1>Hey, how are you feeling today?!</h1></li>
		</ul>
	</div>

<main>
</main>

<aside id="twitter" >

</aside>
</body>
</html>
