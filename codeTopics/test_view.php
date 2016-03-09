<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <title>Understanding Portfolio | Whitney Davis - Understanding Portfolio</title>
    <link href="../portfolioStyleSheet.css" type="text/css" rel="stylesheet" media="screen">
    <meta name="viewport" content="initial-scale=1">
</head>
<body>
<header>
        <nav class="side_menu">
    		<ul>
                <li><a class="">JavaScript Objects</a></li>
                <li><a class="">DOM Manipulation</a></li>
                <li><a class="">CSS3 Transitions</a></li>
                <li><a class="">CSS3 Animations</a></li>
                <li><a class="">Local Storage</a></li> 
                <li><a class="">AJAX</a></li>
                <li><a class="">JSON Data Serialization</a></li>
                <li><a class="active">Test View</a></li>   
            </ul>
    	</nav>
    	
    	<div class="heading">
    	<a class="logo" href="http://whitleedavis.com" title="Home Page">
            <h1 class="title">Whitney Davis</h1>
        </a>
        <a class="logo2" href="/" title="Understanding Portfolio">
        	<h2 class="title">Understanding Portfolio</h2>
        </a>
        </div>
</header>

<script>
	function selection(question, answer, tags) {
		this.selectionQuestion = question;
		this.selectionAnswer = answer;
		this.selectionTags = tags;
		this.findTag = function (tag){
			for (var i = 0; i < this.selectionTags.length; i++) {
				if (tag === this.selectionTags[i]) {
					return true
				}
			}
			return false;
		}
	}
	var toilet_invention = new selection("When were toilets invented?", "1596 by Sir John Harington.", ['toilets', 'flush', 'history']);


</script>

<main>
<h3>Example</h3>

<article>
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
    	document.getElementById("instruction").innerHTML = "Now select Parse JSON to 
    		display the JSON string as a Javascript object.";
    	
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
  		<div class="form_entry"><label>Name:</label><input type="text" name="name" id="car_name"></div>
  		<div class="form_entry"><label>Make:</label><input type="text" name="make" id="car_make"></div>
		<div class="form_entry"><label>Model:</label><input type="text" name="model" id="car_model"></div>
		<div class="form_entry"><label>Year:</label><input type="text" name="year" id="car_year"></div>
		<div class="form_entry"><label>Mileage:</label><input type="text" name="mileage" id="car_mileage"></div>
		<div class="form_button"><button type="button" onclick="stringifyCar()">Try it</button></div>
	</form> 
	</fieldset>
	
	<p id="instruction">Fill out the form to display objects as a JSON string.</p>
	
	<p id="display">
	<pre><code id="car_entry">
	
	</code></pre>
	</p>
</article>

</main>


<hr>
<footer>
	<nav class="index_menu">
    	<ul>
                <li><a href="/codeTopics/javascript_objects.php">JavaScript Objects........................11/11 this section has no new content</a></li>
                <li><a href="/codeTopics/dom_manipulation.php">DOM Manipulation......................11/11 this section has no new content</a></li>
                <li><a href="/codeTopics/css3_transitions.php">CSS3 Transitions..........................10/11 this section has no new content</a></li>
                <li><a href="/codeTopics/css3_animations.php">CSS3 Animations..........................10/11 this section has no new content</a></li>
                <li><a href="/codeTopics/local_storage.php">Local Storage................................<b>9/10</b></a></li> 
                <li><a href="/codeTopics/ajax.php">AJAX.............................................<b>9/10 NEW CONTENT</b></a></li>
                <li><a href="/codeTopics/json_data_serialization.php">JSON Data Serialization...............11/11 this section has no new content</a></li>        
        </ul>
    </nav>
    <div id="return">
        <a href="#">TOP</a>
    </div>
    <span id="copyright">
        &copy; Copyright 2015 Whitney Lee Davis
    </span>
</footer>
<script type="text/javascript" src="../practice.js"></script>
</body>
</html>