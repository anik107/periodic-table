<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Hydrogen</title>
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
			bottom: -120px;
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
		a{
			text-decoration: none;
		}
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
	<center><h1>Hydrogen</h1></center>
	<div class="box">
		<div class="content1">
			<img src="hydrogen.png" height="180" width="180">
		</div>
		<div class="content2">
			<table>
				<tr>
					<td>Symbol</td>
					<td>H</td>
				</tr>
				<tr>
					<td>Atomic Number</td>
					<td>1</td>
				</tr>
				<tr>
					<td>Discovered by</td>
					<td>Hydrogen was discovered by Henry Cavendish</td>
				</tr>
			</table>
		</div>
	</div>
	<h1>Chemical Properties of Hydrogen</h1>
	<table>
		<tr>
			<td>Group</td>
			<td>1</td>
			<td>Melting point</td>
			<td>-259.16<sup>0</sup> C, -434.49<sup>0</sup> F, 13.99 K</td>
		</tr>
		<tr>
			<td>Period</td>
			<td>1</td>
			<td>Boiing point</td>
			<td>-252.879<sup>0</sup> C, -423.182<sup>0</sup>F, 20.271 K</td>
		</tr>
		<tr>
			<td>Block</td>
			<td>s</td>
			<td>Density (gm cm<sup>-3)</sup></td>
			<td>0.000082</td>
		</tr>
		<tr>
			<td>Atomic Number</td>
			<td>1</td>
			<td>Relative atomic mass</td>
			<td>1.008</td>
		</tr>
		<tr>
			<td>State at 20<sup>0</sup> C</td>
			<td>Gas</td>
			<td>Key isotopes</td>
			<td><sup>1</sup>H, <sup>1</sup>H</td>
		</tr>
		<tr>
			<td>Electron configuration</td>
			<td>1s<sup>1</sup></td>
			<td>CAS number</td>
			<td>133-74-0</td>
		</tr>
		<tr>
			<td>ChemSpider ID</td>
			<td>4515072</td>
			<td>ChemSpider is a free chemical structure database</td>
			<td>-</td>
		</tr>
	</table>
	<h1>Physical Properties Of Hydrogen</h1>
	<ul>
		<li><p>It is a gas with no colour and odour and has the lowest density of all gases. It is seen as the clean fuel of the future which is generated from water and returned to water when oxidized.</p></li>
		<li><p>It is present in water and in almost all molecules in living things. It remains bonded with carbon and oxygen atoms. It can be said that it is the most abundant element in the universe.</p></li>
		<li><p>It is present as a gas in the atmosphere in one part per million volume. Hydrogen is a spotless and is not toxic and safe to produce from various different sources, transport, and store in large amounts.</p></li>
		<li><p>It is named as energy carrier because it stores energy which is first created somewhere else.</p></li>
		<li><p>This element was artificially produced in the 16th century. It was named as hydrogen whose Greek name is ‘water-former’</p></li>
	</ul>
	<h1>What is Hydrogen?</h1>
	<ul>
		<li><p>The start the tour along the periodic table of elements, the first element to come across is Hydrogen, whose chemical symbol is H. It is the first and most basic among all the elements in the universe. It is also the lightest element in the periodic table, and 90% of all the atoms in the universe are hydrogen atoms.</p></li>
		<li><p>The chemist Lavoisier gives the name hydrogen. It got its name from the Greek word “hydro” meaning water. Lavoisier knew that it existed in every water molecule.</p></li>
	</ul>
	<h1>Uses of Hydrogen</h1>
	<ul>
		<li><p>Ammonia synthesis is the most significant use of hydrogen.</p></li>
		<li><p>A large amount of hydrogen is consumed in the catalytic hydrogenation of vegetable oils to extract solid fat.</p></li>
		<li><p>It is also consumed as a rocket fuel when combined with oxygen, and as a rocket propellant by nuclear energy.</p></li>
		<li><p>Hydrogen is burnt as a fuel to burn in internal combustion engines.</p></li>
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