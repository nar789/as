function menuclick(obj){
	$("#m1").css("border","0px");
	$("#m1").css("font-weight","normal");
	$("#m2").css("border","0px");
	$("#m2").css("font-weight","");
	$("#m3").css("border","0px");
	$("#m3").css("font-weight","");
	$("#m4").css("border","0px");
	$("#m4").css("font-weight","");
	if(obj.id=="m1"){$("#m1").css("border-bottom","2px solid #8d4bf9");$("#m1").css("font-weight","bold");
		$("#ifr").attr("src","m1.php");
	}
	else if(obj.id=="m2"){$("#m2").css("border-bottom","2px solid #8d4bf9");$("#m2").css("font-weight","bold");$("#ifr").attr("src","m2.php");}
	else if(obj.id=="m3"){$("#m3").css("border-bottom","2px solid #8d4bf9");$("#m3").css("font-weight","bold");$("#ifr").attr("src","m3.php");}
	else if(obj.id=="m4"){$("#m4").css("border-bottom","2px solid #8d4bf9");$("#m4").css("font-weight","bold");$("#ifr").attr("src","hot.php");}
}

function init(){
	var h=$("#list").css("height");
	h=h.substr(0,h.length-2);
	h=parseInt(h);
	h-=140;
	$("#list").css("height",h+"px");
}

window.onload=init();
window.addEventListener("message",function(e){
	var d=e.data;
	if(d.indexOf("back")>=0)
	{
		document.getElementById("ifr").contentWindow.history.back();
	}
	else if(d.indexOf("url")>=0)
	{
		var url=document.getElementById("ifr").contentWindow.location.href
		window.parent.postMessage(url,"*");
	}
	else if(d.indexOf("tel")>=0 || d.indexOf("market")>=0 || d.indexOf("http")>=0)
	{
		window.parent.postMessage(d,"*");
	}else if(d.indexOf("pf/")>=0){
		window.parent.postMessage(d,"*");
	}
},false);