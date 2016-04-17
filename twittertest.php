<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Mood Page</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script type='text/javascript' src='js/emotionLevel.js'></script>
	<script type='text/javascript' src='js/getCookie.js'></script>
	<script type='text/javascript' src='js/checkEmotionLevel.js'></script>
	<script type='text/javascript' src='js/settings.js'></script>
	<script src="https://maps.googleapis.com/maps/api/js"async defer></script>
    <script>
      function initMap() {
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
          center: {lat: 44.540, lng: -78.546},
          zoom: 8
        });
      }
    </script>
    <script>
   	window.onload = function() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                var tweets = JSON.parse(xhttp.responseText);
                var tweetstring = "";
                for (var i =0; i< tweets.length ; i++)
				{
					tweetstring += "<div id = 'timeline'>";
				    tweetstring += "<h1>" + tweets[i].name + "</h1> </br>";
				    tweetstring += "<p>"  + tweets[i].text + "</p>"
				    tweetstring += "</div>";
				}
				document.getElementById("twitter").innerHTML = tweetstring;

            }
        };
        xhttp.open("GET", "http://nodedchack.azurewebsites.net//", true);

        xhttp.send();
    }

</script>
</head>
<body onload="checkEmotionLevel()">
	<div id = "nav">
		<ul>
			<li><a href = "#"><img src="img/logo.png" alt="Smiley face"></a></li>
			<li><h1>Dans Page</h1></li>
		</ul>
	</div>

<main>
</main>

<div id = "profilePhoto">
	<img src="img/dog.jpg" alt="Smiley face">
</div>

<div id="map"></div>
    <script>
      function initMap() {
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
          center: {lat: 44.540, lng: -78.546},
          zoom: 8
        });
      }
    </script>

<aside id="twitter" >
</aside>

<div id ="spotify1"></div>
<iframe id = "spotify" src="https://embed.spotify.com/?uri=spotify%3Auser%3Adanyalc95%3Aplaylist%3A6x1R9eyNJTQmXaQKc4cfYX" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>
<div id = "spotify2"></div>

</body>
</html>

