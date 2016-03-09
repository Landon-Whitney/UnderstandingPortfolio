<?php include '../header.php'; ?>

<script>
//my own code
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
	
	function storageAvailable(type) {
	try {
		var storage = window[type],
			x = '__storage_test__';
		storage.setItem(x, x);
		storage.removeItem(x);
		return true;
	}
	catch(e) {
		return false;
	}
}

if (storageAvailable('localStorage')) {
	// Yippee! We can use localStorage awesomeness
}
else {
	// Too bad, no localStorage for us
}
	
	//w3schools example code
	function w3schoolsExample() {
		if (typeof(Storage) !== "undefined") {
    		// Store
    		localStorage.setItem("lastname", "Smith");
    		// Retrieve
    		document.getElementById("w3schools_demo").innerHTML = localStorage.getItem("lastname");
		} else {
    		document.getElementById("w3schools_demo").innerHTML = "Sorry, your browser does not support Web Storage...";
		}
	}
</script>

<h3>Local Storage</h3>

<h4>From w3schools:</h4>
	<p>
	<pre><code>
	function w3schoolsExample() {
		if (typeof(Storage) !== "undefined") {
    		// Store
    		localStorage.setItem("lastname", "Smith");
    		// Retrieve
    		document.getElementById("w3schools_demo").innerHTML = localStorage.getItem("lastname");
		} else {
    		document.getElementById("w3schools_demo").innerHTML = "Sorry, your browser does not support Web Storage...";
		}
	}
	</code></pre>
	</p>
	<p>Click "Try it" to display the stored last name:</p>
	<button onclick="w3schoolsExample()">Try it</button>
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