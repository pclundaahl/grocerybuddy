<!doctype.html>
<html lang="en">
<head>
	<meta char="utf-8">
	<title> Predictive Text Test </title>
	<link rel="stylesheet" href="base.css">
	<script>
	function showHint(str) {
		if (str.length == 0) { 
			document.getElementById("txtHint").innerHTML = "";
			return;
		} else {
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("txtHint").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET", "gethint.php?q=" + str, true);
			xmlhttp.send();
		}
	}
	</script>
	</head>
<body>
	<header>
		<div id = "logo">
		</div>
		<h1> Carlo's Awesome Project </h1>
		<ul id = "nav">
			<li><a href="#"> Link 1 </a></li>
			<li><a href="#"> Link 2 </a></li>
			<li><a href="#"> Link 3 </a></li>
			<li><a href="#"> Link 4 </a></li>
		</ul>
	</header>
	<main>
	<p><b>Start typing a grocery in the input field below:</b></p>
	<form> 
	Grocery: <input type="text" onkeyup="showHint(this.value)">
	</form>
	<p><strong>Suggestions:</strong><br><br> <span id="txtHint"></span></p>
	</main>
	<footer>
		<p> This is my footer </p>
		<p> copyright &copy; 2017 </p>
	</footer>
</body>
</html>