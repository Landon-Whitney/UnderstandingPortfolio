<?php include '../header.php'; ?>

<script>

</script>
<main>
<h3>CSS3 Animations</h3>

<h4>From w3schools:</h4>
	<p>
	<pre><code>
	#animations_example {
    	width: 100px;
    	height: 100px;
    	background-color: red;
    	position: relative;
    	-webkit-animation-name: example; /* Chrome, Safari, Opera */
    	-webkit-animation-duration: 4s; /* Chrome, Safari, Opera */
    	animation-name: example;
    	animation-duration: 4s;
		}

	/* Chrome, Safari, Opera */
	@-webkit-keyframes example {
    	0%   {background-color:red; left:0px; top:0px;}
    	25%  {background-color:yellow; left:200px; top:0px;}
    	50%  {background-color:blue; left:200px; top:200px;}
    	75%  {background-color:green; left:0px; top:200px;}
    	100% {background-color:red; left:0px; top:0px;}
	}

	/* Standard syntax */
	@keyframes example {
    	0%   {background-color:red; left:0px; top:0px;}
    	25%  {background-color:yellow; left:200px; top:0px;}
    	50%  {background-color:blue; left:200px; top:200px;}
    	75%  {background-color:green; left:0px; top:200px;}
    	100% {background-color:red; left:0px; top:0px;}
	}
	</code></pre>
	</p>
	
	<div id="#animations_example"></div>

<h4>My own code:</h4>
	<p>
	<pre><code>
	#animated {
		position:relative;
		margin-top:100px;
		-webkit-animation-name: example; /* Chrome, Safari, Opera */
    	-webkit-animation-duration: 4s; /* Chrome, Safari, Opera */
    	animation-name: button_bounce;
    	animation-duration: 2s;
    	animation-iteration-count: 2;
    	animation-direction: alternate;
	}
	/* Chrome, Safari, Opera */
	@-webkit-keyframes button_bounce {
    	0%   {left:0px; top:0px;}
    	25%  {left:75px; top:-75px;}
    	50%  {left:150px; top:-125px;}
    	75%  {left:225px; top:-75px;}
    	100% {left:300px; top:0px;}
	}

	/* Standard syntax */
	@keyframes button_bounce {
    	0%   {left:0px; top:0px;}
    	25%  {left:75px; top:-75px;}
    	50%  {left:150px; top:-125px;}
    	75%  {left:225px; top:-75px;}
    	100% {left:300px; top:0px;}
	}
	</code></pre>
	</p>
	
	<button id="animated">Try it</button>
</main>
<?php include '../footer.php'; ?>