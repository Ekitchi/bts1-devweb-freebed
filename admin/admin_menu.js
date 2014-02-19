var adm_boards = new Array("board_01", "board_02", "board_03");
var menu_items = new Array("menu_01", "menu_02", "menu_03");

function hilightMenuItem(item) {
	document.getElementById(item).className = "selected";
}

function hideMenuItem(item) {
	document.getElementById(item).className = "deselected";
}

function displayAdminBoard(item) {
	document.getElementById(item).className = "visible";
}

function hideAdminBoard(item) {
	document.getElementById(item).className = "hidden";
}

function adminMenu(menu, board) {
	for (var i = 0, c = menu_items.length; i < c; i++) {
		hideMenuItem(menu_items[i]);		
	}
	hilightMenuItem(menu);
	
	for (var i = 0, c = adm_boards.length; i < c; i++) {
		hideAdminBoard(adm_boards[i]);		
	}
	displayAdminBoard(board);

}
