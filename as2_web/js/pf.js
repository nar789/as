
function directcall(num)
{
	var msg="tel:"+num;
	window.parent.postMessage(msg,"*");
}

function imgclick(obj)
{
	window.parent.postMessage(obj.src,"*");
}