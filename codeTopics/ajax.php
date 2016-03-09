<?php include '../header.php'; ?>

<script>

//w3schools code
	function loadDoc() {
  		var xhttp;
  		if (window.XMLHttpRequest) {
    		// code for modern browsers
    		xhttp = new XMLHttpRequest();
    	} else {
    		// code for IE6, IE5
    		xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  		}
  		xhttp.onreadystatechange = function() {
    		if (xhttp.readyState == 4 && xhttp.status == 200) {
      			document.getElementById("demo").innerHTML = xhttp.responseText;
    		}	
  		};
  		xhttp.open("GET", "../ajax_examples.php?value=w3schools", true);
  		xhttp.send();
	}
	
//begin my code
	function loadAnswer() {
		var question = document.getElementById("selectQuestion").value;
		
		var xhttp;
		if (window.XMLHttpRequest) {
			xhttp = new XMLHttpRequest();
		}
		else {
			xhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xhttp.onreadystatechange = function() {
			if (xhttp.readyState == 4 && xhttp.status == 200) {
				document.getElementById("answer").innerHTML = xhttp.responseText;
			}
		};
		xhttp.open("GET", "../ajax_examples.php?value=" + question, true); 
		xhttp.send();
	}
	

	function addCarEntry() {
		var carForm = document.forms["cars"];
		
    	var name = carForm.elements["name"].value;
    	var make = carForm.elements["make"].value;
    	var model = carForm.elements["model"].value;
    	var year = carForm.elements["year"].value;
    	var mileage = parseInt(carForm.elements["mileage"].value);
    	
    	var url = "../ajax_examples.php?name=" + name + "&make=" + make + "&model=" + model + "&year=" + year + "&mileage=" + mileage;

		
		var xhttp;
		if (window.XMLHttpRequest) {
			xhttp = new XMLHttpRequest();
		}
		else {
			xhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xhttp.onreadystatechange = function() {
			if (xhttp.readyState === 4 && xhttp.status === 200) {
				constructString(xhttp.responseText);
			}
		};
		
		xhttp.open("GET", url, true); 
		xhttp.send();
	}
	
	function constructString(string) {
		var carLot = JSON.parse(string);
		var cartxt = "";
    	for (var key in carLot) {
    		cartxt += carLot[key].name + "&#39s " + carLot[key].year + " " + carLot[key].make + " " + carLot[key].model + " has " + carLot[key].mileage + " miles on it." + "</br>";
    	}
    	document.getElementById('car_entry').innerHTML = cartxt;
	}
</script>

<h3>AJAX</h3>

<h4>From w3schools:</h4>
	<p>
	<pre><code>
	function loadDoc() {
  		var xhttp;
  		if (window.XMLHttpRequest) {
    		// code for modern browsers
    		xhttp = new XMLHttpRequest();
    	} else {
    		// code for IE6, IE5
    		xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  		}
  		xhttp.onreadystatechange = function() {
    		if (xhttp.readyState == 4 && xhttp.status == 200) {
      			document.getElementById("demo").innerHTML = xhttp.responseText;
    		}	
  		};
  		xhttp.open("GET", "ajax_examples.php?value=w3schools", true);
  		xhttp.send();
	}
	</code></pre>
	</p>
	
	<p id="demo">Let AJAX change this text.</p>

	<button type="button" onclick="loadDoc()">Try it</button>


<h4>My own code:</h4>
<h5>Example 1</h5>
	<p>
	<pre><code>
	function loadAnswer() {
		var question = document.getElementById("selectQuestion").value;
		
		var xhhtp;
		if (window.XMLHttpRequest) {
			xhttp = new XMLHttpRequest();
		{
		else {
			xhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xhttp.onreadystatechange = function() {
			if (xhttp.readyState == 4 && xhttp.status == 200) {
				document.getElementById("answer").innerHTML = xhttp.responseText:
			}
		};
		xhttp.open("GET", "ajax_examples.php?value=" + question, true); 
		xttp.send();
	</code></pre>
	</p>
	
	<p>Select a question:</p>
	
	<select id="selectQuestion" onchange="loadAnswer()">
		<option value disabled selected> -- select an option -- </option>
		<option value="how_often">How often should I poop?</option>
		<option value="cleaning_colon">Do cleanses actually clean the colon?</option>
		<option value="floating_poop">Why does my poop float?</option>
		<option value="probiotics">Do probiotics really work?</option>
	</select>
	<p id="answer"></p>
	
<h5>Example 2</h5>
	<p>
	<pre><code>

	function addCarEntry() {
		var carForm = document.forms["cars"];
		
    	var name = carForm.elements["name"].value;
    	var make = carForm.elements["make"].value;
    	var model = carForm.elements["model"].value;
    	var year = carForm.elements["year"].value;
    	var mileage = parseInt(carForm.elements["mileage"].value);
    	
    	var url = "../ajax_examples.php?name=" + name + "&make=" + make + "&model=" + model + "&year=" + year + "&mileage=" + mileage;

		
		var xhttp;
		if (window.XMLHttpRequest) {
			xhttp = new XMLHttpRequest();
		}
		else {
			xhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xhttp.onreadystatechange = function() {
			if (xhttp.readyState === 4 && xhttp.status === 200) {
				constructString(xhttp.responseText);
			}
		};
		
		xhttp.open("GET", url, true); 
		xhttp.send();
	}
	
	function constructString(string) {
		var carLot = JSON.parse(string);
		var cartxt = "";
    	for (var key in carLot) {
    		cartxt += carLot[key].name + "&#39s " + carLot[key].year + " " + carLot[key].make + " " + carLot[key].model + " has " + carLot[key].mileage + " miles on it." + "</br>";
    	}
    	document.getElementById('car_entry').innerHTML = cartxt;
	}

	</code></pre>
	</p>

	<p>Click "Try it" to display car information:</p>
	<fieldset>
	<legend>Car Information</legend>
	<form id="cars">
  		<label> Name:</label>
 			<input type="text" name="name" id="car_name" value="Carter"><br>
  		<label>Make:</label> 
			<input type="text" name="make" id="car_make" value="Toyota">
		<label>Model:</label> 
			<input type="text" name="model" id="car_model" value="Prius">
		<label>Year:</label> 
			<input type="text" name="year" id="car_year" value="2012">
		<label>Mileage:</label> 
			<input type="text" name="mileage" id="car_mileage" value="58,412">
 		<button type="button" onclick="addCarEntry()">Try It</button>
	</form> 
	</fieldset>
	
	
	<p id="car_entry"></p>

<?php include '../footer.php'; ?>