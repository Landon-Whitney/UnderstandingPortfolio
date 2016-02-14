<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <title>Understanding Portfolio | Whitney Davis - Understanding Portfolio</title>
    <link href="../portfolioStyleSheet.css" type="text/css" rel="stylesheet" media="screen">
    <meta name="viewport" content="initial-scale=1">
    <script type="text/javascript" src="../practice.js"></script>
    
    <style> 
		div {
    		width: 100px;
    		height: 100px;
    		background: red;
    		-webkit-transition: width 2s; /* For Safari 3.1 to 6.0 */
    		transition: width 2s;
			}

		div:hover {
   			width: 300px;
			}
			
		button {
			background-color: #0f403e;
			color: #edf2f7;
			border-radius: 4px;
			text-align: center;
			text-decoration: none;
			font-size: 1.1em;
			padding: 12px 25px;
			margin: 4px 2px;
			transition: background-color, padding .5s ease-out;
			}

		button:hover {
			background-color: #baded6;
			padding: 14px 27px;
			}
	</style>
    
</head>
<body>
<script>

</script>
<div class="page" id="page">
    <!-- Menu Toggle -->
    <a href="#menu" class="menuLink" id="menuLink" title="Open Menu">
     <!-- sidebar -->
        <span>
        ::before
        ::after
        </span>
    </a>

<div id="menu">
<nav class="sideMenu">
    <ul>
    	<li><a href="/javascript_objects.php">JavaScript Objects</a></li>
        <li><a href="/dom_manipulation.php">DOM Manipulation</a></li>
        <li><a href="/css3_transitions.php">CSS3 Transitions</a></li>
        <li><a href="/css3_animations.php">CSS3 Animations</a></li>
        <li><a href="/local_storage.php">Local Storage</a></li> 
        <li><a href="/ajax.php">AJAX</a></li>
        <li><a href="/json_data_serialization.php">JSON Data Serialization</a></li>        
    </ul>
</nav>
</div>
<main>

<header>
        <a class="logo" href="http://whitleedavis.com" title="Home Page">
            <h1 class="title">Whitney Davis</h1>
        </a>
        <a class="logo2" href="/" title="Understanding Portfolio">
        	<h2 class="title">Understanding Portfolio</h2>
        </a>

</header>

<h3>CSS3 Transitions</h3>

<article>
<h4>From w3schools:</h4>
	<p>
	<pre><code>
	div {
    	width: 100px;
    	height: 100px;
    	background: red;
    	-webkit-transition: width 2s; /* For Safari 3.1 to 6.0 */
    	transition: width 2s;
	}

	div:hover {
    	width: 300px;
	}
	</code></pre>
	</p>
	
	<div></div>

	<p>Hover over the div element above, to see the transition effect.</p>
</article>
<article>
<h4>My own code:</h4>
	<p>
	<pre><code>
	button {
		background-color: #0f403e;
		color: #edf2f7;
		border-radius: 4px;
		text-align: center;
		text-decoration: none;
		font-size: 1.1em;
		padding: 12px 25px;
		margin: 4px 2px;
		transition: background-color, padding .5s ease-out;
		}

	button:hover {
		background-color: #baded6;
		padding: 14px 27px;
		}
	</code></pre>
	</p>
	
	<button onclick="">Try it</button>
	<p id="my_demo"></p>
</article>
</main>	
</div>

<?php include '../footer.php'; ?>