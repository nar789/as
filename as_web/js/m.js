function imgclick(obj)
{
	window.parent.postMessage(obj.src,"*");
}

function showprofile(no,g){
	location.href="pf.php?no="+no+"&g="+g;
}


function directcall(num)
{
	var msg="tel:"+num;
	window.parent.postMessage(msg,"*");
}