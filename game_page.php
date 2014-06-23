<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
	<html xmlns="http://www.w3.org/1999/xhtml">
	<link rel="stylesheet" href="game_page.css" />
	<link rel="icon" type="image/png" href="favicon.png" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Country Click - Alpha 0.1</title>
</head>

<body>
	<header>
		<h1><a href="index.php" title="Index">Country Click</a></h1>
		<?php include("menu.php"); ?>
	</header>
	<div id="left">
		<div id="dollar_panel">
			<h1>Vos ressources</h1>
			<div id="dollar_counter">0 $</div>
			<div id="dollar">
				<img src="img/dollar.png" alt="dollar" />
			</div>
			<div id="dollar_prod">0 $ par seconde</div>
			<div id="dollar_total">TOTAL :<br/>0 $</div>
		</div>
		<div id="save_button">
			<img src="img/disquette.png" alt="disquette" />
		</div>
	</div>

	<div id="central">
	</div>

	<aside>
        <div class="worker_div">
        	<img class="worker_img" src="img/Worker.png" alt="worker" />
            <div id="nb_worker">1 worker(s)</div>
			<div id="worker_cost">Prix : 0$</div>
        </div>
        <div class="worker_div">
        	<img class="worker_img" src="img/Businessman.png" alt="businessman" width="20%"/>
            <div id="nb_businessman">1 cadre(s)</div>
			<div id="businessman_cost">Prix : 0$</div>
        </div>
        <div class="worker_div">
        	<img class="worker_img" src="img/Supermarket.png" alt="supermarket" />
            <div id="nb_supermarket">1 supermarché(s)</div>
			<div id="supermarket_cost">Prix : 0$</div>
        </div>
        <div class="worker_div">
        	<img class="worker_img" src="img/Factory.png" alt="factory" />
            <div id="nb_factory">	1 usine(s)</div>
			<div id="factory_cost">	Prix : 0$</div>
        </div>
        <div class="worker_div">
        	<img class="worker_img" src="img/Bank.png" alt="bank" />
            <div id="nb_bank">1 banque(s)</div>
			<div id="bank_cost">Prix : 0$</div>
        </div>
        <div class="worker_div">
        	<img class="worker_img" src="img/Mine.png" alt="mine" />
            <div id="nb_mine">1 mine(s)</div>
			<div id="mine_cost">Prix : 0$</div>
        </div>
        <div class="worker_div">
        	<img class="worker_img" src="img/President.png" alt="president" />
			<div id="nb_president">1 président(s)</div>
			<div id="president_cost">Prix : 0$</div>
        </div>
        <div class="worker_div">
        	<img class="worker_img" src="img/Antimater.jpg" alt="antimater" />
            <div id="nb_antimater">1 nuage(s) d'antimatière</div>
			<div id="antimater_cost">Prix : 0$</div>
        </div>
	</aside>
<script type="text/javascript" src="storage.js"> </script>
</body>
</html>