<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Helium</title>
	<style>
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
	<center><h1>Helium</h1></center>
	<div class="box">
		<div class="content1">
			<img src="helium.png" height="180" width="180">
		</div>
		<div class="content2">
			<table>
				<tr>
					<td>Symbol</td>
					<td>He</td>
				</tr>
				<tr>
					<td>Atomic Number</td>
					<td>2</td>
				</tr>
				<tr>
					<td>Discovered by</td>
					<td>Sir William Ramsay in London, Per Teodor Cleve and Nils Abraham Langlet.</td>
				</tr>
			</table>
		</div>
	</div>
	<h1>What is Helium?</h1>
	<p>Helium, the lightest of the noble gases, had actually been detected and helium is the only element in the periodic table that was discovered by an astronomer.</p>
	<ul>
		<li><p>Helium is the element which you can find on the upper right side of the periodic table with atomic number 2. It comes first amongst the family of the noble gases.</p></li>
		<li><p>It holds one atomic orbital and was named by Lockyer and Frankland. Its name is derived from the Greek word “Helios” meaning Sun. Scientists knew there is an enormous amount of helium in the Sun before it was discovered.</p></li>
		<li><p>Helium falls under inert gas since its outermost electron orbital is full of two electrons. Helium can also be found in lasers, compressed air tanks and coolant in nuclear reactors.</p></li>
		<li><p>It holds the lowest boiling and melting points amongst the all other elements. The Nuclear fusion of hydrogen in stars generates a significant amount of helium.</p></li>
	</ul>
	<h1>Isotopes</h1>
	<p>Helium has two known stable isotopes – <sup>3</sup>He and <sup>4</sup>He. The abundance of helium-3 and helium-4 corresponds to 0.0002% and 99.9998% respectively. This difference in abundances can be observed in the Earth’s atmosphere, where the ratio of <sup>4</sup>Heatoms to  <sup>3</sup>He atoms is approximately 1000000:1.</p>
	<h1>Chemical Properties of Helium</h1>
	<table>
		<th>Helium (He)</th>
		<th>Chemical Properties</th>
		<tr>
			<td>Electron Configuration</td>
			<td>1s<sup>2</sup></td>
		</tr>
		<tr>
			<td>First Ionization Energy</td>
			<td>2372.3 kilojoules per mole</td>
		</tr>
		<tr>
			<td>Second Ionization Energy</td>
			<td>5250.5 kilojoules per mole</td>
		</tr>
		<tr>
			<td>Van der Waals Radius</td>
			<td>140 picometers</td>
		</tr>
		<tr>
			<td>Enthalpy of Fusion</td>
			<td>0.0138 kilojoules/mole</td>
		</tr>
	</table>
	<h1>Uses of Helium</h1>
	<ul>
		<li><p>The primary use of Helium goes in altitudes research and meteorological balloons.</p></li>
		<li><p>It is utilized as an inert protective gas in autogenous welding.</p></li>
		<li><p>It is the only cooler capable of declining temperature lower than 15K (-434ºF).</p></li>
		<li><p>Helium is also used in the production of germanium crystals and silicon crystals.</p></li>
		<li><p>Since it has the ability to diffuse through solids much faster than air, helium is used industrially for pipeline leak detection.</p></li>
	</ul>
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