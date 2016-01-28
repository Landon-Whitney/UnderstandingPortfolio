<?php include '/header.php'; ?>

<script>
	var person = {
    	firstname:"John",
    	lastname:"Doe",
    	age:50,
    	eyecolor:"blue"
	};
	
	var person_statement = person["firstname"] + " is " + person["age"] + " years old.";
	
	function car(make, model, year, odometer) {
		this.make = “make”;
		this.model = “model”;
		this.year = “year”;
		this.odometerReading = “odometer”;
	}

	var carters_car = new car(“toyota”, “prius”, 2012, 55000);
	var kips_car = new car(“subaru”, “outback”, 2015, 12000);
	
	var car_statement = carters_car.make + carters_car.model + " has " + carters_car.odometerReading + " miles on it."

</script>

<h3>JavaScript Objects</h3>

<h4>From w3schools:</h4>
	<p>
	<pre><code>
	// There are two different ways to access an object property:
	// You can use .property or ["property"].

	var person = {
    	firstname:"John",
    	lastname:"Doe",
    	age:50,
    	eyecolor:"blue"
	};
	document.getElementById("w3schools_demo").innerHTML =
	person["firstname"] + " is " + person["age"] + " years old.";
	</code></pre>
	</p>
	
	<button onclick="document.getElementById("w3schools_demo").innerHTML =
	person_statement">Try it</button>
	<p id="w3schools_demo"></p>

<h4>My own code:</h4>
	<p>
	<pre><code>
	function car(make, model, year, odometer) {
		this.make = “make”;
		this.model = “model”;
		this.year = “year”;
		this.odometerReading = “odometer”;
	}

	var carters_car = new car(“toyota”, “prius”, 2012, 55000);
	var kips_car = new car(“subaru”, “outback”, 2015, 12000);

	document.getElementById("demo").innerHTML =
	carters_car.make + carters_car.model + " has " + carters_car.odometerReading + " miles on it.";
	</code></pre>
	</p>
	
	<button onclick="document.getElementById("my_demo").innerHTML = car_statement">Try it</button>
	<p id="my_demo"></p>
<?php include '/footer.php'; ?>