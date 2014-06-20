// JavaScript Document

function	createObject()
{
	game = new Object();
	game.money = 1;
	game.prod_money = 2;
	game.total_money = 3;
	game.worker = 4;
	game.buisnessman = 5;
	game.supermarket = 6;
	game.factory = 7;
	game.bank = 8;
	game.mine = 9;
	game.president = 10;
	game.antimater = 11;
}

function	createStorage()
{
	createObject();
	window.localStorage.setItem('money', game.money);
	window.localStorage.setItem('prod_money', game.prod_money);
	window.localStorage.setItem('total_money', game.total_money);
	window.localStorage.setItem('worker', game.worker);
	window.localStorage.setItem('buisnessman', game.buisnessman);
	window.localStorage.setItem('supermarket', game.supermarket);
	window.localStorage.setItem('factory', game.factory);
	window.localStorage.setItem('bank', game.bank);
	window.localStorage.setItem('mine', game.mine);
	window.localStorage.setItem('president', game.president);
	window.localStorage.setItem('antimater', game.antimater);
}

function	lcStorage()
{
	if (!window.localStorage)
	{
		createStorage();
		alert(game.money);
	}
	yolo = window.localStorage.getItem('mine');
	alert(yolo);
}

lcStorage();