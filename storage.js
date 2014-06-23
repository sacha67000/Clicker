// JavaScript Document

function	createObject()
{
	game = new Object();
	game.money = 0;
	game.prod_money = 0;
	game.total_money = 0;
	game.worker = 0;
	game.businessman = 0;
	game.supermarket = 0;
	game.factory = 0;
	game.bank = 0;
	game.mine = 0;
	game.president = 0;
	game.antimatter = 0;
}

function	setObject()
{	
	game = new Object();
	game.money = parseInt(window.localStorage.getItem('money'));
	game.prod_money = parseInt(window.localStorage.getItem('prod_money'));
	game.total_money = parseInt(window.localStorage.getItem('total_money'));
	game.worker = parseInt(window.localStorage.getItem('worker'));
	game.buisnessman = parseInt(window.localStorage.getItem('businessman'));
	game.supermarket = parseInt(window.localStorage.getItem('supermarket'));
	game.factory = parseInt(window.localStorage.getItem('factory'));
	game.bank = parseInt(window.localStorage.getItem('bank'));
	game.mine = parseInt(window.localStorage.getItem('mine'));
	game.president = parseInt(window.localStorage.getItem('president'));
	game.antimater = parseInt(window.localStorage.getItem('antimatter'));
}

function	createStorage()
{
	window.localStorage.setItem('money', game.money);
	window.localStorage.setItem('prod_money', game.prod_money);
	window.localStorage.setItem('total_money', game.total_money);
	window.localStorage.setItem('worker', game.worker);
	window.localStorage.setItem('businessman', game.buisnessman);
	window.localStorage.setItem('supermarket', game.supermarket);
	window.localStorage.setItem('factory', game.factory);
	window.localStorage.setItem('bank', game.bank);
	window.localStorage.setItem('mine', game.mine);
	window.localStorage.setItem('president', game.president);
	window.localStorage.setItem('antimatter', game.antimater);
}

function	dollarCounter()
{
	game.money = game.money + (game.prod_money / 2);
	game.total_money = game.total_money + (game.prod_money / 2);
	myDollar = document.getElementById('dollar_counter');
	myDollar.innerHTML = game.money + ' $';
	myDollarProd = document.getElementById('dollar_prod');
	myDollarProd.innerHTML = game.prod_money + ' $ par seconde';
	myDollarTotal = document.getElementById('dollar_total');
	myDollarTotal.innerHTML = 'TOTAL :<br/>' + game.total_money + ' $';
}

function	lcStorage()
{
	if (window.localStorage.length == 0)
	{
		createObject();
		createStorage();
		alert('Bienvenue');
	}
	else
		setObject();
}

function	addDollar()
{
	game.money = game.money + 1;
	game.total_money = game.total_money + 1;
	myDollar.innerHTML = game.money + ' $';
	myDollarTotal.innerHTML = 'TOTAL :<br/>' + game.total_money + ' $';
}

lcStorage();
game.prod_money = 0;
window.setInterval(function(){dollarCounter()}, 500);
elemDollar = document.getElementById("dollar");
elemDollar.onclick = addDollar;
elemSave = document.getElementById("save_button");
elemSave.onclick = createStorage;