<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<title>The Periodic Table</title>
	<style>
		*{
                  margin: 0;
                  font-family: Arial, Helvetica, sans-serif;
                  font-weight: 600;
           }
		td{
			width: 20vw;
			border: 1px solid black;
			text-align: center;
		}
         td:hover{
                  transform: scale(1.12);
                  z-index: 4;
            }
		.noBorder{
			border: none;
		}
		.headingOne{
			background-color: yellow;
			padding: 5px;
			font-size: 5vw;
		}
		._color_1{
			background-color:#00d1d1;
		}
		.color_2{
			background-color:  #ad0000;
		}
		.color_3{
			background-color:  #d68b00;
		}
		.color_4{
			background-color:  #d600d6;
		}
		.color_5{
			background-color:  #ffff24;
		}
		.color_6{
			background-color:  #00ad00;
		}
		.color_7{
			background-color:  #a8a800;
		}
		.color_8{
			background-color: #52ffff;
		}
		.color_9{
			background-color:  #800080;
		}
		.color_10{
			background-color: #ff52ff;
		}
		.text_color_green {
            color: green;
        }

        .text_color_blue {
            color: blue;
        }

        .text_color_red {
            color: red;
        }
        td[data-href]{
        	cursor: pointer;
        }
	</style>
</head>
<body>
	<center>
	<h1>The Periodic Table</h1>
	<table>
		<tr>
			<td data-href="http://localhost/project/hydrogen/hydrogen.php" class="_color_1">1<br>H<br>Hydrogen<br> 1.008</td>
			<td class="noBorder" colspan="16"></td>
			<td data-href="http://localhost/project/helium/helium.php" class="color_9">2<br>He<br>Helium<br>4.003</td>
		</tr>
		<tr>
			<td data-href="http://localhost/project/lithium/lithium.php" class="color_2">3<br>Li<br>Lithium<br>6.941</td>
			<td data-href="http://localhost/project/beryllium/beryllium.php"class="color_3">4<br>Be<br>Beryllium<br>9.01218</td>
			<td class="noBorder" colspan="10"></td>
			<td data-href="http://localhost/project/boron/boron.php"class="color_6">5<br>B<br>Boron<br>10.81</td>
			<td data-href="http://localhost/project/carbon/carbon.php"class="_color_1">6<br>C<br>Carbon<br>12.011</td>
			<td data-href="http://localhost/project/nitrogen/nitrogen.php"class="_color_1">7<br>N<br>Nitrogen<br>14.0067</td>
			<td data-href="http://localhost/project/oxygen/oxygen.php"class="_color_1">8<br>O<br>Oxygen<br>16.0026</td>
			<td data-href="http://localhost/project/fluorine/fluorine.php"class="color_8">9<br>F<br>Flourine<br>18.998</td>
			<td data-href="http://localhost/project/neon/neon.php"class="color_9">10<br>Ne<br>Neon<br>20.179</td>
		</tr>
		<tr>
            <td data-href="http://localhost/project/na/na.php"class="color_2">11<br>Na<br>Sodium<br>22.987</td>
            <td data-href="http://localhost/project/mg/mg.php"class="color_3">12<br>Mg<br>Magnesium<br>24.305</td>
            <td class="noBorder" colspan="10"></td>
            <td data-href="http://localhost/project/al/al.php"class="color_7">13<br>Al<br>Aluminum<br>26.981</td>
            <td data-href="http://localhost/project/si/si.php"class="color_6">14<br>Si<br>Silicon<br>28.0855</td>
            <td data-href="http://localhost/project/p/p.php"class="_color_1">15<br>P<br>Phosphorus<br>30.97376</td>
            <td data-href="http://localhost/project/s/s.php"class="_color_1">16<br>S<br>Sulfur<br>32.06</td>
            <td data-href="http://localhost/project/cl/cl.php"class="color_8">17<br>Cl<br>Chlorine<br>35.453</td>
            <td data-href="http://localhost/project/ar/ar.php"class="color_9">18<br>Ar<br>Argon<br>39.948</td>
		</tr>
		<tr>
            <td data-href="http://localhost/project/k/k.php"class="color_2">19<br>K<br>Potassium<br>39.0983</td>
            <td data-href="http://localhost/project/ca/ca.php"class="color_3">20<br>Ca<br>Calcium<br>40.08</td>
            <td data-href="http://localhost/project/sc/sc.php"class="color_5">21<br>Sc<br>Scandium<br>44.9559</td>
            <td data-href="http://localhost/project/ti/ti.php"class="color_5">22<br>Ti<br>Titanium<br>47.90</td>
            <td data-href="http://localhost/project/v/v.php"class="color_5">23<br>V<br>Vanadium<br>50.95</td>
            <td data-href="http://localhost/project/cr/cr.php"class="color_5">24<br>Cr<br>Chromium<br>51.996</td>
            <td data-href="http://localhost/project/mn/mn.php"class="color_5">25<br>Mn<br>Manganese<br>54.9380</td>
            <td data-href="http://localhost/project/fe/fe.php"class="color_5">26<br>Fe<br>Iron<br>55.8487</td>
            <td data-href="http://localhost/project/co/co.php"class="color_5">27<br>Co<br>Cobalt<br>58.9332</td>
            <td data-href="http://localhost/project/ni/ni.php"class="color_5">28<br>Ni<br>Nickel<br>58.70</td>
            <td data-href="http://localhost/project/cu/cu.php"class="color_5">29<br>Cu<br>Copper<br>63.546</td>
            <td data-href="http://localhost/project/zn/zn.php"class="color_5">30<br>Zn<br>Zinc<br>65.38</td>
            <td data-href="http://localhost/project/ga/ga.php"class="color_7">31<br>Ga<br>Gallium<br>69.72</td>
            <td data-href="http://localhost/project/ge/ge.php"class="color_6">32<br>Ge<br>Germanium<br>72.59</td>
            <td data-href="http://localhost/project/as/as.php"class="color_6">33<br>As<br>Arsenic<br>74.9216</td>
            <td data-href="http://localhost/project/se/se.php"class="_color_1">34<br>Se<br>Selenium<br>78.96</td>
            <td data-href="http://localhost/project/br/br.php"class="color_8">35<br>Br<br>Bromine<br>79.904</td>
            <td data-href="http://localhost/project/kr/kr.php"class="color_9">36<br>Kr<br>Krypton<br>83.80</td>
		</tr>
		<tr>
            <td data-href="http://localhost/project/rb/rb.php"class="color_2">37<br>Rb<br>Rubidium<br>85.467</td>
            <td data-href="http://localhost/project/sr/sr.php"class="color_3">38<br>Sr<br>Strontium<br>87.62</td>
            <td data-href="http://localhost/project/y/y.php"class="color_5">39<br>Y<br>Yttrium<br>88.90</td>
            <td data-href="http://localhost/project/zr/zr.php"class="color_5">40<br>Zr<br>Zirconium<br>91.22</td>
            <td data-href="http://localhost/project/nb/nb.php"class="color_5">41<br>Nb<br>Niobium<br>92.90</td>
            <td data-href="http://localhost/project/mo/mo.php"class="color_5">42<br>Mo<br>Molybdenum<br>95.94</td>
            <td data-href="http://localhost/project/tc/tc.php"class="color_5">43<br>Tc<br>Technetium<br>(98)</td>
            <td data-href="http://localhost/project/ru/ru.php"class="color_5">44<br>Ru<br>Ruthenium<br>101.07</td>
            <td data-href="http://localhost/project/rh/rh.php"class="color_5">45<br>Rh<br>Rhodium<br>102.9055</td>
            <td data-href="http://localhost/project/pd/pd.php"class="color_5">46<br>Pd<br>Palladium<br>106.4</td>
            <td data-href="http://localhost/project/ag/ag.php"class="color_5">47<br>Ag<br>Silver<br>107.868</td>
            <td data-href="http://localhost/project/cd/cd.php"class="color_5">48<br>Cd<br>Cadmium<br>112.41</td>
            <td data-href="http://localhost/project/in/in.php"class="color_7">49<br>In<br>Indium<br>114.82</td>
            <td data-href="http://localhost/project/sn/sn.php"class="color_7">50<br>Sn<br>Tin<br>118.69</td>
            <td data-href="http://localhost/project/sb/sb.php"class="color_6">51<br>Sb<br>Antimony<br>121.75</td>
            <td data-href="http://localhost/project/te/te.php"class="color_6">52<br>Te<br>Tellurium<br>127.60</td>
            <td data-href="http://localhost/project/i/i.php"class="color_8">53<br>I<br>Iodine<br>126.9045</td>
            <td data-href="http://localhost/project/xe/xe.php"class="color_9">54<br>Xe<br>Xenon<br>131.30</td>
		</tr>
		<tr>
            <td class="color_2">55<br />Cs<br>Cesium<br>132.9054</td>
            <td class="color_3">56<br />Ba<br>Barium<br>137.33</td>
            <td class="color_4">57-71<br />&nbsp;</td>
            <td class="color_5">72<br />Hf<br>Hafnium<br>178.49</td>
            <td class="color_5">73<br />Ta<br>Tantalum<br>180.9479</td>
            <td class="color_5">74<br />W<br>Tungsten<br>183.85</td>
            <td class="color_5">75<br />Re<br>Rhenium<br>186.207</td>
            <td class="color_5">76<br />Os<br>Somium<br>190.2</td>
            <td class="color_5">77<br />Ir<br>Iridium<br>192.22</td>
            <td class="color_5">78<br />Pt<br>Platinum<br>195.09</td>
            <td class="color_5">79<br />Au<br>Gold<br>196.9665</td>
            <td class="color_5">80<br />Hg<br>Mercury<br>200.59</td>
            <td class="color_7">81<br />Tl<br>Thallium<br>204.37</td>
            <td class="color_7">82<br />Pb<br>Lead<br>207.2</td>
            <td class="color_7">83<br />Bi<br>Bismuth<br>208.9804</td>
            <td class="color_6">84<br />Po<br>Polonium<br>(209)</td>
            <td class="color_8">85<br />At<br>Astatine<br>(210)</td>
            <td class="color_9">86<br />Rn<br>Radon<br>(222)</td>
		</tr>
		<tr>
            <td class="color_2">87<br>Fr<br>Francium<br>(223)</td>
            <td class="color_3">88<br>Ra<br>Radium<br>226.0254</td>
            <td class="color_10">89-103<br />&nbsp;</td>
            <td class="color_5">104<br>Rf<br>Rutherfordium<br>(261)</td>
            <td class="color_5">105<br>Db<br>Dubnium<br>(262)</td>
            <td class="color_5">106<br>Sg<br>Seaborgium<br>(266)</td>
            <td class="color_5">107<br>Bh<br>Bohrium<br>(264)</td>
            <td class="color_5">108<br>Hs<br>Hassium<br>(269)</td>
            <td class="color_5">109<br>Mt<br>Meitnerium<br>(278)</td>
            <td class="color_5">110<br>Ds<br>Darmastadtium<br>(281)</td>
            <td class="color_5">111<br>Rg<br>Roentgenium(280)</td>
            <td class="color_5">112<br>Cn<br>Copernicium<br>(285)</td>
            <td class="color_7">113<br>Nh<br>Nihonium<br>(286)</td>
            <td class="color_7">114<br>Fl<br>Flerovium<br>(289)</td>
            <td class="color_7">115<br>Mc<br>Moscovium<br>(289)</td>
            <td class="color_7">116<br>Lv<br>Livermorium<br>(293)</td>
            <td class="color_8">117<br>Ts<br>Tennessine<br>(294)</td>
            <td class="color_9">118<br>Og<br>Oganesseon<br>(294)</td>
		</tr>
	</table>
	<table>
		 <tr>
            <td class="noBorder"></td>
         </tr>
		<tr>
            <td class="noBorder" colspan="2" rowspan="2"></td>
            <td class="color_4">57<br>La<br>Lanthanum<br>138.905</td>
            <td class="color_4">58<br>Ce<br>Cerium<br>140.116</td>
            <td class="color_4">59<br>Pr<br>Praseodymium<br>140.908</td>
            <td class="color_4">60<br>Nd<br>Neodymium<br>144.243</td>
            <td class="color_4">61<br>Pm<br>Promethium<br>144.913</td>
            <td class="color_4">62<br>Sm<br>Samarium<br>150.36</td>
            <td class="color_4">63<br>Eu<br>Europium<br>151.964</td>
            <td class="color_4">64<br>Gd<br>Gadolinium<br>157.25</td>
            <td class="color_4">65<br>Tb<br>Terbium<br>158.925</td>
            <td class="color_4">66<br>Dy<br>Dysprosium<br>162.500</td>
            <td class="color_4">67<br>Ho<br>Holmium<br>164.930</td>
            <td class="color_4">68<br>Er<br>Erbium<br>167.259</td>
            <td class="color_4">69<br>Tm<br>Thulium<br>168.934</td>
            <td class="color_4">70<br>Yb<br>Ytterbium<br>173.055</td>
            <td class="color_4">71<br>Lu<br>Lutetium<br>174.967</td>
            <td class="noBorder" colspan="1" rowspan="1"></td>		</tr>
		<tr>
            <td class="color_10">89<br>Ac<br>Actinium<br>227.020</td>
            <td class="color_10">90<br>Th<br>Thorium<br>232.038</td>
            <td class="color_10">91<br>Pa<br>Protactinium<br>231.036</td>
            <td class="color_10">92<br>U<br>Uranium<br>238.029</td>
            <td class="color_10">93<br>Np<br>Neptunium<br>237.048</td>
            <td class="color_10">94<br>Pu<br>Plutonium<br>244.064</td>
            <td class="color_10">95<br>Am<br>Americium<br>243.061</td>
            <td class="color_10">96<br>Cm<br>Curium<br>247.070</td>
            <td class="color_10">97<br>Bk<br>Berkelium<br>47.070</td>
            <td class="color_10">98<br>Cf<br>Californium<br>251.080</td>
            <td class="color_10">99<br>Es<br>Einsteinium<br>(254)</td>
            <td class="color_10">100<br>Fm<br>Fermium<br>257.095</td>
            <td class="color_10">101<br>Md<br>Mendelevium<br>258.1</td>
            <td class="color_10">102<br>No<br>Nobelium<br>259.101</td>
            <td class="color_10">103<br>Lr<br>Lawrencium<br>(262)</td>
		</tr>
	</table>
	<table>
		<tr>
			<td data-href="http://localhost/project/alkali_metals" class="color_2">Alkali<br>Metal</td>
			<td data-href="http://localhost/project/alkaline-earth" class="color_3">Alkaline<br>Earth</td>
			<td class="color_5">Transition<br>Metal</td>
			<td class="color_7">Basic<br>Metal</td>
			<td class="color_6">Metalioid</td>
			<td class="_color_1">Nonmetal</td>
			<td class="color_8 ">Halogen</td>
			<td class="color_9">Nobel<br>Gas</td>
			<td class="color_4">Lanthanide</td>
			<td class="color_10">Actinide</td>
		</tr>
	</table>
	<script>
	document.addEventListener("DOMContentLoaded", () =>{
			const rows=document.querySelectorAll("td[data-href");
			console.log(rows);
			rows.forEach(row =>{
				row.addEventListener("click",() =>{
					window.location.href=row.dataset.href;
				});
			});
		});
	</script>
</center>
</body>
</html>