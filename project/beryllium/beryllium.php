<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Beryllium</title>
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
	<center><h1>Beryllium</h1></center>
	<div class="box">
		<div class="content1">
			<img src="beryllium.png" height="180" width="180">
		</div>
		<div class="content2">
			<table>
				<tr>
					<td>Symbol</td>
					<td>Be</td>
				</tr>
				<tr>
					<td>Atomic Number</td>
					<td>4</td>
				</tr>
				<tr>
					<td>Discovered by</td>
					<td>Nicholas Louis Vauquelin.</td>
				</tr>
			</table>
		</div>
	</div>
	<h1>What is Beryllium?</h1>
	<ul>
		<li><p>Beryllium is an element with an atomic number of 4 in the periodic table.</p></li>
		<li><p>It is a bivalent and highly toxic element.</p></li>
		<li><p>The element has one of the highest melting points among the light metals.</p></li>
		<li><p>Beryllium exists in 30 different minerals, among which bertrandite, beryl, chrysoberyl, and phenacite are the most important.</p></li>
	</ul>
	<h1>Chemical Properties of Helium</h1>
	<table>
		<tr>
			<td><p>Group</p></td>
			<td><p>2</p></td>
			<td><p>Melting point</p></td>
			<td><p>128<sup>0</sup>C, 1560K</p></td>
		</tr>
		<tr>
			<td><p>Electron Configuration</p></td>
			<td><p>[He]2s<sup>2</sup></p></td>
			<td><p>Boiling point</p></td>
			<td><p>2468<sub>0</sub>C, 2741K</p></td>
		</tr>
	</table>
	<h1>Uses of Helium</h1>
	<ul>
		<li><p>Beryllium is used as an alloying agent.</p></li>
		<li><p>It possesses high strength, non-magnetic properties, better resistance, and dimensionally stable over a significant range of temperature.</p></li>
		<li><p>Beryllium fused with copper forms alloys which are used in defence and aerospace industries is a typical application of Beryllium.</p></li>
	</ul>
	<h1>Certain Facts About Beryllium</h1>
	<ul>
		<li><p>Aquamarine and emerald are the most precious forms of beryl. Beryl is the mineral form of beryllium aluminium cyclosilicate.</p></li>
		<li><p>X-ray detection diagnostic uses of Beryllium as it could pass through latter.</p></li>
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