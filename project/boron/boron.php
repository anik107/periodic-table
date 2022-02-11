<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Boron</title>
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
	<center><h1>Boron</h1></center>
	<div class="box">
		<div class="content1">
			<img src="boron.png" height="180" width="180">
		</div>
		<div class="content2">
			<table>
				<tr>
					<td>Symbol</td>
					<td>B</td>
				</tr>
				<tr>
					<td>Atomic Number</td>
					<td>5</td>
				</tr>
				<tr>
					<td>Discovered by</td>
					<td>Joseph Louis Gay-Lussac in 1808</td>
				</tr>
			</table>
		</div>
	</div>
	<h1>Chemical Properties</h1>
	<table>
		<tr>
			<td>Group</td>
			<td>13</td>
			<td>Melting point</td>
			<td>2349K</td>
		</tr>
		<tr>
			<td>Period</td>
			<td>2</td>
			<td>Boiling point</td>
			<td>4200K</td>
		</tr>
		<tr>
			<td>Electronic configuration</td>
			<td>[He] 2s<sup>2</sup>2p<sup>1</sup></td>
			<td>Density (g cm<sup>-3</sup>)</td>
			<td>7439-93-2</td>
		</tr>
	</table>
	<h1>What is Boron?</h1>
	<ul>
		<li><p>Boron is a chemical element with atomic number five and it is a low abundant element that is found in the earth’s crust and solar system. Boron is a metalloid.</p></li>
	</ul>
	<h1>Uses of Boron</h1>
	<ul>
		<li><p>Sodium tetraborate decahydrate or borax is the most important compound of boron, which is used to insulate fibreglass and sodium perborate bleach.</p></li>
		<li><p>Boric acid is one of the important compounds in textile products. Boron compounds are also used in organic synthesis, a particular type of glass manufacture and as a wood preservative.</p></li>
		<li><p>Boron compounds are also found in homes in the form of food preservatives, especially for fish and margarine.</p></li>
	</ul>
	<h1 style="text-align: center;">
		<a href="https://en.wikipedia.org/wiki/Lithium">
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