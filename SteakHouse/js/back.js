

function  show(menu,change){

	var isexpand =document.getElementById(menu).style.display;
	
	if (isexpand=='none') {


document.getElementById(menu).style.display ="block";
document.getElementById(change).innerHTML ="-";
	
}else{
	
document.getElementById(menu).style.display ="none";
document.getElementById(change).innerHTML ="+";

		
}
}