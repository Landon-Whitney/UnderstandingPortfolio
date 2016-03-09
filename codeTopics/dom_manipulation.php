<?php include '../header.php'; ?>

<script>

	var car;
	var car_txt;
	function makeCarObject() {
       var carForm = document.forms["cars"];
		
    	var name = carForm.elements["name"].value;
    	var make = carForm.elements["make"].value;
    	var model = carForm.elements["model"].value;
    	var year = carForm.elements["year"].value;
    	var mileage = parseInt(carForm.elements["mileage"].value);
    	
    	
    	car = {
    		carname: name,
    		carmake: make,
    		carmodel: model,
    		caryear: year,
    		carmileage:mileage 
    	};

        return car;
	}
	
	function addCarEntry() {
    	var car = makeCarObject();
    	
    	if (typeof(Storage) !== "undefined") {
    		if (localStorage.getItem("carLot") === null) {
    			var carLot = {};
    		}
    		else {
    			var JSON_carlot = localStorage.getItem("carLot");
    			var carLot = JSON.parse(JSON_carlot);
    		}
    		var name = car.carname;
    		carLot[name] = car;
    		var JSON_carlot_revised = JSON.stringify(carLot);
    		localStorage.setItem("carLot", JSON_carlot_revised);
    	
    		var car_text = "";
    		for (var key in carLot) {
    			car_text += carLot[key].carname + "&#39s " + carLot[key].caryear + " " + carLot[key].carmake + " " + carLot[key].carmodel + " has " + carLot[key].carmileage + " miles on it." + "</br>";
    		}
    		document.getElementById('car_entry').innerHTML = car_text;	
    	}
    	else {
    		alert("No web storage support!");
    	}
    	
	}
	
	
	
	//w3schools script
	function myFunction() {
    	var x = document.forms["frm1"];
    	var text = "";
    	var i;
    	for (i = 0; i < x.length ;i++) {
        	text += x.elements[i].value + "<br>";
    	}
    	document.getElementById("w3schools_demo").innerHTML = text;
	}
	
</script>

<h3>DOM Manipulation</h3>

<h4>From w3schools:</h4>
	<p>
	<pre><code>
	function myFunction() {
    	var x = document.forms["frm1"];
    	var text = "";
    	var i;
    	for (i = 0; i < x.length ;i++) {
        	text += x.elements[i].value + "&ltbr&gt";
    	}
    	document.getElementById("w3schools_demo").innerHTML = text;
	}
	</code></pre>
	</p>
	<p>Click "Try it" to display the value of each element in the form.</p>
	
	<fieldset>
	<form id="frm1">
  		First name: <input type="text" name="fname" value="Donald"><br>
  		Last name: <input type="text" name="lname" value="Duck"><br><br>
  		<button type="button" onclick="myFunction()">Try it</button>
	</form> 
	</fieldset>
	
	<p id="w3schools_demo"></p>

<h4>My own code:</h4>
	<p>
	<pre><code>

	function makeCarObject() {
       var carForm = document.forms["cars"];
		
    	var name = carForm.elements["name"].value;
    	var make = carForm.elements["make"].value;
    	var model = carForm.elements["model"].value;
    	var year = carForm.elements["year"].value;
    	var mileage = parseInt(carForm.elements["mileage"].value);
    	
    	
    	car = {
    		carname: name,
    		carmake: make,
    		carmodel: model,
    		caryear: year,
    		carmileage:mileage 
    	};

        return car;
	}
	
	function addCarEntry() {
    	var car = makeCarObject();
    	
    	if (typeof(Storage) !== "undefined") {
    		if (localStorage.getItem("carLot") === null) {
    			var carLot = {};
    		}
    		else {
    			var JSON_carlot = localStorage.getItem("carLot");
    			var carLot = JSON.parse(JSON_carlot);
    		}
    		var name = car.carname;
    		carLot[name] = car;
    		var JSON_carlot_revised = JSON.stringify(carLot);
    		localStorage.setItem("carLot", JSON_carlot_revised);
    	
    		var car_text = "";
    		for (var key in carLot) {
    			car_text += carLot[key].carname + "&#39s " + carLot[key].caryear + " " + carLot[key].carmake + " " + carLot[key].carmodel + " has " + carLot[key].carmileage + " miles on it." + "</br>";
    		}
    		document.getElementById('car_entry').innerHTML = car_text;	
    	}
    	else {
    		alert("No web storage support!");
    	}
    	
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