<?php include '../header.php'; ?>
<script>
function changeFont() {
		var font = document.getElementById("fonts").value;
		
		var para = document.getElementById("paragraph");
		
		switch(font) {
			case 'times':
				para.style.fontFamily=' "Times New Roman", serif';
				break;
			case 'courier':
				para.style.fontFamily=' "Courier New", monospace';
				break;
			case 'narrow':
				para.style.fontFamily=' "Arial Narrow", sans-serif';
				break;
			case 'palatino':
				para.style.fontFamily=' "Palatino Linotype", serif';
				break;
			default:
				break;
		}
		
	}
</script>
<h3>Manipulating CSS Classes with JS</h3>

<h4>My own code:</h4>
<h5>Example 1</h5>
	<p>
	<pre><code>
	function setActive() {
		aObj = document.getElementById('side_menu').getElementsByTagName('a');
		for(i=0;i<aObj.length;i++) { 
    		if(document.location.href.indexOf(aObj[i].href)>=0) {
      			aObj[i].className='active';
    		}
  		}
	}
	window.onload = setActive();
	</code></pre>
	</p>
	<p>
	This code applies to the side menu. The class on the selected menu item is changed to<br>
	active and the CSS styling changes in accordance. 
	</p>
	
<h5>Example 2</h5>
	<p>
	<pre><code>
	function changeFont() {
		var font = document.getElementById("fonts").value;
		
		var para = document.getElementById("paragraph");
		
		switch(font) {
			case 'times':
				para.style.fontFamily=' "Times New Roman", serif';
				break;
			case 'courier':
				para.style.fontFamily=' "Courier New", monospace';
				break;
			case 'narrow':
				para.style.fontFamily=' "Arial Narrow", sans-serif';
				break;
			case 'palatino':
				para.style.fontFamily=' "Palatino Linotype", serif';
				break;
			default:
				break;
		}
		
	}
	</code></pre>
	</p>
	<p id="paragraph">
	Change this font!
	</p>
	<select id="fonts" onchange="changeFont()">
		<option value disabled selected> -- select an option -- </option>
		<option value="times">Times New Roman</option>
		<option value="courier">Courier New</option>
		<option value="narrow">Arial Narrow</option>
		<option value="palatino">Palatino Linotype</option>
	</select>


<?php include '../footer.php'; ?>