<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Periodic Table</title>
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
	<h1>What is the Periodic Table?</h1>
	<p>The periodic table is an arrangement of all the elements known to man in accordance with their increasing atomic number and recurring chemical properties. They are assorted in a tabular arrangement wherein a row is a period and a column is a group.</p>
	<p>Elements are arranged from left to right and top to bottom in the order of their increasing atomic numbers. Thus,</p>
	<ul>
		<li><p>Elements in the same group will have the same valence electron configuration and hence, similar chemical properties.</p></li>
		<li><p>Whereas, elements in the same period will have an increasing order of valence electrons. Therefore, as the energy level of the atom increases, the number of energy sub-levels per energy level increases.</p></li>
	</ul>
	<p>The first 94 elements of the periodic table are naturally occurring, while the rest from 95 to 118 have only been synthesized in laboratories or nuclear reactors.</p>
	<p>The modern periodic table, the one we use now, is a new and improved version of certain models put forth by scientists in the 19th and 20th century. Dimitri Mendeleev put forward his periodic table based on the findings of some scientists before him like John Newlands and Antoine-Laurent de Lavoisier. However, Mendeleev is given sole credit for his development of the periodic table.</p>
	<center>
		<img src="r.png" height="400" width="700">
	</center>
	<h1>Mendeleev Periodic Table</h1>
	<p>Dimitri Mendeleev, widely referred as the father of the periodic table put forth the first iteration of the periodic table similar to the one we use now. Mendeleev’s periodic law is different from the modern periodic law in one main aspect.</p>
	<ul>
		<li><p>Mendeleev modeled his periodic table on the basis of increasing atomic mass, whereas, the modern periodic law is based on the increasing order of atomic numbers.</p></li>
	</ul>
	<p>Even though Mendeleev’s periodic table was based on atomic weight, he was able to predict the discovery and properties of certain elements. During his time only around half of the elements known to us now were known, and most of the information known about the elements were inaccurate. Mendeleev’s Periodic Table was published in the German Journal of chemistry in 1869.</p>
	<h1>What is the periodic table of elements definition?</h1>
	<p>Periodic Table Of The Elements. A Chart Of The Chemical Elements That Displays Them In Rows Horizontally In Order Of Increasing Atomic Number And Vertically According To Similarity Of The Chemical Properties Of Their Atoms.</p>
	<h1>How many elements are there?</h1>
	<p>118 Elements are present in the Periodic Table.</p>
	<h1 style="text-align: center;">
		<a href="https://en.wikipedia.org/wiki/History_of_the_periodic_table">
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