<?php include '../header.php'; ?>

<script>
	var person = {
    	firstname:"John",
    	lastname:"Doe",
    	age:50,
    	eyecolor:"blue"
	};
	
	var person_statement = person.firstname + " is " + person.age + " years old.";
	
	function car(carmake, carmodel, caryear, carodometer) {
		this.make = carmake;
		this.model = carmodel;
		this.year = caryear;
		this.odometerReading = carodometer;
	}

	var carters_car = new car("toyota", "prius", 2012, 55000);
	var kips_car = new car("subaru", "outback", 2015, 12000);
	
	var car_statement = "The " + carters_car.make + " " + carters_car.model + " has " + carters_car.odometerReading + " miles on it."
	
	var carlot = [
		{make:"toyota", model:"prius", year:"2012", odometer:55000},
		{make:"subaru", model:"outback", year:"2015", odometer:7000},
		{make:"toyota", model:"camry", year:"2002", odometer:98000},
		{make:"honda", model:"acura", year:"2013", odometer:12000}
		];
	
	function getCarFromLot(iteration){
		return carlot[iteration];
	}
	
	var iteration = 0;
	
	function displayCar() {
		if (iteration >= 4) {
			iteration = 0;
		}
		
		var car_object = getCarFromLot(iteration);
		iteration += 1; 
		
		var car_string = "";
		for (var key in car_object) {
			if (car_object.hasOwnProperty(key)) {
				car_string += car_object[key] + " | ";
				}
		}
		return car_string;
	}

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
	person.firstname + " is " + person.age + " years old.";
	</code></pre>
	</p>
	
	<p id="demo"></p>
	
	<button onclick="document.getElementById('demo').innerHTML=person_statement">Try it</button>


<h4>My own code:</h4>
<h5>Example 1</h5>
	<p>
	<pre><code>
	function car(make, model, year, odometer) {
		this.make = make;
		this.model = model;
		this.year = year;
		this.odometerReading = odometer;
	}

	var carters_car = new car("toyota", "prius", 2012, 55000);
	var kips_car = new car("subaru", "outback", 2015, 12000);

	document.getElementById("demo").innerHTML =
	carters_car.make + carters_car.model + " has " + carters_car.odometerReading + " miles on it.";
	</code></pre>
	</p>
	
	<p>Use this button to display a JavaScript Object:</p>
	<p id="my_demo"></p>
	<button onclick="document.getElementById('my_demo').innerHTML = car_statement">Try it</button>

<h5>Example 2</h5>
	<p>
	<pre><code>
	var carlot = [
		{make:"toyota", model:"prius", year:"2012", odometer:55000},
		{make:"subaru", model:"outback", year:"2015", odometer:7000},
		{make:"toyota", model:"camry", year:"2002", odometer:98000},
		{make:"honda", model:"acura", year:"2013", odometer:12000}
		];
	
	function getCarFromLot(iteration){
		return carlot[iteration];
	}
	
	var iteration = 0;
	
	function displayCar() {
		var car_object = getCarFromLot(iteration);
		iteration += 1; 
		
		var car_string = "";
		for (var key in car_object) {
			if (car_object.hasOwnProperty(key)) {
				car_string += car_object[key] + " | ";
				}
		}
		return car_string;
	}
	</code></pre>
	</p>	
	<p>Keep selecting this button to loop through an array of objects:</p>
	<p id="my_demo2"></p>
	<button onclick="document.getElementById('my_demo2').innerHTML = displayCar()">Try it</button>

<?php include '../footer.php'; ?>