html>
    <head><meta charset="utf-8" /></head>
    <body>
        <center><h1><b>American Collge Of Technology</b> (Department of MSCS)<br></h2>
		<h1>Prediction of COVID-2019 an improved prediction model</h1>

            <h3><b>Data Mining</b> Project<br><h3>
		    <b>Hanna Meressa</b> <br>
            
            See published paper in the <i><a href='https://www.medrxiv.org/content/10.1101/2020.06.18.20134874v1'>medRxiv</a></i> for more details. Source code available on <i><a href='https://github.com/HannaMeressa/new'>GitHub</a></i> under BSD-2 license.</i>

            <br>

            <i>The graphs are updated daily using the <a href='https://ourworldindata.org/coronavirus-source-data'>Our World in Data</a> dataset. Last updated <b>
<?php
$myfile = fopen("plots/lastupdated.txt", "r");
echo fgets($myfile);
fclose($myfile);
?> IST</b>. </i><br>

<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/World_pred.html"></iframe>
<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/World_total.html"></iframe>

<hr>

<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/India_pred.html"></iframe>
<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/India_total.html"></iframe>

<hr>

<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/United States_pred.html"></iframe>
<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/United States_total.html"></iframe>

<hr>

<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/United Kingdom_pred.html"></iframe>
<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/United Kingdom_total.html"></iframe>

<hr>

<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/Brazil_pred.html"></iframe>
<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/Brazil_total.html"></iframe>

<hr>

<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/Italy_pred.html"></iframe>
<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/Italy_total.html"></iframe>

<hr>

<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/France_pred.html"></iframe>
<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/France_total.html"></iframe>

<hr>

<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/Germany_pred.html"></iframe>
<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/Germany_total.html"></iframe>

<hr>

<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/Russia_pred.html"></iframe>
<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/Russia_total.html"></iframe>

<hr>

</center>
    </body>
</html>
