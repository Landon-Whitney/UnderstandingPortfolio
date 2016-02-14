<?php include '../header.php'; ?>

<script>
// begin w3schools script
	function parseExample() {
		var text = '{"employees":[' +
			'{"firstName":"John","lastName":"Doe" },' +
			'{"firstName":"Anna","lastName":"Smith" },' +
			'{"firstName":"Peter","lastName":"Jones" }]}';

		obj = JSON.parse(text);
		document.getElementById("w3schools_demo").innerHTML =
		obj.employees[1].firstName + " " + obj.employees[1].lastName;
		}

//begin my script

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
	
	function stringifyCar() {
		var car_obj = makeCarObject();
    	
    	car_txt = JSON.stringify(car_obj, null, '\t');
    	document.getElementById('car_entry').innerHTML = car_txt;
    	
    	var new_button = document.createElement("BUTTON");
    	var text = document.createTextNode("Parse JSON");
    	new_button.appendChild(text);
    	
    	new_button.addEventListener('click', parseCar, false);
    	
    	document.getElementById("display").appendChild(new_button);
    	document.getElementById("instruction").innerHTML = "Now select Parse JSON to display the JSON string as a Javascript object.";
    	
	}
	
	function parseCar() {
		var car_obj = JSON.parse(car_txt);
		
		var car_object_txt="";
		for(var key in car_obj) {
                    if (car_obj.hasOwnProperty(key)){
                      car_object_txt += car_obj[key] + " | ";
                    }
                }
                	
		document.getElementById("car_entry").innerHTML = car_object_txt;
	}
</script>
<main>
<article>
<h3>JSON Data Serialization</h3>

<h4>From w3schools:</h4>
	<p>
	<pre><code>
	function parseExample() {
		var text = '{"employees":[' +
			'{"firstName":"John","lastName":"Doe" },' +
			'{"firstName":"Anna","lastName":"Smith" },' +
			'{"firstName":"Peter","lastName":"Jones" }]}';

		obj = JSON.parse(text);
		document.getElementById("w3schools_demo").innerHTML =
		obj.employees[1].firstName + " " + obj.employees[1].lastName;
		}
	</code></pre>
	</p>
	
	<button onclick="parseExample()">Try it</button>
	<p id="w3schools_demo"></p>
</article>

<article>
<h4>My own code:</h4>
	<p>
	<pre><code>
	var car;
	var car_txt = "";
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
	
	function stringifyCar() {
		var car_obj = makeCarObject();
    	
    	car_txt = JSON.stringify(car_obj, null, '\t');
    	document.getElementById('car_entry').innerHTML = car_txt;
    	
    	var new_button = document.createElement("BUTTON");
    	var text = document.createTextNode("Parse JSON");
    	new_button.appendChild(text);
    	
    	new_button.addEventListener('click', parseCar, false);
    	
    	document.getElementById("display").appendChild(new_button);
    	document.getElementById("instruction").innerHTML = "Now select Parse JSON to display the JSON string as a Javascript object.";
    	
	}
	
	function parseCar() {
		var car_obj = JSON.parse(car_txt);
		
		var car_object_txt="";
		for(var key in car_obj) {
                    if (car_obj.hasOwnProperty(key)){
                      car_object_txt += car_obj[key] + " | ";
                    }
                }
                	
		document.getElementById("car_entry").innerHTML = car_object_txt;
	}

	</code></pre>
	</p>
	
	<fieldset>
	<legend>Car Information</legend>
	<form id="cars">
  		<label> Name:</label>
 			<input type="text" name="name" id="car_name">
  		<label>Make:</label> 
			<input type="text" name="make" id="car_make">
		<label>Model:</label> 
			<input type="text" name="model" id="car_model">
		<label>Year:</label> 
			<input type="text" name="year" id="car_year">
		<label>Mileage:</label> 
			<input type="text" name="mileage" id="car_mileage">
		<input type="button" value="Try it" onclick="stringifyCar()">
	</form> 
	</fieldset>
	
	<p id="instruction">Fill out the form to display objects as a JSON string.</p>
	
	<p id="display">
	<pre><code id="car_entry">
	
	</code></pre>
	</p>
</article>	
</main>	

	
<?php include '../footer.php'; ?>