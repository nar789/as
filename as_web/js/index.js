function menuclick(obj){
	$("#m1").css("border","0px");
	$("#m1").css("font-weight","normal");
	$("#m2").css("border","0px");
	$("#m2").css("font-weight","");
	$("#m3").css("border","0px");
	$("#m3").css("font-weight","");
	$("#m4").css("border","0px");
	$("#m4").css("font-weight","");
	if(obj.id=="m1"){$("#m1").css("border-bottom","2px solid #8d4bf9");$("#m1").css("font-weight","bold");}
	else if(obj.id=="m2"){$("#m2").css("border-bottom","2px solid #8d4bf9");$("#m2").css("font-weight","bold");}
	else if(obj.id=="m3"){$("#m3").css("border-bottom","2px solid #8d4bf9");$("#m3").css("font-weight","bold");}
	else if(obj.id=="m4"){$("#m4").css("border-bottom","2px solid #8d4bf9");$("#m4").css("font-weight","bold");}
}

function init(){
}

window.onload=init();