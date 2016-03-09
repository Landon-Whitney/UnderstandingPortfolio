<?php include '../header.php'; ?>


<h3>CSS3 Transitions</h3>

<article>
<h4>From w3schools:</h4>
	<p>
	<pre><code>
	#transitions_example {
    	width: 100px;
    	height: 100px;
    	background: red;
    	-webkit-transition: width 2s; /* For Safari 3.1 to 6.0 */
    	transition: width 2s;
	}

	#transitions_example:hover {
    	width: 300px;
	}
	</code></pre>
	</p>
	
	<div id="transitions_example"></div>

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
<?php include '../footer.php'; ?>