<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Carbon</title>
    <style>
    	body{
    		background-image: url("gray.jpg");
    	}
		.box{
			width: 500px;
			height: 200px;
			border: 1px solid gray;
			margin: 20px auto; 
			position: relative;
		}
		.content1,.content2{
			width: 300px;
			height: 300px;
		}
		.content2{
			position: absolute;
			bottom: -110px;
			right: 20px;
		}
		h1{
			font-style: italic;
			font-weight: 80;
			text-decoration: underline;
			text-transform: uppercase;
			color: rgb(77,0,255,1);
			word-spacing: 10px;
			line-height: 30px; 
		}
		p{
			font-size: 22px;
			line-height: 30px;
		}
/*		a{
			text-decoration: none;
		}*/
		table{
			border-collapse: collapse;
		}
		table th{
			text-align: left;
			background-color:#306070;
			color: #fff;
			padding: 4px 8px;
			border: 1px solid gray;
		}
		table td{
			border: 1px solid gray;
			padding: 4px 8px;
		}
		table tr:nth-child(odd) td{
			background-color:#e7edf0; 
		}
		.wrapper {
		  padding: 32px;
		}

		.cookie-container {
		  position: fixed;
		  bottom: -100%;
		  left: 0;
		  right: 0;
		  background: #2f3640;
		  color: #f5f6fa;
		  padding: 0 32px;
		  box-shadow: 0 -2px 16px rgba(47, 54, 64, 0.39);

		  transition: 400ms;
		}

		.cookie-container.active {
		  bottom: 0;
		}

		.cookie-container a {
		  color: #f5f6fa;
		}

		.cookie-btn {
		  background: #e84118;
		  border: 0;
		  color: #f5f6fa;
		  padding: 12px 48px;
		  font-size: 18px;
		  margin-bottom: 16px;
		  border-radius: 8px;
		  cursor: pointer;
		}
	</style>
  </head>
  <body>
	<center><h1>Carbon</h1></center>
	<div class="box">
		<div class="content1">
			<img src="carbon.png" height="180" width="180">
		</div>
		<div class="content2">
			<table>
				<tr>
					<td>Symbol</td>
					<td>C</td>
				</tr>
				<tr>
					<td>Atomic Number</td>
					<td>6</td>
				</tr>
				<tr>
					<td>Discovered by</td>
					<td>Lavoisier proposed carbon in 1789</td>
				</tr>
			</table>
		</div>
	</div>
	<h1>Chemical Properties</h1>
	<table>
		<tr>
			<td><p>Group</p></td>
			<td><p>14</p></td>
			<td><p>Melting point</p></td>
			<td><p>4098K</p></td>
		</tr>
		<tr>
			<td><p>Period</p></td>
			<td><p>2</p></td>
			<td><p>Boiling point</p></td>
			<td><p>4098K</p></td>
		</tr>
		<tr>
			<td><p>Electronic configuration</p></td>
			<td><p>[He] 2s<sup>2</sup>2p<sup>2</sup></p></td>
			<td><p>Density (g cm<sup>-3</sup>)</p></td>
			<td><p>3.513 (diamond)</p></td>
		</tr>
	</table>
	<h1>What is Carbon?</h1>
	<ul>
		<li><p>Carbon compounds are present everywhere i.e. in the food that we eat, the clothes that we wear and even in the lead of the pencil by which we write.</p></li>
		<li><p>The atomic number of carbon is 6 and the atomic mass is 12.01gmol-1.</p></li>
		<li><p>Represented by the symbol C and present in the 14th group of elements in the Periodic Table.</p></li>
		<li><p>According to the data, it is the seventeenth most abundant element found on earth.</p></li>
	</ul>
	<h1>Uses of Carbon</h1>
	<ul>
		<li><p>One of the most amazing properties of carbon is its ability to make long carbon chains and rings. This property of carbon is known as catenation.</p></li>
		<li><p>Carbon has many special abilities out of all one unique ability is that carbon forms pπ-pπ bonds which are nothing but double or triple bonds with itself and with other electronegative atoms like oxygen and nitrogen.</p></li>
		<li><p>Just because of these two properties of carbon i.e catenation and multiple bond formation, it has a number of allotropic forms.</p></li>
	</ul>
	<h1 style="text-align: center;">
		<a href="https://en.wikipedia.org/wiki/carbon">
			More information
		</a>
	</h1>
    <div class="cookie-container">
      <p>
        We use cookies in this website to give you the best experience on our
        site and show you relevant ads. To find out more, read our
        <a href="#">privacy policy</a> and <a href="#">cookie policy</a>.
      </p>

      <button class="cookie-btn">
        Okay
      </button>
    </div>

    <script src="main.js"></script>
</body>
</html>