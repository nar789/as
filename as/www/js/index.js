
var app = {
    // Application Constructor
    initialize: function() {
        document.addEventListener('deviceready', this.onDeviceReady.bind(this), false);
        document.addEventListener("backbutton", this.onBackKeyDown, false);
    },
    onBackKeyDown:function() {
        var ifr = document.getElementById('ifr').contentWindow;
        ifr.postMessage("url","*");
    },
    onDeviceReady: function() {
    	window.addEventListener("message",function(e){
    		var d=e.data;
            if(d.indexOf("m1.php")>=0 || d.indexOf("m2.php")>=0 || d.indexOf("m3.php")>=0 || d.indexOf("hot.php")>=0){
                navigator.app.exitApp();
            }else if(d.indexOf("pf.php")>=0){
                var ifr = document.getElementById('ifr').contentWindow;
                ifr.postMessage("back","*");
            }
    		else if(d.indexOf("tel")>=0 || d.indexOf("market")>=0)
    		{
    			$("#ifr").attr("src",d);
    		}
            else if(d.indexOf('pf/')>=0){
                PhotoViewer.show(d, '',{share:false});
            }
            else if(d.indexOf("http")>=0)
            {
                window.open(d,"_blank");
                //$("#ifr").attr("src",d);
            }
            
    	},false);
    }
};

app.initialize();
