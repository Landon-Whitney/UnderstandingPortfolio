<?php include '../header.php'; ?>

<script>

	function addCarEntry() {
		var carForm = document.forms["cars"];
		
    	var name = carForm.elements["name"].value;
    	var make = carForm["make"].value;
    	var model = carForm["model"].value;
    	var year = carForm["year"].value;
    	var mileage = carForm["mileage"].value;
    	
    	var car = {
    		carname: name,
    		carmake: make,
    		carmodel: model,
    		caryear: year,
    		carmileage:mileage 
    	};
    	
    	var text = car.carname + "&#39s " + year + " " + make + " " + model + " has " + mileage + " miles on it.";
    	document.getElementById('car_entry').innerHTML = text;
	}
	
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
<main>
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
	
	<form id="frm1" action="main.js">
  		First name: <input type="text" name="fname" value="Donald"><br>
  		Last name: <input type="text" name="lname" value="Duck"><br><br>
  		<input type="submit" value="Submit">
	</form> 

	<p>Click "Try it" to display the value of each element in the form.</p>

	<button onclick="myFunction()">Try it</button>
	
	<p id="w3schools_demo"></p>

<h4>My own code:</h4>
	<p>
	<pre><code>

	function addCarEntry() {
    	var name = document.getElementById('name');
    	var make = document.getElementById('make');
    	var model = document.getElementById('model');
    	var year = document.getElementById('year');
    	var mileage = document.getElementById('mileage');
    	
    	var car = {
    		carname: name,
    		carmake: make,
    		carmodel: model,
    		caryear: year,
    		carmileage:mileage 
    	};
    	
    	var text = car.carname + " owns a " + car.make + car.model + " made in 2012 with " + car.carmileage " miles on it.";
    	document.getElementById("car_entry").innerHTML = text;
	}

	</code></pre>
	</p>

	
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
			<input type="text" name="mileage" id=car_mileage" value="58,412">
 		<input type="submit" value="Submit">
	</form> 
	</fieldset>
	
	<p>Click "Try it" to display car information.</p>
	
	<p id="car_entry"></p>

	<button onclick="addCarEntry()">Try It</button>

	</main>
<?php include '../footer.php'; ?>